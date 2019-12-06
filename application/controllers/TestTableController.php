<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestTableController extends CI_Controller {

    /**
     * @var Users_model
     */
    public $Model;

    public function __construct()
    {
        parent::__construct();        
    }

    public function index()
    {
        $this->load->view('testtable', $this->viewData);
    }
}