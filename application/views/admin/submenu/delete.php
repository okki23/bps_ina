<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete<?php echo $r->id_submenu ?>">
  <i class="fa fa-trash"></i> 
</button>
<div class="modal fade" id="Delete<?php echo $r->id_submenu ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Hapus Data Sub Menu</h4>
            </div>
            <div class="modal-body">
				<p class="alert alert-success">Yakin ingin menghapus Data Sub Menu ini ?</p>
            </div>
            <div class="modal-footer">
            	
                <a href="<?php echo base_url('admin/submenu/delete/'.$r->id_submenu) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Ya, Hapus</a>
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
