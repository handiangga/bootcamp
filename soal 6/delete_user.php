

<!-- modal delete -->

    <div class="example-modal">
      <div id="delete_user<?php echo $fetch['id_nama']; ?>" class="modal fade" role="dialog" style="display:none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Konfirmasi Delete Data User</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <h5 align="center" >Apakah anda yakin ingin menghapus <?php echo $fetch['nama'];?><strong><span class="grt"></span></strong> ?</h5>
            </div>
            <div class="modal-footer">
              <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
              <a href="function_user.php?act=delete_user&id=<?php echo $fetch['id_nama']; ?>" class="btn btn-primary">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- modal delete -->