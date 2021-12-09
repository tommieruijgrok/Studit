<?php


class User
{
    public $id;
    public $email;

    public $firstName;
    public $lastName;
    public $fullName;

    public $profilePicture;
    public $schoolCode;

    public $exist = false;
    /* Different account types
     * 1. ADMIN
     * 2. STUDENT
     * 3. TEACHER
     */
    public $type;


    public function __construct($id){
        include "../include/config.php";
        $this->id = $id;

        $result = $conn->query("SELECT * FROM users WHERE user = " . $id);
        if ($result->num_rows > 0) {
            $this->exist = true;
            while($row = $result->fetch_assoc()) {
                $this->firstName = $row['firstName'];
                $this->lastName = $row['lastName'];
                $this->schoolCode = $row['schoolCode'];
                $this->fullName = $this->firstName . ' ' . $this->lastName;
                $this->profilePicture = $row['profile_picture'];
                $this->email = $row['email'];
                $this->type = intval($row['type']);
            }
        } else {
            $this->exist = false;
        }

    }
}