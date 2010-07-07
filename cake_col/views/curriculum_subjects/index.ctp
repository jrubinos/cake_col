<div class="curriculumSubjects index">
<h2><?php __('CurriculumSubjects');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('curriculum_id');?></th>
	<th><?php echo $paginator->sort('subject_id');?></th>
	<th><?php echo $paginator->sort('year_level');?></th>
	<th><?php echo $paginator->sort('semester');?></th>
	<th><?php echo $paginator->sort('precorequisite_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($curriculumSubjects as $curriculumSubject):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $curriculumSubject['CurriculumSubject']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($curriculumSubject['Curriculum']['name'], array('controller' => 'curriculums', 'action' => 'view', $curriculumSubject['Curriculum']['id'])); ?>
		</td>
		<td>
			<?php echo $curriculumSubject['CurriculumSubject']['subject_id']; ?>
		</td>
		<td>
			<?php echo $curriculumSubject['CurriculumSubject']['year_level']; ?>
		</td>
		<td>
			<?php echo $curriculumSubject['CurriculumSubject']['semester']; ?>
		</td>
		<td>
			<?php echo $curriculumSubject['CurriculumSubject']['precorequisite_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $curriculumSubject['CurriculumSubject']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $curriculumSubject['CurriculumSubject']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $curriculumSubject['CurriculumSubject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curriculumSubject['CurriculumSubject']['id'])); ?>
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
		<li><?php echo $html->link(__('New CurriculumSubject', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Curriculum', true), array('controller' => 'curriculums', 'action' => 'add')); ?> </li>
	</ul>
</div>
