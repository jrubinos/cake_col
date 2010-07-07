<div class="studentSubjects view">
<h2><?php  __('StudentSubject');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentSubject['StudentSubject']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Student'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($studentSubject['Student']['id'], array('controller' => 'students', 'action' => 'view', $studentSubject['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentSubject['StudentSubject']['subject_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Final Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $studentSubject['StudentSubject']['final_grade']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit StudentSubject', true), array('action' => 'edit', $studentSubject['StudentSubject']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete StudentSubject', true), array('action' => 'delete', $studentSubject['StudentSubject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $studentSubject['StudentSubject']['id'])); ?> </li>
		<li><?php echo $html->link(__('List StudentSubjects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New StudentSubject', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
