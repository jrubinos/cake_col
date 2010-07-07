<div class="studentSubjects form">
<?php echo $form->create('StudentSubject');?>
	<fieldset>
 		<legend><?php __('Edit StudentSubject');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('student_id');
		echo $form->input('subject_id');
		echo $form->input('final_grade');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('StudentSubject.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('StudentSubject.id'))); ?></li>
		<li><?php echo $html->link(__('List StudentSubjects', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
