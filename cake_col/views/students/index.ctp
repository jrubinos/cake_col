<div class="students index">
<h2><?php __('Students');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('username');?></th>
	<th><?php echo $paginator->sort('idnumber');?></th>
	<th><?php echo $paginator->sort('curriculum_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($students as $student):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $student['Student']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($student['User']['username'], array('controller' => 'users', 'action' => 'view', $student['User']['id'])); ?>
		</td>
		<td>
			<?php echo $student['Student']['idnumber']; ?>
		</td>
		<td>
			<?php echo $student['Curriculum']['name']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $student['Student']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $student['Student']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $student['Student']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $student['Student']['id'])); ?>
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
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
