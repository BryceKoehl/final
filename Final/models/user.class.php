<?php
/*
 * Author: Maimouna, Bryce, Ashley, Chris
 * Date: April 19, 2020
 * Name: user.class.php
 * Description: the User class models a real-world user.
 */

class User {

    //private properties of a User object
    private $user_id, $username, $password, $following, $likes;

    //the constructor that initializes all properties
    public function __construct($user_id, $username, $password, $following, $likes) {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->following = $following;
        $this->likes = $likes;
    }

    //get the id of a user
    public function getId() {
        return $this->user_id;
    }

	//get the username of a user
    public function getUsername() {
        return $this->username;
    }

	//get the password of a user
    public function getPassword() {
        return $this->password;
    }

	//get the following of a user
    public function getFollowing() {
        return $this->following;
    }

	//get the likes of a user
    public function getLikes() {
        return $this->likes;
    }


    //set user id
    public function setId($user_id) {
        $this->user_id = $user_id;
    }

}
