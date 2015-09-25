<?php
/** emailpassowrd interface
 * @method getEmail returntype string getting the users email from the db
 * @method getPassword returntype string getting the users password from the db
 * @method setEmail returntype bool updating the user first name on db
 * @param string $email
 * @method setPassword returntype bool updating the user last name on db
 * @param string $password
 * @author Kathir.
 */
interface emailpassowrd {
    public function getEmail();
    public function getPassword();
    public function setEmail($email);
    public function setPassword($password);
}
?>