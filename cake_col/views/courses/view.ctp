<div class="courses view">
<h2><?php  __('Course');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['duration']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Course', true), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Course', true), array('action' => 'delete', $course['Course']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $course['Course']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Courses', true), array('action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Curriculums');?></h3>
	<?php if (!empty($course['Curriculum'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('School Year'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['Curriculum'] as $curriculum):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $curriculum['id'];?></td>
			<td><?php echo $curriculum['name'];?></td>
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
            <li><?php echo $html->link(__('List Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?> </li>
			<li><?php echo $html->link(__('New Curriculum', true), array('controller' => 'curriculums', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
