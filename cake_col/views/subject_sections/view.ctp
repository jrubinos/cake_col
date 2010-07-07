<div class="subjectSections view">
<h2><?php  __('SubjectSection');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSection['SubjectSection']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Faculty Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSection['SubjectSection']['faculty_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($subjectSection['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $subjectSection['Subject']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gradingsystem Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSection['SubjectSection']['gradingsystem_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSection['SubjectSection']['parent_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SubjectSection', true), array('action' => 'edit', $subjectSection['SubjectSection']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SubjectSection', true), array('action' => 'delete', $subjectSection['SubjectSection']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjectSection['SubjectSection']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SubjectSections', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New SubjectSection', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
