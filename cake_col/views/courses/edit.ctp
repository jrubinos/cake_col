<div class="courses form">
<?php echo $form->create('Course');?>
	<fieldset>
 		<legend><?php __('Edit Course');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('code');
		echo $form->input('name');
		echo $form->input('duration');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Course.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Course.id'))); ?></li>
		<li><?php echo $html->link(__('List Courses', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Curriculum', true), array('controller' => 'curriculums', 'action' => 'add')); ?> </li>
	</ul>
</div>
