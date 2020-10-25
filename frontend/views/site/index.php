<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div id="content" role="main">


    <?= $this->render('@frontend/views/site/_indexPartials/_home') ?>
    <?= $this->render('@frontend/views/site/_indexPartials/_about') ?>
    <?= $this->render('@frontend/views/site/_indexPartials/_services') ?>
    <?= $this->render('@frontend/views/site/_indexPartials/_resume') ?>
    <?= $this->render('@frontend/views/site/_indexPartials/_portfolio') ?>
    <?= $this->render('@frontend/views/site/_indexPartials/_testimonial') ?>
    <?= $this->render('@frontend/views/site/_indexPartials/_contact') ?>


</div>
