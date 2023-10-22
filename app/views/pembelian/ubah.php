<div>
<form action="<?= BASEURL; ?>/pembelian/ubah" method="post">
          <input type="hidden" name="IdPembelian" id="IdPembelian" value="<?= $data['br']['IdPembelian']; ?>">
          <div class="form-group">
            <label for="JumlahPembelian">JumlahPembelian</label>
            <input type="number" class="form-control" id="JumlahPembelian" name="JumlahPembelian" value="<?= $data['br']['JumlahPembelian']; ?>">
          </div>

          <div class="form-group">
            <label for="HargaBeli">HargaBeli</label>
            <input type="text" class="form-control" id="HargaBeli" name="HargaBeli" value="<?= $data['br']['HargaBeli']; ?>">
          </div>


      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
</div>