<div class="subjects form">
<?php echo $form->create('Subject');?>
	<fieldset>
 		<legend><?php __('Edit Subject');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('code');
		echo $form->input('name');
		echo $form->input('unit_lecture');
		echo $form->input('unit_laboratory');
		echo $form->input('credits');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Subject.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Subject.id'))); ?></li>
		<li><?php echo $html->link(__('List Subjects', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Precorequisites', true), array('controller' => 'precorequisites', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('List Subject Sections', true), array('controller' => 'subject_sections', 'action' => 'index')); ?> </li>
	</ul>
</div>
