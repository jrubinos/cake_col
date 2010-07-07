<div class="curriculums view">
<h2><?php  __('Curriculum');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($curriculum['Course']['name'], array('controller' => 'courses', 'action' => 'view', $curriculum['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('School Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['school_year']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Curriculum', true), array('action' => 'edit', $curriculum['Curriculum']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Curriculum', true), array('action' => 'delete', $curriculum['Curriculum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curriculum['Curriculum']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Curriculums', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Subjects');?></h3>
	<?php if (!empty($curriculum['CurriculumSubject'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Curriculum Id'); ?></th>
		<th><?php __('Subject Id'); ?></th>
		<th><?php __('Year Level'); ?></th>
		<th><?php __('Semester'); ?></th>
		<th><?php __('Precorequisite Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curriculum['CurriculumSubject'] as $curriculumSubject):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $curriculumSubject['id'];?></td>
			<td><?php echo $curriculumSubject['curriculum_id'];?></td>
			<td><?php echo $curriculumSubject['subject_id'];?></td>
			<td><?php echo $curriculumSubject['year_level'];?></td>
			<td><?php echo $curriculumSubject['semester'];?></td>
			<td><?php echo $curriculumSubject['precorequisite_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'curriculum_subjects', 'action' => 'view', $curriculumSubject['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'curriculum_subjects', 'action' => 'edit', $curriculumSubject['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'curriculum_subjects', 'action' => 'delete', $curriculumSubject['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curriculumSubject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Curriculum Subject', true), array('controller' => 'curriculum_subjects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Students');?></h3>
	<?php if (!empty($curriculum['Student'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Idnumber'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curriculum['Student'] as $student):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $student['id'];?></td>
			<td><?php echo $student['user_id'];?></td>
			<td><?php echo $student['idnumber'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'students', 'action' => 'delete', $student['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
