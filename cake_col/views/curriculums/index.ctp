<div class="curriculums index">
<h2><?php __('Curriculums');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('course_id');?></th>
	<th><?php echo $paginator->sort('school_year');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($curriculums as $curriculum):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $curriculum['Curriculum']['id']; ?>
		</td>
		<td>
			<?php echo $curriculum['Curriculum']['name']; ?>
		</td>
		<td>
			<?php echo $html->link($curriculum['Course']['name'], array('controller' => 'courses', 'action' => 'view', $curriculum['Course']['id'])); ?>
		</td>
		<td>
			<?php echo $curriculum['Curriculum']['school_year']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $curriculum['Curriculum']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $curriculum['Curriculum']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $curriculum['Curriculum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curriculum['Curriculum']['id'])); ?>
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
		<li><?php echo $html->link(__('New Curriculum', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
	</ul>
</div>
