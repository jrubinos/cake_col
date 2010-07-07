<div class="faculties index">
<h2><?php __('Faculties');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('idnumber');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($faculties as $faculty):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $faculty['Faculty']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($faculty['User']['id'], array('controller' => 'users', 'action' => 'view', $faculty['User']['id'])); ?>
		</td>
		<td>
			<?php echo $faculty['Faculty']['idnumber']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $faculty['Faculty']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $faculty['Faculty']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $faculty['Faculty']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $faculty['Faculty']['id'])); ?>
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
