<?php

class About extends Controller{

    public function index($nama = 'Kelompok', $jurusan = 'Teknik Informatika'){
        
        $data['nama'] = $nama;
        $data['jurusan'] =$jurusan;

        $data['judul'] ='index about';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] ='Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}