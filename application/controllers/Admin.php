<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');		
    }

    public function index()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'index.php?admin/admin_dashboard', 'refresh');
    }

    function admin_dashboard()
    {
        // print_r($this->session->userdata());
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'admin_dashboard';
        $page_data['page_title'] = get_phrase('Admin-Dashboard');
        $this->load->view('backend/index', $page_data);
    }

    function admins($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
        {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
        }
        if ($param1 == 'create') 
        {
            $this->crud_model->admin_create();
            redirect(base_url() . 'index.php?admin/admins/', 'refresh');
        }
        if ($param1 == 'edit') 
        {
            $this->crud_model->admin_edit($param2);
            redirect(base_url() . 'index.php?admin/admin_profile/'.$param2, 'refresh');
        }
        if ($param1 == 'delete')
        {
            $this->crud_model->admin_delete($param2);
        redirect(base_url() . 'index.php?admin/admins/', 'refresh');
        }
        if ($param1 == 'change_password') 
        {
           $this->crud_model->admin_pass($param2);
            redirect(base_url() . 'index.php?admin/admin_profile/'. $param2, 'refresh');
        }
        $page_data['page_name']     = 'admins';
        $page_data['page_title']    = get_phrase('Admins');
        $this->load->view('backend/index', $page_data);
    }
    
    public function pasien($param1 = '', $param2 = '', $param3 = '')
    {
        if ($param1 == 'create') 
        {
            if ($this->crud_model->insert_pasien($this->input->post())) {
                redirect(base_url() . 'index.php?admin/pasien', 'refresh');
            }
        }else{
            $page_data['data']['pasiens']   = $this->db->get('pasien')->result_array();
            $page_data['page_name']  = 'pasiens';
            $page_data['page_title'] = get_phrase('Manage-Pasiens');
            $this->load->view('backend/index', $page_data);
        }
    }

    public function check_riwayat_transaksi($param1)
    {
        // echo $param1;
        $flag = 1;
        $res_ = $this->db->query('SELECT COUNT(*), SUM(biaya) FROM rawat_jalan WHERE id_pasien='.$param1.' AND is_paid=0')->result_array();

        $message ='';
        if ($res_[0]['COUNT(*)'] >= 1) {
            $message .= 'Belum Lunas ('.$res_[0]['SUM(biaya)'].')';
            $flag = 0;
        }
        
        $res = $this->db->query('SELECT COUNT(*) FROM rawat_jalan WHERE id_pasien='.$param1.' AND status=0')->result_array();
        if ($res[0]['COUNT(*)'] >= 1) {
            $message .= " \n  Anda Sedang Aktif";
            $flag = 0;
        }

        $response['status']=$flag;
        $response['message']=isset($message) ? $message : null;
        echo json_encode($response);
    }

    public function rawat_jalan($value='')
    {
        if ($value == 'create') {
            if ($this->crud_model->insert_rawat_jalan($this->input->post())) {
                redirect(base_url() . 'index.php?admin/pasien', 'refresh');
            }
        }
    }

    public function list_rawat_jalan($value='')
    {
        $page_data['data']['rawat_jalan']   = $this->db->query('SELECT rawat_jalan.*, pasien.* , rawat_jalan.id as id_rawat_jalan FROM rawat_jalan JOIN pasien ON pasien.id = rawat_jalan.id_pasien')->result_array();
        $page_data['page_name']  = 'list_rawat_jalan';
        $page_data['page_title'] = get_phrase('Manage-Pasiens');
        $this->load->view('backend/index', $page_data);
    }

    public function view_rawatjalan($value='')
    {
        $page_data['data']['rawat_jalan']   = $this->db->query('SELECT rawat_jalan.*, pasien.* , rawat_jalan.id as id_rawat_jalan FROM rawat_jalan JOIN pasien ON pasien.id = rawat_jalan.id_pasien where rawat_jalan.id = '.$value)->row();
        // print_r($page_data['data']['rawat_jalan']);
        // die;
        $page_data['page_name']  = 'detail_rawat_jalan';
        $page_data['page_title'] = get_phrase('Manage-Pasiens');
        $this->load->view('backend/index', $page_data);
    }
}