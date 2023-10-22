<?php 

class Pelanggan extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Pelanggan';
        $data['br'] = $this->model('Pelanggan_model')->getAllPelanggan();
        $this->view('templates/header', $data);
        $this->view('pelanggan/index', $data);
        $this->view('templates/footer');
    }

    public function ubahDetail($id)
    {
        $data['judul'] = 'Detail Pelanggan';
        $data['br'] = $this->model('Pelanggan_model')->getPelangganById($id);
        $this->view('templates/header', $data);
        $this->view('pelanggan/ubah', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Pelanggan_model')->tambahDataPelanggan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Pelanggan_model')->hapusDataPelanggan($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Pelanggan_model')->getPelangganById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Pelanggan_model')->ubahDataPelanggan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        } 
    }


}