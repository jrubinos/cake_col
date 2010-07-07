<div class="precorequisites view">
<h2><?php  __('Precorequisite');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precorequisite['Precorequisite']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precorequisite['Precorequisite']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Curriculum Subjects'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($precorequisite['CurriculumSubjects']['id'], array('controller' => 'curriculum_subjects', 'action' => 'view', $precorequisite['CurriculumSubjects']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precorequisite['Precorequisite']['subject_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Year Standing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $precorequisite['Precorequisite']['year_standing']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Precorequisite', true), array('action' => 'edit', $precorequisite['Precorequisite']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Precorequisite', true), array('action' => 'delete', $precorequisite['Precorequisite']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $precorequisite['Precorequisite']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Precorequisites', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Precorequisite', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Curriculum Subjects', true), array('controller' => 'curriculum_subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Curriculum Subjects', true), array('controller' => 'curriculum_subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Curriculum Subjects');?></h3>
	<?php if (!empty($precorequisite['CurriculumSubject'])):?>
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
		foreach ($precorequisite['CurriculumSubject'] as $curriculumSubject):
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
