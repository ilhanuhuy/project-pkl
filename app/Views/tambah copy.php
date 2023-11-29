<form action="<?= base_url('tambah/simpan');?>" method="post">
<div class="form-group">
                  <label>Topik</label>
                  <select name="topik" class="form-control">
                  <option value="">--Pilih--</option>
                    <?php foreach ($tambah as $key => $value):?>
                      <option value="<?= $value['id_topik'] ?>"><?= $value['topik']?></option>
                      <?php endforeach ?>
                  </select>

                  <div class="form-group">
                  <label>Soal</label>
                  <textarea name="soal" class="form-control" rows="3" placeholder="Silahkan Isi Soal"></textarea>
                </div>

                <div class="form-group">
                  <label >Jawaban A</label>
                  <input type="text" name="jawabanA" class="form-control" placeholder="" required>
                <div class="form-group">
                  <label >Jawaban B</label>
                  <input type="text" name="jawabanB" class="form-control" placeholder="" required>
                </div>
<div class="form-group"> 
                  <label >Jawaban C</label>
                  <input type="text" name="jawabanC" class="form-control" placeholder="" required>
                </div>
<div class="form-group">
                  <label >Jawaban D</label>
                  <input type="text" name="jawabanD" class="form-control" placeholder="" required>
                </div> 
<div class="form-group">
                  <label>Jawaban Benar :</label>
         <select name="jawabanBenar" class="form-control">
                  <option value="">--Pilih--</option>
                    
                      <option value=3>A</option>
                      <option value=2>B</option>
                      <option value=1>C</option>
                      <option value=0>D</option>
                      
                  </select>
      </div>
<!-- <div class="form-group">
                  <label >Bobot Nilai</label>
                  <input name="" class="form-control" placeholder="" required>
                </div> -->

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="pilih">Simpan</button>
              </div>
              </form>