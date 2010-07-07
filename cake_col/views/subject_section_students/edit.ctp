<div class="subjectSectionStudents form">
<?php echo $form->create('SubjectSectionStudent');?>
	<fieldset>
 		<legend><?php __('Edit SubjectSectionStudent');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('subject_section_id');
		echo $form->input('subject_id');
		echo $form->input('quiz_grade');
		echo $form->input('quiz_rating');
		echo $form->input('prelimexam_grade');
		echo $form->input('prelimexam_rating');
		echo $form->input('midtermexam_grade');
		echo $form->input('midtermexam_rating');
		echo $form->input('prefiexam_grade');
		echo $form->input('prefiexam_rating');
		echo $form->input('finalexam_grade');
		echo $form->input('finalexam_rating');
		echo $form->input('final_grade');
		echo $form->input('final_rating');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('SubjectSectionStudent.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('SubjectSectionStudent.id'))); ?></li>
		<li><?php echo $html->link(__('List SubjectSectionStudents', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Subject Sections', true), array('controller' => 'subject_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Subject Section', true), array('controller' => 'subject_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
