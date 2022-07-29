<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function belajar($id)
    {
        $this->load->library('disqus');

        $this->load->model('m_materi');
        $where = array('id' => $id);
        $detail = $this->m_materi->belajar($id);
        $data['detail'] = $detail;
        $data['disqus'] = $this->disqus->get_html();
        $this->load->view('materi/belajar', $data);
    }

    public function pro_beg()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->pro_beg()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/pro_beg', $data);
        $this->load->view('template/footer');
    }

    public function pro_inter()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->pro_inter()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/pro_inter', $data);
        $this->load->view('template/footer');
    }

    public function pro_exp()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->pro_exp()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/pro_exp', $data);
        $this->load->view('template/footer');
    }

    public function desain_beg()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->desain_beg()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/desain_beg', $data);
        $this->load->view('template/footer');
    }

    public function desain_inter()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->desain_inter()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/desain_inter', $data);
        $this->load->view('template/footer');
    }

    public function desain_exp()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->desain_exp()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/desain_exp', $data);
        $this->load->view('template/footer');
    }

    public function mach_beg()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->mach_beg()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/mach_beg', $data);
        $this->load->view('template/footer');
    }

    public function mach_inter()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->mach_inter()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/mach_inter', $data);
        $this->load->view('template/footer');
    }

    public function mach_exp()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->mach_exp()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/mach_exp', $data);
        $this->load->view('template/footer');
    }

    public function film_beg()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->film_beg()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/film_beg', $data);
        $this->load->view('template/footer');
    }

    public function film_inter()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->film_inter()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/film_inter', $data);
        $this->load->view('template/footer');
    }

    public function film_exp()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->film_exp()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/film_exp', $data);
        $this->load->view('template/footer');
    }

    public function menulis_beg()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->menulis_beg()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/menulis_beg', $data);
        $this->load->view('template/footer');
    }

    public function menulis_inter()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->menulis_inter()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/menulis_inter', $data);
        $this->load->view('template/footer');
    }

    public function menulis_exp()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->menulis_exp()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/menulis_exp', $data);
        $this->load->view('template/footer');
    }
}