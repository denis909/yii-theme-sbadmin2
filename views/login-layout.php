<?php

use yii\helpers\Html;

$this->params['bodyClass'] = 'bg-gradient-primary';

$theme->beginLayout();

?>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      
        <?php if($enableImage):?>

            <?php if($imageUrl):?>

                <style type="text/css">

                    .bg-login-image {
                        background: url(<?= $imageUrl;?>);
                        background-position: center;
                        background-size: cover;
                    }

                </style>

            <?php endif;?>

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?= Html::encode($this->title);?></h1>
                                    </div>
                                    <?= $content;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php else:?>

            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?= Html::encode($this->title);?></h1>
                            </div>
                            <?= $content;?>
                        </div>                    
                    </div>
                </div>
            </div>

        <?php endif;?>

    </div>
</div>
<?php $theme->endLayout();?>