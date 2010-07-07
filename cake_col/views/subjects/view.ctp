<div class="subjects view">
<h2><?php  __('Subject');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unit Lecture'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['unit_lecture']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unit Laboratory'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['unit_laboratory']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Credits'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['credits']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Subject', true), array('action' => 'edit', $subject['Subject']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Subject', true), array('action' => 'delete', $subject['Subject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Subjects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('List Precorequisites', true), array('controller' => 'precorequisites', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Precorequisite', true), array('controller' => 'precorequisites', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Subject Sections', true), array('controller' => 'subject_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('List Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Precorequisites');?></h3>
	<?php if (!empty($subject['Precorequisite'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Curriculum Subjects Id'); ?></th>
		<th><?php __('Subject Id'); ?></th>
		<th><?php __('Year Standing'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subject['Precorequisite'] as $precorequisite):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $precorequisite['id'];?></td>
			<td><?php echo $precorequisite['type'];?></td>
			<td><?php echo $precorequisite['curriculum_subjects_id'];?></td>
			<td><?php echo $precorequisite['subject_id'];?></td>
			<td><?php echo $precorequisite['year_standing'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'precorequisites', 'action' => 'view', $precorequisite['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'precorequisites', 'action' => 'edit', $precorequisite['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'precorequisites', 'action' => 'delete', $precorequisite['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $precorequisite['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Precorequisite', true), array('controller' => 'precorequisites', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Subject Sections');?></h3>
	<?php if (!empty($subject['SubjectSection'])):?>
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
		foreach ($subject['SubjectSection'] as $subjectSection):
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

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Subject Section', true), array('controller' => 'subject_sections', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Curriculums');?></h3>
	<?php if (!empty($subject['Curriculum'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Course Id'); ?></th>
		<th><?php __('School Year'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subject['Curriculum'] as $curriculum):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $curriculum['id'];?></td>
			<td><?php echo $curriculum['name'];?></td>
			<td><?php echo $curriculum['course_id'];?></td>
			<td><?php echo $curriculum['school_year'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'curriculums', 'action' => 'view', $curriculum['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'curriculums', 'action' => 'edit', $curriculum['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'curriculums', 'action' => 'delete', $curriculum['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curriculum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Curriculum', true), array('controller' => 'curriculums', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Students');?></h3>
	<?php if (!empty($subject['Student'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Idnumber'); ?></th>
		<th><?php __('Curriculum Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subject['Student'] as $student):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $student['id'];?></td>
			<td><?php echo $student['user_id'];?></td>
			<td><?php echo $student['idnumber'];?></td>
			<td><?php echo $student['curriculum_id'];?></td>
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
