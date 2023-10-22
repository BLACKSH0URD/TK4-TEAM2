<?php 

class Suplier extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Suplier';
        $data['br'] = $this->model('Suplier_model')->getAllSuplier();
        $this->view('templates/header', $data);
        $this->view('suplier/index', $data);
        $this->view('templates/footer');
    }

    public function ubahDetail($id)
    {
        $data['judul'] = 'Detail Suplier';
        $data['br'] = $this->model('Suplier_model')->getSuplierById($id);
        $this->view('templates/header', $data);
        $this->view('suplier/ubah', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Suplier_model')->tambahDataSuplier($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/suplier');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/suplier');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Suplier_model')->hapusDataSuplier($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/suplier');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/suplier');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Suplier_model')->getSuplierById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Suplier_model')->ubahDataSuplier($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/suplier');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/suplier');
            exit;
        } 
    }


}