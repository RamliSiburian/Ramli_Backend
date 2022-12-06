<?php

class Auth extends Controller
{
    public function login()
    {
        if ($this->model('Auth_model')->loginUser() == true) {
            header('location:' . BASEURL . '/article');
            exit;
        } else {
?>
            <script>
                alert("Username atau password yang anda masukkan tidak sesuai")
                window.location = 'http://localhost/test_hiring/bahaso/Ramli_Backend/public'
            </script>
<?php
        }
    }
}
