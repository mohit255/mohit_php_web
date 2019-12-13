<?php

class Other extends CI_Controller{

    public function __construct(){    

    parent::__construct();

    error_reporting(0);

}

    public function index()

	{

        $this->load->view('other_view');

	}

	


}
?>

