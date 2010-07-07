<div class="precorequisites form">
<?php echo $form->create('Precorequisite');?>
	<fieldset>
 		<legend><?php __('Add Precorequisite');?></legend>
	<?php
		echo $form->input('type');
		echo $form->input('curriculum_subjects_id');
		echo $form->input('subject_id');
		echo $form->input('year_standing');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Precorequisites', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Curriculum Subjects', true), array('controller' => 'curriculum_subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Curriculum Subjects', true), array('controller' => 'curriculum_subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
