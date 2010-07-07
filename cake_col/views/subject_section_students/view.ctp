<div class="subjectSectionStudents view">
<h2><?php  __('SubjectSectionStudent');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject Section'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($subjectSectionStudent['SubjectSection']['id'], array('controller' => 'subject_sections', 'action' => 'view', $subjectSectionStudent['SubjectSection']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['subject_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quiz Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['quiz_grade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quiz Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['quiz_rating']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prelimexam Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['prelimexam_grade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prelimexam Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['prelimexam_rating']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Midtermexam Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['midtermexam_grade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Midtermexam Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['midtermexam_rating']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prefiexam Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['prefiexam_grade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prefiexam Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['prefiexam_rating']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Finalexam Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['finalexam_grade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Finalexam Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['finalexam_rating']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Final Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['final_grade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Final Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['final_rating']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SubjectSectionStudent', true), array('action' => 'edit', $subjectSectionStudent['SubjectSectionStudent']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SubjectSectionStudent', true), array('action' => 'delete', $subjectSectionStudent['SubjectSectionStudent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjectSectionStudent['SubjectSectionStudent']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SubjectSectionStudents', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New SubjectSectionStudent', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Subject Sections', true), array('controller' => 'subject_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Subject Section', true), array('controller' => 'subject_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
