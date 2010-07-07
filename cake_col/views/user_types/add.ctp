<div class="userTypes form">
<?php echo $form->create('UserType');?>
	<fieldset>
 		<legend><?php __('Add UserType');?></legend>
	<?php
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List UserTypes', true), array('action' => 'index'));?></li>
	</ul>
</div>
