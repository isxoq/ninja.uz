<?php

use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;

/* @var $this yii\web\View */

$this->title = Yii::t('app', "Administrator");


?>
<div class="site-index">
    <section class="content" style="height: auto !important; min-height: 0px !important;">
        <?php echo GhostMenu::widget([
            'encodeLabels' => false,
            'activateParents' => true,
            'items' => [
                [
                    'label' => 'Backend routes',
                    'items' => UserManagementModule::menuItems()
                ],
                [
                    'label' => 'Frontend routes',
                    'items' => [
                        ['label' => 'Login', 'url' => ['/user-management/auth/login']],
                        ['label' => 'Logout', 'url' => ['/user-management/auth/logout']],
                        ['label' => 'Registration', 'url' => ['/user-management/auth/registration']],
                        ['label' => 'Change own password', 'url' => ['/user-management/auth/change-own-password']],
                        ['label' => 'Password recovery', 'url' => ['/user-management/auth/password-recovery']],
                        ['label' => 'E-mail confirmation', 'url' => ['/user-management/auth/confirm-email']],
                    ],
                ],
            ],
        ]);
        ?>
    </section>

</div>
