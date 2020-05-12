<?php

use yii\helpers\Html;

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
        echo $theme->breadcrumbs(['links' => $breadcrumbs]);
    }

    echo $theme->topMenu(
        array_merge(
            $topMenuOptions, 
            [
                'items' => array_merge(
                  $topMenu, 
                  [
                    'account' => [
                      'template' => $theme->userAccount([
                        'user' => $user,
                        'userMenu' => $userMenu,
                        //'userMenuOptions' => $userMenuOptions
                      ]),
                      'options' => [
                        'class' => 'nav-item dropdown no-arrow'
                      ]
                    ]
                  ]
                )
            ]
        )
    );

    ?>

</nav>
<!-- End of Topbar -->