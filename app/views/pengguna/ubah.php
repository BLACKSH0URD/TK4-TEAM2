<div>
<form action="<?= BASEURL; ?>/pengguna/ubah" method="post">
          <input type="hidden" name="IdPengguna" id="IdPengguna" value="<?= $data['br']['IdPengguna']; ?>">
          <div class="form-group">
            <label for="NamaPengguna">NamaPengguna</label>
            <input type="number" class="form-control" id="NamaPengguna" name="NamaPengguna" value="<?= $data['br']['NamaPengguna']; ?>">
          </div>

          <div class="form-group">
            <label for="NamaDepan">NamaDepan</label>
            <input type="text" class="form-control" id="NamaDepan" name="NamaDepan" value="<?= $data['br']['NamaDepan']; ?>">
          </div>

          <div class="form-group">
            <label for="NamaBelakang">NamaBelakang</label>
            <input type="text" class="form-control" id="NamaBelakang" name="NamaBelakang" value="<?= $data['br']['NamaBelakang']; ?>">
          </div>

          <div class="form-group">
            <label for="NoHp">NoHp</label>
            <input type="number" class="form-control" id="NoHp" name="NoHp" value="<?= $data['br']['NoHp']; ?>">
          </div>

          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?= $data['br']['Alamat']; ?>">
          </div>


      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
</div>