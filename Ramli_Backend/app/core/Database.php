<?php
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $this->dbh = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        if (!$this->dbh) {
            echo mysqli_connect_error();
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->query($query);
        return $this->stmt;
    }
}
