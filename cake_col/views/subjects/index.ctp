<div class="subjects index">
<h2><?php __('Subjects');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('code');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('unit_lecture');?></th>
	<th><?php echo $paginator->sort('unit_laboratory');?></th>
	<th><?php echo $paginator->sort('credits');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($subjects as $subject):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $subject['Subject']['id']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['code']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['name']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['unit_lecture']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['unit_laboratory']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['credits']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $subject['Subject']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $subject['Subject']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $subject['Subject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['id'])); ?>
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
		<li><?php echo $html->link(__('New Subject', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?> </li>
	</ul>
</div>