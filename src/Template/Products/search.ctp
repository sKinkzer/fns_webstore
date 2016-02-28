<div class="row">
	<div class="col-xs-12 form-group">
		<h3>Showing <?= $products->count(); ?> results for query "<?= $keyword; ?>"</h3>
		<form method="get" action="">
			<input type="hidden" name="keyword" value="<?= $keyword; ?>">
			<input type="hidden" name="order" value="<?= $order == 'DESC' ? 'ASC' : 'DESC'; ?>">
			<button class="btn btn-default btn-sm">
				Sort <?= $order == 'DESC' ? 'ascending' : 'descending'; ?>
			</button>
		</form>
	</div>
</div>
<?= $this->element('products-list', ['products' => $products]); ?>