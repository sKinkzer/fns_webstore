<div class="panel panel-default">
	<div class="panel-heading">
		<h3><?= h($product->name) ?></h3>
	</div>
	<div class="panel-body">
		<ul class="list-group">
		    <li class="list-group-item"><strong>Code:</strong> <?= h($product->code); ?></li>
		    <li class="list-group-item"><strong>Description:</strong> <?= h($product->description); ?></li>
		  </ul>
	</div>
	<div class="panel-footer">
		<a class="btn btn-default" href="<?= $referer; ?>">Back</a>
		<fns-add-to-cart-button product="{id: <?= h($product->id); ?>}"></fns-add-to-cart-button>
	</div>
</div>