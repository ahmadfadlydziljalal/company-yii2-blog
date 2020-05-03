<?php


/* @var $this \yii\web\View */

use app\widgets\Menu;
use mdm\admin\components\MenuHelper;
use yii\bootstrap4\Html;
use yii\helpers\Url;

/**
 * Cheat sheet Menu
 * */
/*                echo Menu::widget([
                    'options' => [
                        'class' => 'nav nav-pills nav-sidebar flex-column',
                        'data-widget' => 'treeview',
                    ],
                    'items' => [
                        [
                            'label' => 'Dashboard',
                            'iconType' => 'fas',
                            'icon' => 'tachometer-alt',
                            'url' => ['/superadmin/default'],
                        ],
                        [
                            'label' => 'Framework Tools',
                            'url' => '#',
                            'iconType' => 'fa',
                            'icon' => 'ellipsis-h',
                            'items' => [
                                [
                                    'label' => 'Gii',
                                    'iconType' => 'fa',
                                    'icon' => 'magic',
                                    'url' => ['/gii'],
                                ],
                                [
                                    'label' => 'Debug',
                                    'iconType' => 'fa',
                                    'icon' => 'bug',
                                    'url' => ['/debug'],
                                ],
                                [
                                    'label' => 'Mini Admin',
                                    'url' => '#',
                                    'iconType' => 'fa',
                                    'icon' => 'ellipsis-h',
                                    'items' => [
                                        [
                                            'label' => 'Routes',
                                            'url' => ['/mimin/route'],
                                            'iconType' => 'fas',
                                            'icon' => 'route',
                                            'active' => in_array(Yii::$app->controller->getRoute(), [
                                                'mimin/route/index',
                                                'mimin/route/view',
                                                'mimin/route/update',
                                                'mimin/route/create',
                                            ])
                                        ],
                                        [
                                            'label' => 'Roles',
                                            'url' => ['/mimin/role'],
                                            'iconType' => 'fa',
                                            'icon' => 'tasks',
                                            'active' => in_array(Yii::$app->controller->getRoute(), [
                                                'mimin/role/index',
                                                'mimin/role/view',
                                                'mimin/role/update',
                                                'mimin/role/create',
                                            ])
                                        ],
                                        [
                                            'label' => 'Users',
                                            'url' => ['/mimin/user'],
                                            'iconType' => 'fa',
                                            'icon' => 'users',
                                            'active' => in_array(Yii::$app->controller->getRoute(), [
                                                'mimin/user/index',
                                                'mimin/user/view',
                                                'mimin/user/update',
                                                'mimin/user/create',
                                            ])
                                        ],
                                    ],
                                ],
                                [
                                    'label' => 'Full Admin',
                                    'url' => '#',
                                    'iconType' => 'fa',
                                    'icon' => 'ellipsis-h',
                                    'items' => [
                                        [
                                            'label' => 'Routes',
                                            'iconType' => 'fas',
                                            'icon' => 'route',
                                            'url' => ['/admin/route'],
                                            'active' => in_array(Yii::$app->controller->getRoute(), [
                                                'admin/route/index',
                                                'admin/route/view',
                                                'admin/route/update',
                                                'admin/route/create',
                                            ])
                                        ],
                                        [
                                            'label' => 'Roles',
                                            'url' => ['/admin/role'],
                                            'iconType' => 'fa',
                                            'icon' => 'tasks',
                                            'active' => in_array(Yii::$app->controller->getRoute(), [
                                                'admin/role/index',
                                                'admin/role/view',
                                                'admin/role/update',
                                                'admin/role/create',
                                            ])
                                        ],
                                        [
                                            'label' => 'Users',
                                            'url' => ['/admin/user'],
                                            'iconType' => 'fa',
                                            'icon' => 'users',
                                            'active' => in_array(Yii::$app->controller->getRoute(), [
                                                            'admin/user/index',
                                                            'admin/user/view',
                                                            'admin/user/update',
                                                            'admin/user/signup',
                                            ])
                                        ],
                                                    [
                                                        'label' => 'Assignments',
                                                        'url' => ['/admin/assignment'],
                                                        'iconType' => 'fa',
                                                        'icon' => 'medal',
                                                        'active' => in_array(Yii::$app->controller->getRoute(), [
                                                            'admin/assignment/index',
                                                            'admin/assignment/view',
                                                            'admin/assignment/update',
                                                        ])
                                                    ],

                                        [
                                            'label' => 'Permissions',
                                            'url' => ['/admin/permission'],
                                            'iconType' => 'fab',
                                            'icon' => 'critical-role',
                                            'active' => in_array(Yii::$app->controller->getRoute(), [
                                                            'admin/permission/index',
                                                            'admin/permission/view',
                                                            'admin/permission/update',
                                                            'admin/permission/create',
                                            ])
                                        ],

                                        [
                                            'label' => 'Menus',
                                            'url' => ['/admin/menu'],
                                            'iconType' => 'fab',
                                            'icon' => 'elementor',
                                            'active' => in_array(Yii::$app->controller->getRoute(), [
                                                            'admin/menu/index',
                                                            'admin/menu/view',
                                                            'admin/menu/update',
                                                            'admin/menu/create',
                                            ])
                                        ],
                                        [
                                            'label' => 'About Yii2 Admin',
                                            'url' => ['/admin/default'],
                                            'iconType' => 'far',
                                            'icon' => 'address-card',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ]
                ]);*/

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-success elevation-4">

    <!-- Brand Logo -->
    <a href="<?php echo Url::to(['/superadmin/default']) ?>" class="brand-link">
        <?php echo Html::img($directoryAsset . '/dist/img/AdminLTELogo.png', [
            'alt' => 'AdminLTE Logo',
            'class' => 'brand-image img-circle elevation-3',
            'style' => [
                'opacity' => '0.8'
            ]
        ]); ?>
        <span class="brand-text font-weight-light">SuperAdmin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?php echo Html::img($directoryAsset . '/dist/img/user2-160x160.jpg', [
                    'alt' => 'User Image',
                    'class' => 'img-circle elevation-2',
                ]); ?>
            </div>
            <div class="info">
                <a href="#" class="d-block">Hi: <?php echo Yii::$app->user->identity->username ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            try {

                $callback = function ($menu) {
                    $data = eval($menu['data']);
                    return [
                        'label' => $menu['name'],
                        'url' => [$menu['route']],
                        'iconType' => (isset($data['iconType']) ? $data['iconType'] : ''),
                        'icon' => (isset($data['icon']) ? $data['icon'] : ''),
                        'items' => $menu['children'],
                        'active' => (isset($data['activeOnRoutes']) ?
                            in_array(Yii::$app->controller->getRoute(), $data['activeOnRoutes'])
                            : null
                        )
                    ];
                };

                $items = MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback);
                echo Menu::widget([
                    'options' => [
                        'class' => 'nav nav-pills nav-sidebar flex-column',
                        'data-widget' => 'treeview',
                    ],
                    'items' => $items,
                ]);

            } catch (Exception $e) {
                echo $e->getMessage();
            } ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
