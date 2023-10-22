<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Pengguna
        </button>
      </div>
    </div>

    <h3>Daftar Pengguna</h3>

    <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">NamaPengguna</th>
                        <th scope="col">NamaDepan</th>
                        <th scope="col">NamaBelakang</th>
                        <th scope="col">NoHp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach( $data['br'] as $br ) : ?>
                    <tr>
                        <td><?= $br['NamaPengguna'];?></td>
                        <td> <?= $br['NamaDepan'];?></td>
                        <td> <?= $br['NamaBelakang'];?></td>
                        <td> <?= $br['NoHp'];?></td>
                        <td> <?= $br['Alamat'];?></td>
                        <td>
                        <a href="<?= BASEURL; ?>/pengguna/hapus/<?= $br['IdPengguna']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= BASEURL; ?>/pengguna/ubahDetail/<?= $br['IdPengguna']; ?>" class="badge badge-primary float-right">Ubah</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
    </table>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/pengguna/tambah" method="post">
          <input type="hidden" name="IdPengguna" id="IdPengguna">
          <div class="form-group">
            <label for="NamaPengguna">NamaPengguna</label>
            <input type="text" class="form-control" id="NamaPengguna" name="NamaPengguna" placeholder="NamaPengguna">
          </div>

          <div class="form-group">
            <label for="NamaDepan">NamaDepan</label>
            <input type="text" class="form-control" id="NamaDepan" name="NamaDepan" placeholder="NamaDepan">
          </div>

          <div class="form-group">
            <label for="NamaBelakang">NamaBelakang</label>
            <input type="text" class="form-control" id="NamaBelakang" name="NamaBelakang" placeholder="NamaBelakang">
          </div>

          <div class="form-group">
            <label for="NoHp">NoHp</label>
            <input type="number" class="form-control" id="NoHp" name="NoHp" placeholder="NoHp">
          </div>

          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="number" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modal edit -->




