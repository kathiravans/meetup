<?php

interface users {
    public function getFirstname();
    public function getLastname();
    public function getEmail();
    public function getPassword();
    public function setFirstname();
    public function setLastname();
    public function setEmail();
    public function setPassword();
}

class gmailUser implements users  {
    function _construct($db,$loggeduserid) {
        $this->userdetails = // db connect, get the gmail user details
    }
     public function getFirstname() {
        $firstname =  $this->userdetails['firstname'];
        return $firstname;
     }
     public function getLastname() {
        $lastname =  $this->userdetails['firstname'];
        return $lastname;
     }
     
     public function getEmail() {
        $email =  $this->userdetails['email'];
        return $email;
     }
     public function getPassword() {
        $password =  $this->userdetails['password'];
        return $password;
     }
     
     public function setFirstname($newfirstname) {
        $this->userdetails['firstname'] = $newfirstname;
        // update into database
     }
     public function setLastname($lastname) {
        $this->userdetails['lastname'] = $lastname;
        // update into database
     }
     public function setEmail($email) {
        $this->userdetails['email'] = $email;
        // update into database
     }
     public function setpassword($password) {
        $this->userdetails['password'] = $password;
        // update into database
     }
}

class twitterUser implements users  {
    function _construct($db,$loggeduserid) {
        $this->userdetails = // db connect, get the twitter user details
    }
     public function getFirstname() {
        $firstname =  $this->userdetails['firstname'];
        return $firstname;
     }
     public function getLastname() {
        $firstname =  $this->userdetails['firstname'];
        return $firstname;
     }
     public function getEmail() {
        $email =  $this->userdetails['email'];
        return $email;
     }
     public function getPassword() {
        $password =  $this->userdetails['password'];
        return $password;
     }
     
     
     public function setFirstname($newfirstname) {
        $this->userdetails['firstname'] = $newfirstname;
        // update into database
     }
     public function setLastname($lastname) {
        $this->userdetails['lastname'] = $lastname;
        // update into database
     }
     public function setEmail($email) {
        $this->userdetails['email'] = $email;
        // update into database
     }
     public function setpassword($password) {
        $this->userdetails['password'] = $password;
        // update into database
     }
     
}

class loggeduser {
   
    function getUserdetails($loggedaccount) {
        $loggedobj = new $loggedaccount();
        $userdetails['firstname'] = $loggedobj->getFirstname();
        $userdetails['lastname'] = $loggedobj->getLastname();
        $userdetails['email'] = $loggedobj->getEmail();
        $userdetails['password'] = $loggedobj->getPassword();
        return $userdetails;
    }
    
    function setUserdetails($loggedaccount,$newUserdetails) {
        $loggedobj = new $loggedaccount();
        $loggedobj->setFirstname($newUserdetails['firstname']);
        $lastname = $loggedobj->setLastname($newUserdetails['lastname']);
        $email = $loggedobj->setEmail($newUserdetails['email']);
        $password = $loggedobj->setPassword($newUserdetails['password']);
    }
}

$obj = new loggeduser();
$obj->getUserdetails('twitterUser');
$obj->setUserdetails('twitterUser',$newUserdetails);

$obj->getFirstname('gmailUser');
$obj->setFirstname('gmailUser',$newUserdetails);


