<?php


class School
{
    public $code;
    public $name;

    public $exist = false;

    public function __construct($code)
    {
        include "../include/config.php";
        $this->code = $code;
        $result = $conn->query("SELECT * FROM schools WHERE schoolCode = '" . $code . "'");
        if ($result->num_rows > 0) {
            $this->exist = true;
            while($row = $result->fetch_assoc()) {
                $this->name = $row['name'];
            }
        } else {
            $this->exist = false;
        }
    }

}