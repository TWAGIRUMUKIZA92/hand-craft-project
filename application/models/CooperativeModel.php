<?php
class CooperativeModel extends CI_Model
{
	function selectUser()
	{
		$query = $this->db->get('coopaccount_tbl');
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query;
		}
		else{
			return false;
		}
	}
    function insert($fname, $lname, $mail, $contact, $age,$gender){
		$data = array(
			'm_id' =>null,
			'm_fname' => $fname,
			'm_lname' => $lname,
			'm_email' => $mail,
			'm_contact'=>$contact,
            'm_age'=>$age,
            'm_gender'=>$gender
		);

		$this->db->insert('member', $data);
	}
	function selelctAccId($id){
		$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('craft_tbl');
		$this->db->join('coopaccount_tbl', 'cooperative_id = coop_id');
		$this->db->where('coop_id', $id);
		$query = $this->db->get('coopaccount_tbl');
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function save_craft($quantity, $file, $desc,$price,$ses)
    {
        $data = array(
            'crft_id' => null,
            'crft_quantity' =>$quantity,
            'crft_img' => $file,
            'crft_desc' => $desc,
            'crft_price' => $price,
			'cooperative_id' =>$ses,
            // 'm_status' => 1,
        );
    $this->db->insert('craft_tbl', $data);
    }
	function selectCraft($id)
	{  	$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('craft_tbl');
		$this->db->join('coopaccount_tbl', 'cooperative_id = coop_id');
		$this->db->where('coop_id',$id );
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query;
		}
		else{
			return false;
		}
	}
	function selectCoopCraft($id){
		$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('craft_tbl');
		$this->db->join('coopaccount_tbl', 'cooperative_id = coop_id');
		$this->db->where('crft_id', $id);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	function selectCooperative()
	{
		$query = $this->db->get('coopaccount_tbl');
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query;
		}
		else{
			return false;
		}
	}
	public function userInfo()
    {
		$query = $this->db->get('coopaccount_tbl');
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
    }
	public function saveinfo($email, $tel)
    {
        
        $data = array(
            'coop_tel' => $tel,
            'coop_email' => $email
        );
    $this->db->update('coopaccount_tbl', $data);
    }

    public function saveinfopass($pass)
    {
        
        $data = array(
            'coop_pass' => $pass
        );
    $this->db->update('coopaccount_tbl', $data);
    }
}