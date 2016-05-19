<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <?php if (!Yii::$app->user->isGuest): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p><?= Yii::$app->user->identity->profile->name ?></p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        <?php endif ?>
        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu Kearsipan', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'url' => ['/kearsipan/default/index']],
                        ['label' => 'Tables','visible' => false, 'icon' => 'fa fa-archive', 'url' => ['/kearsipan/default/arsip']],
                        [
                            'label' => 'System',
                            'icon' => 'fa fa-flag',
                            'visible' => (!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin),
                            'url' => '#',
                            'items' => [
                                ['label'=>'Site Setting','icon'=>'fa fa-gear','url'=>['/kearsipan/site/settings']],
                                ['label'=>'Kategori Setting','icon'=>'fa fa-gear','url'=>['/kearsipan/kategori']],
                                ['label'=>'Arsip Surat','icon'=>'fa fa-gear','url'=>['/kearsipan/surat']],
                            ]
                        ],
                        ['label' => 'Gii', 'visible' => false, 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                        ['label' => 'Debug', 'visible' => false, 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                        [
                            'label' => 'Same tools',
                            'icon' => 'fa fa-share',
                            'visible' => false,
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'icon' => 'fa fa-circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'icon' => 'fa fa-circle-o',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
        )
        ?>

    </section>

</aside>