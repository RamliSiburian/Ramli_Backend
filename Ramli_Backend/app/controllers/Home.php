<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['article'] = $this->model('Article_model')->getAllArticle();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
