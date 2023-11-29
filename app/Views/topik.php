<div class="row">
      <div class="col-md-12">
          <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Data Topik</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-xm btn-flat" data-toggle="modal" data-target="#add">
                    <i class="fa fa-plus"></i>Add</button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
    if (session()->getFlashdata('pesan')){
      echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Berhasil! -
                Topik Telah Di Tambahkan </h4>
              </div>';
      echo session()->getFlashdata('pesan');
      echo '</div>';
    } 
    ?>
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="50px">No</th>
                        <th>Topik</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($topik as $key => $value){ ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['topik'];?></td>
                    </tr>
                   <?php }
                    ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>

 <div class="modal fade" id="add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Topik</h4>
              </div>
              <div class="modal-body">
            <?php 
            echo form_open('topik/add')
            ?>
                 <div class="form-group">
                  <label >Topik</label>
                  <input name="topik" class="form-control" placeholder="Topik" required>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              <?php echo form_close() ?>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->