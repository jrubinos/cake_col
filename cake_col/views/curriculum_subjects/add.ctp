<div class="curriculumSubjects form">
<?php echo $form->create('CurriculumSubject');?>
	<fieldset>
 		<legend><?php __('Add CurriculumSubject');?></legend>
	<?php
		echo $form->input('curriculum_id');
		echo $form->input('subject_id');
		echo $form->input('year_level');
		echo $form->input('semester');
		echo $form->input('precorequisite_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List CurriculumSubjects', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Curriculum', true), array('controller' => 'curriculums', 'action' => 'add')); ?> </li>
	</ul>
</div>
