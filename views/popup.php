<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <?php if($header):?>
            <div class="modal-header">
                <?= $header;?>
            </div>
        <?php elseif($title):?>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?= $title;?></h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
        <?php endif;?>
        <div class="modal-body"><?= $content;?></div>
        <div class="modal-footer">
            
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            
            <?= $footer;?>

        </div>
      </div>
    </div>
</div>