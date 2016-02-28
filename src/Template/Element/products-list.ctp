<div class="row products-list">
	<?php foreach ($products as $product): ?>
		<div class="col-md-4 text-center">
			<?= $this->element('product', ['product' => $product]); ?> 	
		</div>
	<?php endforeach; ?>
</div>