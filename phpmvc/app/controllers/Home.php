<?php

class Home extends Controller {
    public function index() 
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data); // Kirim $data ke view ini juga
        $this->view('templates/footer');
    }
}
