<div class="students view">
<h2><?php  __('Student');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $student['Student']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $student['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Idnumber'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $student['Student']['idnumber']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Curriculum Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $student['Curriculum']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Student', true), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Student', true), array('action' => 'delete', $student['Student']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $student['Student']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Students', true), array('action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Student Subjects');?></h3>
	<?php if (!empty($student['StudentSubject'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Student Id'); ?></th>
		<th><?php __('Subject Id'); ?></th>
		<th><?php __('Final Grade'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($student['StudentSubject'] as $studentSubject):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $studentSubject['id'];?></td>
			<td><?php echo $studentSubject['student_id'];?></td>
			<td><?php echo $studentSubject['subject_id'];?></td>
			<td><?php echo $studentSubject['final_grade'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'student_subjects', 'action' => 'view', $studentSubject['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'student_subjects', 'action' => 'edit', $studentSubject['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'student_subjects', 'action' => 'delete', $studentSubject['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $studentSubject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Student Subject', true), array('controller' => 'student_subjects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
