<?php 
use yii\helpers\Html;
$user=ucwords(strtolower(Yii::$app->user->identity->username));

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
       
        <span class="brand-text font-weight-light"><b>ROYS Dashboarduddy</b><small> Ver 1.0</small></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=Yii::getAlias('@web');?>/images/user.png" class="user-image" alt="User Image"/>
            </div>
            <div class="info">
                <a href="#" class="d-block"> <p><?=$user?></p> </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <?php
            echo \hail812\adminlte3\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'App Menue',
                        'icon' => 'tachometer-alt',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Active Page', 'url' => ['site/index'], 'iconStyle' => 'far'],
                            ['label' => 'Inactive Page', 'iconStyle' => 'far'],
                        ]
                    ],
                    ['label' => 'Dashboard', 'icon' => 'home','url'=>['/dashboard'], 'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => 'Amazon S3', 'icon' => 'briefcase', 'url'=>['/aws'],'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => 'Price Table', 'icon' => 'book', 'url'=>['/dashboard/myprice'],'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => 'Time Line', 'icon' => 'clock', 'url'=>['/dashboard/mytime'],'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => 'Roys Asset UI', 'icon' => 'university', 'url'=>['/dashboard/codesample'],'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => 'RAW UI', 'icon' => 'file-code', 'url'=>['/dashboard/testing'],'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => 'Landing Page', 'icon' => 'file-code', 'url'=>['/landing'],'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => 'Admin LTE UI', 'icon' => 'file-word', 'url'=>['/dashboard/adminlte'],'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => 'Yii2 PROVIDED', 'header' => true],
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                    ['label' => 'Level1'],
                    [
                        'label' => 'Level1',
                        'items' => [
                            ['label' => 'Level2', 'iconStyle' => 'far'],
                            [
                                'label' => 'Level2',
                                'iconStyle' => 'far',
                                'items' => [
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                                ]
                            ],
                            ['label' => 'Level2', 'iconStyle' => 'far']
                        ]
                    ],
                    ['label' => 'Level1'],
                    ['label' => 'LABELS', 'header' => true],
                    ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>