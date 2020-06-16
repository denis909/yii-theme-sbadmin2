<?php

use yii\helpers\Html;
use denis909\themes\sbadmin2\TopMenu;
use denis909\themes\sbadmin2\UserAccount;
use denis909\themes\sbadmin2\Breadcrumbs;

?>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <?php

    if ($breadcrumbs)
    {
        echo Breadcrumbs::widget(['links' => $breadcrumbs]);
    }

    echo TopMenu::widget(
        array_merge(
            $topMenuOptions, 
            [
                'items' => array_merge($topMenu, [
                    'account' => [
                        'template' => UserAccount::widget([
                            'user' => $user,
                            'userMenu' => $userMenu,
                            'accountMenu' => $accountMenu,
                            'username' => $username
                        ]),
                        'options' => [
                            'class' => 'nav-item dropdown no-arrow'
                        ]
                    ]
                ])
            ]
        )
    );

    ?>

</nav>
<!-- End of Topbar -->