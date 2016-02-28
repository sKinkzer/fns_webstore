<div class="product">
	<div class="col-md-12 product-details">
		<?= $this->Html->link(
                    "$product->name $product->code",
                    "/products/$product->id"
                ); ?>
	</div>
	<div>
		<fns-add-to-cart-button product="{id: <?= h($product->id); ?>}"></fns-add-to-cart-button>
	</div>
</div>