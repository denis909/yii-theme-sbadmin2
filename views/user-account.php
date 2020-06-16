<?php

use denis909\themes\sbadmin2\UserMenu;

?>

<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $username;?></span>
 
    <?php if($avatarUrl):?>

        <img class="img-profile rounded-circle" src="<?= $avatarUrl;?>">

    <?php else:?>

        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">

    <?php endif;?>
    
</a>

<?= $accountMenuClass::widget(['items' => $accountMenu]);?>

<?= $userMenuClass::widget(['items' => $userMenu]);?>