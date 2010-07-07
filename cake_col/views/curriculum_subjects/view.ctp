<div class="curriculumSubjects view">
<h2><?php  __('CurriculumSubject');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculumSubject['CurriculumSubject']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Curriculum'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($curriculumSubject['Curriculum']['name'], array('controller' => 'curriculums', 'action' => 'view', $curriculumSubject['Curriculum']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculumSubject['CurriculumSubject']['subject_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Year Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculumSubject['CurriculumSubject']['year_level']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Semester'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculumSubject['CurriculumSubject']['semester']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Precorequisite Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculumSubject['CurriculumSubject']['precorequisite_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit CurriculumSubject', true), array('action' => 'edit', $curriculumSubject['CurriculumSubject']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete CurriculumSubject', true), array('action' => 'delete', $curriculumSubject['CurriculumSubject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curriculumSubject['CurriculumSubject']['id'])); ?> </li>
		<li><?php echo $html->link(__('List CurriculumSubjects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New CurriculumSubject', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Curriculum', true), array('controller' => 'curriculums', 'action' => 'add')); ?> </li>
	</ul>
</div>
