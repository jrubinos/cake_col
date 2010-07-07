<div class="curriculums form">
<?php echo $form->create('Curriculum');?>
	<fieldset>
 		<legend><?php __('Add Curriculum');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('course_id');
		echo $form->input('school_year');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Curriculums', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
	</ul>
</div>
