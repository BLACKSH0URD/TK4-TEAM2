<div>
<form action="<?= BASEURL; ?>/penjualan/ubah" method="post">
          <input type="hidden" name="IdPenjualan" id="IdPenjualan" value="<?= $data['br']['IdPenjualan']; ?>">
          <div class="form-group">
            <label for="JumlahPenjualan">JumlahPenjualan</label>
            <input type="number" class="form-control" id="JumlahPenjualan" name="JumlahPenjualan" value="<?= $data['br']['JumlahPenjualan']; ?>">
          </div>

          <div class="form-group">
            <label for="HargaJual">HargaJual</label>
            <input type="number" class="form-control" id="HargaJual" name="HargaJual" value="<?= $data['br']['HargaJual']; ?>">
          </div>


      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
</div>