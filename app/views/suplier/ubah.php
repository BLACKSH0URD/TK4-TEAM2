<div>
<form action="<?= BASEURL; ?>/suplier/ubah" method="post">
          <input type="hidden" name="IdSuplier" id="IdSuplier" value="<?= $data['br']['IdSuplier']; ?>">
          <div class="form-group">
            <label for="NamaSuplier">NamaSuplier</label>
            <input type="text" class="form-control" id="NamaSuplier" name="NamaSuplier" value="<?= $data['br']['NamaSuplier']; ?>">
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