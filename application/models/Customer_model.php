<?php
/**
 * Created by PhpStorm.
 * User: ilookforme102
 * Date: 1/19/2017
 * Time: 1:14 PM
 */

class Customer_model extends CI_Model{
    public function getCustomers(){
        $this->db->select('fname','lname');
        $this->db->from('Customers');
        return $this->db->get()->result_array();

    }
}