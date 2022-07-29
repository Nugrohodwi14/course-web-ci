<?php

class M_materi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('materi');
    }

    public function belajar($id = null)
    {
        $query = $this->db->get_where('materi', array('id' => $id))->row();
        return $query;
    }

    public function detail_materi($id = null)
    {
        $query = $this->db->get_where('materi', array('id' => $id))->row();
        return $query;
    }

    public function delete_materi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_materi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function pro_beg()
    {
        $course = 'programming';
        $kelas = 'beginner';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function pro_inter()
    {
        $course = 'programming';
        $kelas = 'intermediate';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function pro_exp()
    {
        $course = 'programming';
        $kelas = 'expert';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function desain_beg()
    {
        $course = 'desain grafis';
        $kelas = 'beginner';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function desain_inter()
    {
        $course = 'desain grafis';
        $kelas = 'intermediate';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function desain_exp()
    {
        $course = 'desain grafis';
        $kelas = 'expert';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function mach_beg()
    {
        $course = 'machine learning';
        $kelas = 'beginner';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function mach_inter()
    {
        $course = 'machine intermediate';
        $kelas = 'intermediate';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function mach_exp()
    {
        $course = 'machine learning';
        $kelas = 'expert';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function film_beg()
    {
        $course = 'film making';
        $kelas = 'beginner';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function film_inter()
    {
        $course = 'film making';
        $kelas = 'intermediate';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function film_exp()
    {
        $course = 'film making';
        $kelas = 'expert';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function menulis_beg()
    {
        $course = 'menulis';
        $kelas = 'beginner';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function menulis_inter()
    {
        $course = 'menulis';
        $kelas = 'intermidiate';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

    public function menulis_exp()
    {
        $course = 'menulis';
        $kelas = 'expert';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_course', $course);
        return $this->db->get('materi');
    }

}