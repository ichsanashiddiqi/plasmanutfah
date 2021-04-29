<?php

class M_view_data extends CI_Model
{
    public function jumlah_abaka()
    {
        $query = $this->db->get('dat_abaka');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_abaka()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'abaca');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // public function des_abaka()
    // {
    //     $this->db->select('*');
    //     $this->db->from('deskriptor-bltstab');
    //     $this->db->where('kmditi', 'abaca');
    //     $query = $this->db->get();
    //     return $query;
    // }

    public function jumlah_bm()
    {
        $query = $this->db->get('dat_bunga_matahari');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_bm()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'bunga matahari');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_jp()
    {
        $query = $this->db->get('dat_jarak_pagar');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_jp()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'jarak pagar');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_kapas()
    {
        $query = $this->db->get('dat_kapas');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_kapas()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'kapas');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_kapuk()
    {
        $query = $this->db->get('dat_kapuk');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_kapuk()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'kapuk');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_kemiri()
    {
        $query = $this->db->get('dat_kemiri');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_kemiri()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'kemiri');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_kenaf()
    {
        $query = $this->db->get('dat_kenaf');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_kenaf()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'kenaf');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_rami()
    {
        $query = $this->db->get('dat_rami');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_rami()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'rami');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_tebu()
    {
        $query = $this->db->get('dat_tebu');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_tebu()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'tebu');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }


    public function jumlah_tembakau()
    {
        $query = $this->db->get('dat_tembakau');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_tembakau()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'tembakau');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_wijen()
    {
        $query = $this->db->get('dat_wijen');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_wijen()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'wijen');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
