<div class="subjectSections form">
<?php echo $form->create('SubjectSection');?>
	<fieldset>
 		<legend><?php __('Add SubjectSection');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('faculty_id');
		echo $form->input('subject_id');
		echo $form->input('gradingsystem_id');
		echo $form->input('parent_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List SubjectSections', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
