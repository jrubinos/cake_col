<div class="students form">
<?php echo $form->create('Student');?>
	<fieldset>
 		<legend><?php __('Edit Student');?></legend>
	<?php
		echo $form->input('id');
        echo $form->input('user_id',array('type'=> 'hidden'));
		
		echo $form->input('idnumber');
		echo $form->input('curriculum_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Student.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Student.id'))); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
