<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Pembelian
        </button>
      </div>
    </div>

    <h3>Daftar Pembelian</h3>

    <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">JumlahPembelian</th>
                        <th scope="col">HargaBeli</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach( $data['br'] as $br ) : ?>
                    <tr>
                        <td><?= $br['JumlahPembelian'];?></td>
                        <td> <?= $br['HargaBeli'];?></td>
                        <td>
                        <a href="<?= BASEURL; ?>/pembelian/hapus/<?= $br['IdPembelian']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= BASEURL; ?>/pembelian/ubahDetail/<?= $br['IdPembelian']; ?>" class="badge badge-primary float-right">Ubah</a>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Pembelian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/pembelian/tambah" method="post">
          <input type="hidden" name="IdPembelian" id="IdPembelian">
          <div class="form-group">
            <label for="JumlahPembelian">JumlahPembelian</label>
            <input type="number" class="form-control" id="JumlahPembelian" name="JumlahPembelian" placeholder="JumlahPembelian">
          </div>

          <div class="form-group">
            <label for="HargaBeli">HargaBeli</label>
            <input type="number" class="form-control" id="HargaBeli" name="HargaBeli" placeholder="HargaBeli">
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




