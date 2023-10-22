<?php 

class Akses extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Akses';
        $data['br'] = $this->model('Akses_model')->getAllAkses();
        $this->view('templates/header', $data);
        $this->view('akses/index', $data);
        $this->view('templates/footer');
    }

    public function ubahDetail($id)
    {
        $data['judul'] = 'Detail Akses';
        $data['br'] = $this->model('Akses_model')->getAksesById($id);
        $this->view('templates/header', $data);
        $this->view('akses/ubah', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Akses_model')->tambahDataAkses($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/akses');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/akses');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Akses_model')->hapusDataAkses($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/akses');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/akses');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Akses_model')->getAksesById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Akses_model')->ubahDataAkses($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/akses');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/akses');
            exit;
        } 
    }


}