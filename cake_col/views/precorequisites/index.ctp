<div class="precorequisites index">
<h2><?php __('Precorequisites');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('type');?></th>
	<th><?php echo $paginator->sort('curriculum_subjects_id');?></th>
	<th><?php echo $paginator->sort('subject_id');?></th>
	<th><?php echo $paginator->sort('year_standing');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($precorequisites as $precorequisite):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $precorequisite['Precorequisite']['id']; ?>
		</td>
		<td>
			<?php echo $precorequisite['Precorequisite']['type']; ?>
		</td>
		<td>
			<?php echo $html->link($precorequisite['CurriculumSubjects']['id'], array('controller' => 'curriculum_subjects', 'action' => 'view', $precorequisite['CurriculumSubjects']['id'])); ?>
		</td>
		<td>
			<?php echo $precorequisite['Precorequisite']['subject_id']; ?>
		</td>
		<td>
			<?php echo $precorequisite['Precorequisite']['year_standing']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $precorequisite['Precorequisite']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $precorequisite['Precorequisite']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $precorequisite['Precorequisite']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $precorequisite['Precorequisite']['id'])); ?>
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
		<li><?php echo $html->link(__('New Precorequisite', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Curriculum Subjects', true), array('controller' => 'curriculum_subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Curriculum Subjects', true), array('controller' => 'curriculum_subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
