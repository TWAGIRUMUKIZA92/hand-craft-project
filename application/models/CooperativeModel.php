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
	public function save_account($email, $coop_name, $licence,$password,$tel)
    {
        $data = array(
            'coop_id' => null,
            'coop_name' =>$quantity,
            'coop_pass' => $file,
            'coop_tel' => $desc,
            'coop_licence' => $price,
			'category'=>'cooperative',
            'coop_status' => 1,
        );
    $this->db->insert('coopaccount_tbl', $data);
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
            'crft_status' => 1,
        );
    $this->db->insert('craft_tbl', $data);
    }
	function selectCraft($id)
	{  	$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('craft_tbl');
		$this->db->join('coopaccount_tbl', 'cooperative_id = coop_id');
		$this->db->where('coop_id',$id);
		$this->db->where('crft_status',1);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query;
		}
		else{
			
			return $query;
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
	public function updatecraft($quantity, $price, $desc, $crft_id)
	{
		$data=array(
         'crft_quantity'=>$quantity,
		 'crft_price'=>$price,
		 'crft_desc'=>$desc
		);
		$this->db->where('crft_id',$crft_id);
		$this->db->update('craft_tbl',$data);
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
	public function deleteCraft($crft_id,$status)
    {
        if ($status==1) {
            $data = array(
                'crft_status' => 0
            );
        $this->db->where('crft_id', $crft_id);        
        $this->db->update('craft_tbl', $data);
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
	public function reset($pass)
    {		
        $data = array(
            'coop_pass' => $pass
        );
    
    $this->db->update('coopeccount_tbl', $data);
    } 
	public function get_sum_count_craft(){
     $count="SELECT count(if(crft_status=1,crft_status,Null))as crft_status,
	                sum(if(crft_status=1,crft_quantity,Null))as crft_quantity
					from craft_tbl";
	$result=$this->db->query($count);
	return $result->row();
	}
	public function get_delete_count_craft(){
		$count="SELECT count(if(crft_status=0,crft_status,Null))as crft_status,
					   sum(if(crft_status=0,crft_quantity,Null))as crft_quantity
					   from craft_tbl";
	   $result=$this->db->query($count);
	   return $result->row();
	   }
}