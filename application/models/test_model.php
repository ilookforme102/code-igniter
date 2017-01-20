
<?php

class Test_model extends CI_Model
{
    public function getCustomer(){
    $names = array(
        array("fn"=>'Ann',"ln"=>'Temari'),
        array("fn"=>'Uzumaki',"ln"=>'Naruto'),
        array("fn"=>'Uchiha',"ln"=>'Sasuke')
    );
    return $names;
}
}