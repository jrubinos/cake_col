<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Add User');?></legend>
	<?php
		echo $form->input('username');
		echo $form->input('password');
		echo $form->input('user_type_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List User Types', true), array('controller' => 'user_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User Type', true), array('controller' => 'user_types', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Faculties', true), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Faculty', true), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
