<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete<?php echo $r->id_pencatatan_hibah ?>">
  <i class="fa fa-trash"></i> 
</button>
<div class="modal fade" id="Delete<?php echo $r->id_pencatatan_hibah ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Hapus Data Hibah</h4>
            </div>
            <div class="modal-body">
				<p class="alert alert-success">Yakin ingin menghapus Data Hibah ini ?</p>
            </div>
            <div class="modal-footer">
            	
                <a href="<?php echo base_url('pencatatan_hibah_53/delete/'.$r->id_pencatatan_hibah) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Ya, Hapus</a>
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
