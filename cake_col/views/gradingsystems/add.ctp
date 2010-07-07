<div class="gradingsystems form">
<?php echo $form->create('Gradingsystem');?>
	<fieldset>
 		<legend><?php __('Add Gradingsystem');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('description');
		echo $form->input('faculty_id');
		echo $form->input('quiz');
		echo $form->input('prelim');
		echo $form->input('midterm');
		echo $form->input('prefi');
		echo $form->input('final');
		echo $form->input('percentage');
		echo $form->input('parent_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Gradingsystems', true), array('action' => 'index'));?></li>
	</ul>
</div>
