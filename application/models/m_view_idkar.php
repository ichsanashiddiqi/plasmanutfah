<?php

class M_view_idkar extends CI_Model
{
    function v_idkar_abaka()
    {
        return $this->db->get('tab_abaka');
    }
}
