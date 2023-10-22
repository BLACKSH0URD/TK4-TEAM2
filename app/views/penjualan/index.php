<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Penjualan
        </button>
      </div>
    </div>

    <h3>Daftar Penjualan</h3>

    <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">JumlahPenjualan</th>
                        <th scope="col">HargaJual</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach( $data['br'] as $br ) : ?>
                    <tr>
                        <td><?= $br['JumlahPenjualan'];?></td>
                        <td> <?= $br['HargaJual'];?></td>
                        <td>
                        <a href="<?= BASEURL; ?>/penjualan/hapus/<?= $br['IdPenjualan']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= BASEURL; ?>/penjualan/ubahDetail/<?= $br['IdPenjualan']; ?>" class="badge badge-primary float-right">Ubah</a>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Penjualan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/penjualan/tambah" method="post">
          <input type="hidden" name="IdPenjualan" id="IdPenjualan">
          <div class="form-group">
            <label for="JumlahPenjualan">JumlahPenjualan</label>
            <input type="number" class="form-control" id="JumlahPenjualan" name="JumlahPenjualan" placeholder="JumlahPenjualan">
          </div>

          <div class="form-group">
            <label for="HargaJual">HargaJual</label>
            <input type="number" class="form-control" id="HargaJual" name="HargaJual" placeholder="HargaJual">
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




