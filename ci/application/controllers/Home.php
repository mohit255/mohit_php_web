<?php

class Home extends CI_Controller{

    public function __construct(){    

    parent::__construct();

    error_reporting(0);

}

    public function index()

	{

        $this->load->view('home_view');

	}

	


}
?>

