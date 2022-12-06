<?php
class Article extends Controller
{
    public function index()
    {
        $data['title'] = 'List Article';
        $data['article'] = $this->model('Article_model')->getAllArticle();
        $this->view('templates/header', $data);
        $this->view('article/index', $data);
        $this->view('templates/footer');
    }
    public function addarticle()
    {
        $data['article'] = $this->model('Article_model')->addarticle();
        $this->view('templates/header');
        $this->view('article/add-article', $data);
        $this->view('templates/footer');
    }
}
