<div class="row">
      <div class="col-md-12">
          <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Data Soal</h3>
             <div class="box-tools pull-right">
                <button id="add" type="button" class="btn btn-primary btn-xm btn-flat" data-toggle="modal" data-target="#add">
                    <i href="<?= base_url('tambah')?>" class="fa fa-plus"></i>Add</button>
              </div>

              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="50px">No</th>
                        <th width="100px">Topik</th>
                        <th>Soal</th>
                        <th width="150px">Jawaban</th>
                        <th width="150px">Jawaban</th>
                        <th width="150px">Jawaban</th>
                        <th width="150px">Jawaban</th>
                        <th width="150px">KunciJawaban</th>
                        
                    </tr>
                </thead>
                <?php $no = 1;
                    foreach ($soal as $key => $value){ ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->topik?></td>
                        <td><?= $value->soal;?></td>
                    </tr>
                   <?php }
                    ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <script>
        document.getElementById("add").addEventListener("click", function() {
            window.location.href = "<?= base_url('tambah')?>"; // Ganti dengan URL tujuan yang sesuai
        });
    </script>