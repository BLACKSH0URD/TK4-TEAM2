<?php 

class Pengguna extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Pengguna';
        $data['br'] = $this->model('Pengguna_model')->getAllPengguna();
        $this->view('templates/header', $data);
        $this->view('pengguna/index', $data);
        $this->view('templates/footer');
    }

    public function ubahDetail($id)
    {
        $data['judul'] = 'Detail Pengguna';
        $data['br'] = $this->model('Pengguna_model')->getPenggunaById($id);
        $this->view('templates/header', $data);
        $this->view('pengguna/ubah', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Pengguna_model')->tambahDataPengguna($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pengguna');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pengguna');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Pengguna_model')->hapusDataPengguna($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pengguna');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pengguna');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Pengguna_model')->getPenggunaById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Pengguna_model')->ubahDataPengguna($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/pengguna');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/pengguna');
            exit;
        } 
    }


}