<?php
class Auth_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function loginUser()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $getusers = $this->db->query("SELECT * FROM $this->table WHERE username='$username' ");
        $cek = mysqli_num_rows($getusers);

        if ($cek > 0) {
            $data = mysqli_fetch_assoc($getusers);

            if ($data['username'] == $username && $data['password'] == $password) {
                if ($data['role'] == "author") {
                    $_SESSION['username'] = $username;
                    $_SESSION["role"] = "author";
                    $_SESSION["author"] = true;
                }
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
