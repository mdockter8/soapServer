<?php


class Users
{
    protected $users = array(
        1 => array("name" => "Haafiz",
            "email" => "kaasib@gmail.com",
            "password" => "$2y$10aComplexStringOfAtleaeeeoYTF1Nrkf8VohijM26v"),
        2 => array("name" => "Ali",
            "email" => "abc@email.com",
            "password" => "$2y$10aComplexStringOfAtleaeeeoYTF1Nrkf8VohijM26v"),
        11 => array("name" => "Bob",
            "email" => "bob@gmail.com",
            "password" => "$2y$10aComplexStringOfAtleaeeeoYTF1Nrkf8VohijM26v")
    );

    /**
     * Get all the users we know about
     *
     * @return array The collection of users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Fetch the detail for a single comment
     * * @param int $comment_id The identifier of the comment
     * * @return array The comment data
     */
    public function getUserById($user_id)
    {
        if (isset($this->users[$user_id])) {
            return $this->users[$user_id];
        } else {
            throw new Exception("User not found");
        }
    }
}