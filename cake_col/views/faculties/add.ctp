<div class="faculties form">
<?php echo $form->create('Faculty',array('url'=> array('action'=>'add/'.$userId)));?>
	<fieldset>
 		<legend><?php __('Add Faculty');?></legend>
	<?php
        echo $form->input('user_id',array('value'=>$userId,'type'=> 'hidden'));
		echo $form->input('idnumber');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
