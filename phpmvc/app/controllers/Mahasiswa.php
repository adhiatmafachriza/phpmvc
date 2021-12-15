<?php

class Mahasiswa extends Controller 
{
    // tampilkan semua data mahasiswa
    public function index()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->all();

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    // buat data mahasiswa
    public function create()
    {
        if($this->model('Mahasiswa_model')->create($_POST) > 0)
        {
            header('Location: '. BASEURL . '/mahasiswa/index');
            exit;
        }
    }

    // delete data mahasiswa
    public function delete($id)
    {
        if($this->model('Mahasiswa_model')->delete($id) > 0)
        {
            header('Location: '. BASEURL . '/mahasiswa/index');
            exit;
        }
    }

    // menampilkan form untuk melakukan update data mahasiswa
    public function edit($id)
    {
        $data['title'] = 'Update Data Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->find($id);

        $this->view('templates/header', $data);
        $this->view('mahasiswa/edit', $data);
        $this->view('templates/footer');
    }

    // update data mahasiswa
    public function update()
    {
        if($this->model('Mahasiswa_model')->update($_POST) > 0)
        {
            header('Location: '. BASEURL . '/mahasiswa/index');
            exit;
        }
    }
}