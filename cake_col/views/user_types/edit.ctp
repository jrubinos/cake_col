<div class="userTypes form">
<?php echo $form->create('UserType');?>
	<fieldset>
 		<legend><?php __('Edit UserType');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('UserType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('UserType.id'))); ?></li>
		<li><?php echo $html->link(__('List UserTypes', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
