<?= $this->element('products-list', ['products' => $products]); ?>
<div class="row">
	<div class="col-xs-12">
		<div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->prev('< ' . __('previous')) ?>
	            <?= $this->Paginator->numbers() ?>
	            <?= $this->Paginator->next(__('next') . ' >') ?>
	        </ul>
	        <p><?= $this->Paginator->counter() ?></p>
	    </div>
	</div>
</div>