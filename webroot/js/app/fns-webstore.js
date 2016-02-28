angular.module('fnsWebstore', ['ngResource', 'httpPostFix'], function ($httpProvider) {
	// To get CakePHP recognize ajax requests
	$httpProvider.defaults.headers.post['X-Requested-With'] = 'XMLHttpRequest';
})
	.factory('CartProduct', ['$resource', function ($resource) {
		return $resource('/cart_products/:id.json', {id: '@id'}, {query: {isArray: false}});		
	}])
	.factory('Product', ['$resource', function ($resource) {
		return $resource('/products/:id.json', {id: '@id'}, {query: {isArray: false}});	
	}])
	.factory('CartProducts', ['CartProduct', function (CartProduct) {
		return {
			collection: [],
			load: function () {
				var self = this;
				CartProduct.query().$promise.then(function (data) {
					angular.forEach(data.cartProducts, function (product) {
						self.collection.push(product);
					});
				});
				return this.collection;
			},
			add: function (item) {
				this.collection.push(item);
			}
		}
	}])
	.directive('fnsShoppingCart', ['CartProducts', 'Product', function (CartProducts, Product) {
		return {
			restrict: 'E',
			bindToController: {

			},
			controller: function () {
				this.listShown = false;
				this.cartProducts = CartProducts.load();

				this.toggleList = function () {
					this.listShown = !this.listShown;
				}
			},
			controllerAs: 'shoppingCart',
			scope: true,
			template: '<div class="col-xs-12">' +
						'<a ng-click="shoppingCart.toggleList()" href="">Cart ({{shoppingCart.cartProducts.length}})</a>' +
						'<ul ng-show="shoppingCart.listShown" class="cart-products">' +
							'<li ng-repeat="cartProduct in shoppingCart.cartProducts track by $index">' +
								'{{cartProduct.product.name}}' +
							'</li>' +
						'</ul>' +
					   '</div>'
		}
	}])
	.directive('fnsAddToCartButton', ['CartProduct', 'CartProducts', function (CartProduct, CartProducts) {
		return {
			restrict: 'E',
			bindToController: {
				product: '='
			},
			controller: function () {
				this.saving = false;
				this.add = function ($event) {
					var self = this;
					var cartProduct = new CartProduct({product_id: this.product.id});
					this.saving = true;
					cartProduct.$save().then(function (data) {
						self.saving = false;
						CartProducts.add(data.cartProduct);
					}, function () {
						self.saving = false;
					});
				}
			},
			controllerAs: 'addToCart',
			scope: true,
			template: '<button class="btn btn-success" ng-click="addToCart.add($event)">' +
						'<span ng-hide="addToCart.saving">Add to Cart</span>' +
						'<span ng-show="addToCart.saving">Adding...</span>' +
					  '</button>'
		}
	}])