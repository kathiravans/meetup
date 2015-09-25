<?php
require_once 'interfaces/names.php';
require_once 'interfaces/emailpassword.php';

/*
 *@uses This class is used to get and set users firstname,lastname,email and password
 *@Authir Kathir.
 */

class gmailUser implements names, emailpassword  {
    
    /**
     *Constructor
     *@param array $db
     *@param int $loogeduserid
     *@return array login user details
     */
    function _construct($db,$loggeduserid) {
        $this->userdetails = // db connect, get the gmail user details
    }
    /*
     *Function - get firstname
     *@return string $firstname
     */
     public function getFirstname() {
        $firstname =  $this->userdetails['firstname'];
        return $firstname;
     }
     /*
     *Function - get lastname
     *@return string $lastname
     */
     public function getLastname() {
        $lastname =  $this->userdetails['firstname'];
        return $lastname;
     }
      /*
     *Function - get email
     *@return string $email
     */
     public function getEmail() {
        $email =  $this->userdetails['email'];
        return $email;
     }
      /*
     *Function - get password
     *@return string $password
     */
     public function getPassword() {
        $password =  $this->userdetails['password'];
        return $password;
     }
      /*
     *Function - updating firstname
     *@param string $newfirstname
     *@return bool true,false
     */
     public function setFirstname($newfirstname) {
        $this->userdetails['firstname'] = $newfirstname;
        // update into database
     }
      /*
     *Function - updating lastname
     *@param string $lastname
     *@return bool true,false
     */
     public function setLastname($lastname) {
        $this->userdetails['lastname'] = $lastname;
        // update into database
     }
     /*
     *Function - updating email
     *@param string $email
     *@return bool true,false
     */
     public function setEmail($email) {
        $this->userdetails['email'] = $email;
        // update into database
     }
      /*
     *Function - updating password
     *@param string $password
     *@return bool true,false
     */
     public function setpassword($password) {
        $this->userdetails['password'] = $password;
        // update into database
     }
}


/*
 * @uses This class is used to get and set users firstname,lastname,email and password
 */
class twitterUser implements names, emailpassword {
     /**
     *Constructor
     *@access private $db
     *@param array $db
     *@access private $loggeduserid
     *@param int $loogeduserid
     *@return array login user details(firstname,lastname,email,password)
     */
    function _construct($db,$loggeduserid) {
        $this->userdetails = // db connect, get the twitter user details
    }
    /*
     *Function - get firstname
     *@return string $firstname
     */
     public function getFirstname() {
        $firstname =  $this->userdetails['firstname'];
        return $firstname;
     }
     /*
     *Function - get lastname
     *@return string $lastname
     */
     public function getLastname() {
        $lastname =  $this->userdetails['lastname'];
        return $lastname;
     }
     /*
     *Function - get email 
     *@return string $email
     */
     public function getEmail() {
        $email =  $this->userdetails['email'];
        return $email;
     }
     /*
     *Function - get password
     *@return string $password
     */
     public function getPassword() {
        $password =  $this->userdetails['password'];
        return $password;
     }
     
      /*
     *Function - updating firstname
     *@param string $newfirstname
     *@return bool true,false
     */
     public function setFirstname($newfirstname) {
        $this->userdetails['firstname'] = $newfirstname;
        // update into database
        // return true if inserted else false
     }
      /*
     *Function - updating lastname
     *@param string $lastname
     *@return bool true,false
     */
     public function setLastname($lastname) {
        $this->userdetails['lastname'] = $lastname;
        // update into database
     }
      /*
     *Function - updating email
     *@param string $email
     *@return bool true,false
     */
     public function setEmail($email) {
        $this->userdetails['email'] = $email;
        // update into database
     }
      /*
     *Function - updating password
     *@param string $password
     *@return bool true,false
     */
     public function setpassword($password) {
        $this->userdetails['password'] = $password;
        // update into database
     }
     
}
/*
 *This class is used to get and set users firstname,lastname,email and password
 *@Authir Kathir.
 */
class loggeduser {
   /*
     *Function - get user details
     *@param string $loggedaccount
     *@return array $userdetails(firstname,lastname,email,password)
     */
    function getUserdetails($loggedaccount) {
        $loggedobj = new $loggedaccount();
        $userdetails['firstname'] = $loggedobj->getFirstname();
        $userdetails['lastname'] = $loggedobj->getLastname();
        $userdetails['email'] = $loggedobj->getEmail();
        $userdetails['password'] = $loggedobj->getPassword();
        return $userdetails;
    }
    /*
     *Function - set user details
     *@param string $loggedaccount, array $newUserdetails
     */
    function setUserdetails($loggedaccount,$newUserdetails) {
        $loggedobj = new $loggedaccount();
        $firstname = $loggedobj->setFirstname($newUserdetails['firstname']);
        $lastname = $loggedobj->setLastname($newUserdetails['lastname']);
        $email = $loggedobj->setEmail($newUserdetails['email']);
        $password = $loggedobj->setPassword($newUserdetails['password']);
    }
}

$obj = new loggeduser();
$obj->getUserdetails('twitterUser');
$obj->setUserdetails('twitterUser',$newUserdetails);
$obj->getUserdetails('gmailUser');
$obj->setUserdetails('gmailUser',$newUserdetails);


