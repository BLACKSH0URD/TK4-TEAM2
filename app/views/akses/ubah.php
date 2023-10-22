<div>
<form action="<?= BASEURL; ?>/akses/ubah" method="post">
          <input type="hidden" name="IdAkses" id="IdAkses" value="<?= $data['br']['IdAkses']; ?>">
          <div class="form-group">
            <label for="NamaAkses">Nama Akses</label>
            <input type="text" class="form-control" id="NamaAkses" name="NamaAkses" value="<?= $data['br']['NamaAkses']; ?>">
          </div>

          <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" id="Keterangan" name="Keterangan" value="<?= $data['br']['Keterangan']; ?>">
          </div>

          <div class="form-group">
            <label for="IdAkses">Id Akses</label>
            <input type="number" class="form-control" id="IdAkses" name="IdAkses" value="<?= $data['br']['IdAkses']; ?>">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
</div>