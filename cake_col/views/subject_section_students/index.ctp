<div class="subjectSectionStudents index">
<h2><?php __('SubjectSectionStudents');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('subject_section_id');?></th>
	<th><?php echo $paginator->sort('subject_id');?></th>
	<th><?php echo $paginator->sort('quiz_grade');?></th>
	<th><?php echo $paginator->sort('quiz_rating');?></th>
	<th><?php echo $paginator->sort('prelimexam_grade');?></th>
	<th><?php echo $paginator->sort('prelimexam_rating');?></th>
	<th><?php echo $paginator->sort('midtermexam_grade');?></th>
	<th><?php echo $paginator->sort('midtermexam_rating');?></th>
	<th><?php echo $paginator->sort('prefiexam_grade');?></th>
	<th><?php echo $paginator->sort('prefiexam_rating');?></th>
	<th><?php echo $paginator->sort('finalexam_grade');?></th>
	<th><?php echo $paginator->sort('finalexam_rating');?></th>
	<th><?php echo $paginator->sort('final_grade');?></th>
	<th><?php echo $paginator->sort('final_rating');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($subjectSectionStudents as $subjectSectionStudent):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($subjectSectionStudent['SubjectSection']['id'], array('controller' => 'subject_sections', 'action' => 'view', $subjectSectionStudent['SubjectSection']['id'])); ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['subject_id']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['quiz_grade']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['quiz_rating']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['prelimexam_grade']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['prelimexam_rating']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['midtermexam_grade']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['midtermexam_rating']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['prefiexam_grade']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['prefiexam_rating']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['finalexam_grade']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['finalexam_rating']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['final_grade']; ?>
		</td>
		<td>
			<?php echo $subjectSectionStudent['SubjectSectionStudent']['final_rating']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $subjectSectionStudent['SubjectSectionStudent']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $subjectSectionStudent['SubjectSectionStudent']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $subjectSectionStudent['SubjectSectionStudent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjectSectionStudent['SubjectSectionStudent']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New SubjectSectionStudent', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Subject Sections', true), array('controller' => 'subject_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Subject Section', true), array('controller' => 'subject_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
