<?php


class User
{
    public $id;
    public $firstName;
    public $lastName;
    /* Different account types
     * 1. ADMIN
     * 2. STUDENT
     * 3. TEACHER
     */
    public $type;

    public function __construct($id, $firstName, $lastName, $type){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->type = $type;
    }
}