<div class="faculties form">
<?php echo $form->create('Faculty');?>
	<fieldset>
 		<legend><?php __('Edit Faculty');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('user_id',array('type'=> 'hidden'));
		echo $form->input('idnumber');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Faculty.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Faculty.id'))); ?></li>
		<li><?php echo $html->link(__('List Faculties', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('List Gradingsystems', true), array('controller' => 'gradingsystems', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('List Subject Sections', true), array('controller' => 'subject_sections', 'action' => 'index')); ?> </li>
	</ul>
</div>
