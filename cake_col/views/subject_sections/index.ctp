<div class="subjectSections index">
<h2><?php __('SubjectSections');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('faculty_id');?></th>
	<th><?php echo $paginator->sort('subject_id');?></th>
	<th><?php echo $paginator->sort('gradingsystem_id');?></th>
	<th><?php echo $paginator->sort('parent_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($subjectSections as $subjectSection):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $subjectSection['SubjectSection']['id']; ?>
		</td>
		<td>
			<?php echo $subjectSection['SubjectSection']['faculty_id']; ?>
		</td>
		<td>
			<?php echo $html->link($subjectSection['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $subjectSection['Subject']['id'])); ?>
		</td>
		<td>
			<?php echo $subjectSection['SubjectSection']['gradingsystem_id']; ?>
		</td>
		<td>
			<?php echo $subjectSection['SubjectSection']['parent_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $subjectSection['SubjectSection']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $subjectSection['SubjectSection']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $subjectSection['SubjectSection']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjectSection['SubjectSection']['id'])); ?>
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
		<li><?php echo $html->link(__('New SubjectSection', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
