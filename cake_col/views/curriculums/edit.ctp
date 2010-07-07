<div class="curriculums form">
<?php echo $form->create('Curriculum');?>
	<fieldset>
 		<legend><?php __('Edit Curriculum');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('course_id');
		echo $form->input('school_year');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Curriculum.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Curriculum.id'))); ?></li>
		<li><?php echo $html->link(__('List Curriculums', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Curriculum Subjects', true), array('controller' => 'curriculum_subjects', 'action' => 'index')); ?> </li>
	</ul>
</div>
