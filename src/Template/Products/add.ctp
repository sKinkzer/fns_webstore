<h3>Add new product</h3>
<?php 
	echo $this->Form->create($product); 
	echo $this->Form->input('name', [
	    'label' => 'Name of the product',
	    'class' => 'form-control'
	]);
	echo $this->Form->input('code', [
	    'label' => 'Product code',
	    'class' => 'form-control'
	]);
	echo $this->Form->input('description', [
	    'label' => 'Product description',
	    'class' => 'form-control'
	]);
	echo $this->Form->button('Add new product', [
		'class' => 'btn btn-primary'
	]);
	echo $this->Form->end();
?>
