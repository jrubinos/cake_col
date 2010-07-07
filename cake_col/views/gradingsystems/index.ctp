<div class="gradingsystems index">
<h2><?php __('Gradingsystems');?></h2>
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
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('faculty_id');?></th>
	<th><?php echo $paginator->sort('quiz');?></th>
	<th><?php echo $paginator->sort('prelim');?></th>
	<th><?php echo $paginator->sort('midterm');?></th>
	<th><?php echo $paginator->sort('prefi');?></th>
	<th><?php echo $paginator->sort('final');?></th>
	<th><?php echo $paginator->sort('percentage');?></th>
	<th><?php echo $paginator->sort('parent_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($gradingsystems as $gradingsystem):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['id']; ?>
		</td>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['name']; ?>
		</td>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['description']; ?>
		</td>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['faculty_id']; ?>
		</td>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['quiz']; ?>
		</td>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['prelim']; ?>
		</td>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['midterm']; ?>
		</td>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['prefi']; ?>
		</td>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['final']; ?>
		</td>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['percentage']; ?>
		</td>
		<td>
			<?php echo $gradingsystem['Gradingsystem']['parent_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $gradingsystem['Gradingsystem']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $gradingsystem['Gradingsystem']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $gradingsystem['Gradingsystem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gradingsystem['Gradingsystem']['id'])); ?>
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
		<li><?php echo $html->link(__('New Gradingsystem', true), array('action' => 'add')); ?></li>
	</ul>
</div>
