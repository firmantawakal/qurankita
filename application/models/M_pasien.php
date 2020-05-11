<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_pasien extends CI_Model {

	function get_table($table)
    {
        // $this->db->where($where, $id);
        return $this->db->get($table)->result();
	}
	
	function get_all()
    {
        $sql = "SELECT a.*,
                b.name as prov_fy, 
                c.name as kab_fy, 
                d.name as kec_fy, 
                e.name as kel_fy, 
                f.name as prov_p, 
                g.name as kab_p, 
                h.name as kec_p, 
                i.name as kel_p 
                from 
                pasien a, provinces b, regencies c, districts d, villages e, provinces f, regencies g, districts h, villages i
                where a.f1_v4 = b.id 
                and a.f1_v5 = c.id
                and a.f1_v6 = d.id
                and a.f1_v7 = e.id
                and a.f2_v10 = f.id
                and a.f2_v11 = g.id
                and a.f2_v12 = h.id
                and a.f2_v13 = i.id
                order by f1_v10 DESC";
		return $this->db->query($sql)->result();
	}
	
	// insert data
    function insert($tb,$data)
    {
        $this->db->insert($tb, $data);
	}
	
	// update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
