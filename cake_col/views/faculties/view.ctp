<div class="faculties view">
<h2><?php  __('Faculty');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $faculty['Faculty']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($faculty['User']['id'], array('controller' => 'users', 'action' => 'view', $faculty['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Idnumber'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $faculty['Faculty']['idnumber']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Faculty', true), array('action' => 'edit', $faculty['Faculty']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Faculty', true), array('action' => 'delete', $faculty['Faculty']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $faculty['Faculty']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Faculties', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Faculty', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Gradingsystems', true), array('controller' => 'gradingsystems', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Gradingsystem', true), array('controller' => 'gradingsystems', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Subject Sections', true), array('controller' => 'subject_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Subject Section', true), array('controller' => 'subject_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Gradingsystems');?></h3>
	<?php if (!empty($faculty['Gradingsystem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($faculty['Gradingsystem'] as $gradingsystem):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $gradingsystem['id'];?></td>
			<td><?php echo $gradingsystem['name'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'gradingsystems', 'action' => 'view', $gradingsystem['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'gradingsystems', 'action' => 'edit', $gradingsystem['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'gradingsystems', 'action' => 'delete', $gradingsystem['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gradingsystem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Gradingsystem', true), array('controller' => 'gradingsystems', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Subject Sections');?></h3>
	<?php if (!empty($faculty['SubjectSection'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Faculty Id'); ?></th>
		<th><?php __('Subject Id'); ?></th>
		<th><?php __('Gradingsystem Id'); ?></th>
		<th><?php __('Parent Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($faculty['SubjectSection'] as $subjectSection):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subjectSection['id'];?></td>
			<td><?php echo $subjectSection['faculty_id'];?></td>
			<td><?php echo $subjectSection['subject_id'];?></td>
			<td><?php echo $subjectSection['gradingsystem_id'];?></td>
			<td><?php echo $subjectSection['parent_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'subject_sections', 'action' => 'view', $subjectSection['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'subject_sections', 'action' => 'edit', $subjectSection['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'subject_sections', 'action' => 'delete', $subjectSection['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjectSection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
