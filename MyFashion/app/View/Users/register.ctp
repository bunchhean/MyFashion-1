<?php
    echo "<h3>Register</h3>";
    echo $this->Form->create('User', array('action'=>'register'));
    echo $this->Form->input('uname', array('label'=>'Username'));
    echo $this->Form->input('email', array('label'=>'Email'));
    echo $this->Form->input('pwd', array('label'=>'Password'));
    echo $this->Form->input('gender', array('label'=>'Gender', 'type'=>'select', 'options'=> array('1'=>'Male', '2'=> 'Female')));
    echo $this->Form->input('dop', array('label'=>'Date of Birth'));
    echo $this->Form->input('phone', array('label'=>'Phone Number'));
    echo $this->Form->end('Create Account');
?>