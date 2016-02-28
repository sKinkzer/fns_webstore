angular.module('fnsWebstore', ['ngResource'])
	.factory('CartProduct', ['$resource', function ($resource) {
		return $resource('/cart_products/:id');	
	}])
	.factory('Product', ['$resource', function ($resource) {
		return $resource('/products/:id');	
	}])
	.directive('fnsShoppingCart', ['CartProduct', 'Product', function (CartProduct, Product) {
		return {
			restrict: 'E',
			bindToController: {

			},
			controller: function () {
				this.cartProducts = CartProduct.query();
			},
			controllerAs: 'shoppingCart',
			scope: true,
			template: '<div class="col-xs-12">' +
						'<ul class="cart-products">' +
							'<li ng-repeat="cartProduct in shoppingCart.cartProducts track by $index">' +
								'{{cartProduct.id}}' +
							'</li>' +
						'</ul>' +
					   '</div>';
		}
	}]);