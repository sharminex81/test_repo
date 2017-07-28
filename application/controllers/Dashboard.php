<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    /**
     * Dashboard constructor.
     */
    public function __construct() {
        parent::__construct();

        /**
         * All data of a user is saved with session
         * If all data is true then redirect to dashboard
         */
        $user = $this->session->userdata('details');

        if($user == null) {
            $message['error'] = 'Sorry! Access Denied. You don’t have permission to do.';
            $this->session->set_userdata($message);
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['header'] = $this->load->view('common/header', '', true);
        $data['navbar'] = $this->load->view('common/navbar', '', true);
        $data['placeholder'] = $this->load->view('common/placeholder', '', true);
        $data['footer'] = $this->load->view('common/footer', '', true);
        $this->load->view('dashboard/dashboard', $data);
    }

}