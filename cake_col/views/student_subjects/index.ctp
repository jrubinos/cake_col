<div class="studentSubjects index">
<h2><?php __('StudentSubjects');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('student_id');?></th>
	<th><?php echo $paginator->sort('subject_id');?></th>
	<th><?php echo $paginator->sort('final_grade');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($studentSubjects as $studentSubject):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $studentSubject['StudentSubject']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($studentSubject['Student']['id'], array('controller' => 'students', 'action' => 'view', $studentSubject['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $studentSubject['StudentSubject']['subject_id']; ?>
		</td>
		<td>
			<?php echo $studentSubject['StudentSubject']['final_grade']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $studentSubject['StudentSubject']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $studentSubject['StudentSubject']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $studentSubject['StudentSubject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $studentSubject['StudentSubject']['id'])); ?>
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
		<li><?php echo $html->link(__('New StudentSubject', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
