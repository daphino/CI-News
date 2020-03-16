<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function load($page, $data, $admin = false)
    {

        if ($admin) {
            if (file_exists(APPPATH . 'views/admin/pages/' . $page . '.php')) 
            {
                // Building the template
                $this->ci->load->view('admin/layouts/header', $data);
                $this->ci->load->view('admin/layouts/sidebar');
                $this->ci->load->view('admin/pages/' . $page);
                $this->ci->load->view('admin/layouts/footer');
            }
            else {
                show_404();
            }   
        } 
        else {
            if (file_exists(APPPATH . 'views/pages/' . $page . '.php')) 
            {
                // Building the template
                $this->ci->load->view('layouts/header', $data);
                $this->ci->load->view('pages/' . $page);
                $this->ci->load->view('layouts/footer');
            }
            else {
                show_404();
            }   
        }

    }

}