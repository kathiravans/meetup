<?php
// Geting user's first name and updating user's firstname.
interface users {
    public function getFirstname();
    public function setFirstname();
}

class gmailUser implements users  {
    function _construct($db,$loggeduserid) {
        $this->userdetails = // db connect, get the gmail user details
    }
     public function getFirstname() {
        $firstname =  $this->userdetails['firstname'];
        return $firstname;
     }
     public function setFirstname($newfirstname) {
        $this->userdetails['firstname'] = $newfirstname;
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
     public function setFirstname($newfirstname) {
        $this->userdetails['firstname'] = $newfirstname;
        // update into database
     }
}

class loggeduser {
    
    function getFirstname($loggedaccount) {
        $loggedobj = new $loggedaccount();
        $loggedobj->getFirstname();
    }
     function setFirstname($loggedaccount,$newfirstname) {
        $loggedobj = new $loggedaccount();
        $loggedobj->setFirstname($newfirstname);
    }
}

$obj = new loggeduser();
$obj->getFirstname('twitterUser');
$obj->setFirstname('twitterUser',$newfirstname);

$obj->getFirstname('gmailUser');
$obj->setFirstname('gmailUser',$newfirstname);


