<?php
/** Names interface
 * @method getFirstname returntype string getting the users first name from the db
 * @method getLastname returntype string getting the users last name from the db
 * @method setFirstname returntype bool updating the user first name on db
 * @param string $firstname
 * @method setLastname returntype bool updating the user last name on db
 * @param string $lastname
 * @author Kathir.
 */
interface names {
    public function getFirstname();
    public function getLastname();
    public function setFirstname($firstname);
    public function setLastname($lastname);
}
?>