<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    function insert_pasien($value='')
    {
        $data = array(
                'nama_pasien' => $this->input->post('name'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_rm' => $this->getNoRM()
        );
        return $this->db->insert('pasien', $data);
    }

    function getNoRM()
    {
        $noRm = $this->db->select('no_rm')->order_by('id',"desc")->limit(1)->get('pasien')->row();
        if ($noRm) {
            // return "string";
            $counter = explode("_", $noRm->no_rm)[1];
            $counter = str_pad($counter + 1, 3, '0', STR_PAD_LEFT);
        }else{
            // return "as";
            $counter = '001';
        }
        return 'no_'.$counter;

    }

    function getPasien($idPasien)
    {
        return $this->db->select('*')->order_by('id',"desc")->get('pasien')->row();
    }

    public function insert_rawat_jalan($value)
    {
        $data = array(
                'id_pasien' => $this->input->post('id_pasiens'),
                'waktu' => $this->input->post('tanggal').' '.$this->input->post('jam'),
                'pembayaran' => $this->input->post('pembayaran'),
                'no_asuransi' => $this->input->post('no_asuransi'),
                'penanggung' => $this->input->post('penanggung'),
                'kelas' => $this->input->post('kelas'),
                'unit' => $this->input->post('unit'),
                'dokter' => $this->input->post('dokter'),
                'paket' => $this->input->post('paket'),
                'cara_masuk' => $this->input->post('cara_masuk'),
                'is_paid'=> 0,
                'kode' => $this->kode_rawat_jalan(),
        );
        return $this->db->insert('rawat_jalan', $data);
    }

    public function kode_rawat_jalan($value='')
    {
        $kode = $this->db->select('kode')->order_by('id',"desc")->limit(1)->get('rawat_jalan')->row();

        if ($kode) {
            // return "string";
            $counter = explode("_", $kode->kode)[1];
            $counter = str_pad($counter + 1, 3, '0', STR_PAD_LEFT);
        }else{
            // return "as";
            $counter = '001';
        }
        return $counter;
    }
    
}