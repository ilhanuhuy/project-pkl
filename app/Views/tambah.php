<form action="<?= base_url('tambah/simpan');?>" method="post">
<div class="form-group">
        
                  <div class="form-group">
                  <label>Soal</label>
                  <textarea name="soal" class="form-control" rows="3" placeholder="Silahkan Isi Soal"></textarea>
                  </div>

                <div class="form-group">
                                <label class="col-sm-2 control-label">Jawaban A</label>
                                <div class="col-sm-10">
                                    <textarea rows="2" style="width: 100%" name="a" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jawaban B</label>
                                <div class="col-sm-10">
                                    <textarea rows="2" style="width: 100%" name="b" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jawaban C</label>
                                <div class="col-sm-10">
                                    <textarea rows="2" style="width: 100%" name="c" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jawaban D</label>
                                <div class="col-sm-10">
                                    <textarea rows="2" style="width: 100%" name="d" required></textarea>
                                </div>
                            </div>
                  <label>Jawaban Benar :</label>
         <select name="kunci" class="form-control" required>
                  <option value="">--Pilih--</option>
                    
                      <option value=A>A</option>
                      <option value=B>B</option>
                      <option value=C>C</option>
                      <option value=D>D</option>
                      
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