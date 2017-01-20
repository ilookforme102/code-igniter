<?php
/**
 * Created by PhpStorm.
 * User: ilookforme102
 * Date: 1/19/2017
 * Time: 11:45 AM
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller{
     public function index()
     {
        echo "This is default function.";
    }

    /**
     *get name
     */
    public function hello()
    {

        $variable['row']=' Row name';
        $this ->load->view('test/test-view',$variable);
    }


    public function showNames(){
        $this ->load->model('test_model');
        $variable['customers']= $this->Test_model->getCustomer;
        $this->load->view('test/showNames',$variable);
    }

}