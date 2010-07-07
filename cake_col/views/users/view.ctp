<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['UserType']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index')); ?> </li>
	</ul>
</div>
    <div class="related">
    <?php 
        $typeName = $user['UserType']['name']; 
        if($typeName == 'Admin'):
            $controller = 'admins';
        elseif($typeName == 'Faculty'):
            $controller = 'faculties';
        elseif($typeName == 'Student'):
            $controller = 'students';
        elseif($typeName == 'Alumni'):
            $controller = 'alumni';
        endif;
    
    ?>
	<?php if (!empty($user[$typeName]) && !empty($user[$typeName]['idnumber'])):?>
	<h3><?php  __('Related Information');?></h3>
    	<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Number');?></dt>
            <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $user[$typeName]['idnumber'];?>
            &nbsp;</dd>
    	</dl>
	<?php
        echo count($user[$typeName]['idnumber']);
        $action = 'edit';
    ?>
    <?php 
    else:
        $action = 'add';
        $typeName = 'User';
    endif; 
    ?>   	
    	<div class="actions">
			<ul>
				<li><?php echo $html->link(__(ucfirst($action).' User Information', true), array('controller' => $controller, 'action' => $action, $user[$typeName]['id'])); ?></li>
                <?php if($controller == 'admins'):?>
                <li><?php echo $html->link(__('Courses', true), array('controller' => 'courses', 'action' => 'index')); ?></li>
                <li><?php echo $html->link(__('Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?></li>
                <li><?php echo $html->link(__('Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?></li>
                <li><?php echo $html->link(__('Grading Systems', true), array('controller' => 'gradingsystems', 'action' => 'index')); ?></li>
                <?php endif;?>
			</ul>
		</div>
	</div>
	