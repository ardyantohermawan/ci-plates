<?php $this->layout('authentication', ['title' => 'User Profile']) ?>

<?php $this->start('container') ?>

    <h1>User Profile</h1>
    <p>Hello, <?=$this->e($name)?></p>

<?php $this->stop() ?>