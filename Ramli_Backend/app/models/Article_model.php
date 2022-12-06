<?php
class Article_model
{
    private $table = 'article';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }



    public function getAllArticle()
    {
        return $this->db->query("SELECT * FROM $this->table");
    }

    public function addArticle()
    {
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $post_at = $_POST['post_at'];

            $file = $_FILES['image']['name'];
            $tmp_dir = $_FILES['image']['tmp_name'];
            $size = $_FILES['image']['size'];

            $directory = BASEURL . './uploads/';
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $image = rand(1000, 1000000) . "." . $extension;

            $simpan = $this->db->query("INSERT INTO $this->table VALUES('', '$image', '$title', '$description', '$post_at', '' )");
        }
    }

    public function deleteArticle()
    {
    }
}
