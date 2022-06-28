<?php
class ConsultatorModel extends CI_Model
{
	function selectUser()
	{ 
        $this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('coopaccount_tbl');
        $this->db->where('category','consultator');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query;
		}
		else{
			return $query;
		}
	}
	
    public function userInfo($id)
    {
        $this->db->select('*');
        $this->db->from('coopaccount_tbl');
        $this->db->where('coop_id',$id);
		$query = $this->db->get();
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
    $this->db->where('category','consultator');
    $this->db->update('coopaccount_tbl', $data);
    }
    public function saveinfopass($pass)
    {
        
        $data = array(
            'coop_pass' => $pass
        );
        $this->db->where('category','consultator');
    $this->db->update('coopaccount_tbl', $data);
    }
	public function reset($pass)
    {		
        $data = array(
            'coop_pass' => $pass
        );
    $this->db->where('category','consultator');
    $this->db->update('coopeccount_tbl', $data);
    } 
    function selectCooperative()
	{   
		$this->db->select('*');
		$this->db->from('coopaccount_tbl');
		$this->db->where('coop_status',1);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query;
		}
		else{
			return $query;
		}
	}
    function select_Request()
	{
		$this->db->select('*');
		$this->db->from('coopaccount_tbl');
		$query = $this->db->get('coopaccount_tbl');
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query;
		}
		else{
			return false;
		}
	}
	function selectCraft()
	{  	$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('craft_tbl');
		$this->db->join('coopaccount_tbl', 'cooperative_id = coop_id');
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
	// public function get_sum_count_craft(){
	// 	$count="SELECT count(if(crft_status=1,crft_status,Null))as crft_status,
	// 				   sum(if(crft_status=1,crft_status,Null))as crft_status
	// 				   from craft_tbl";
	//    $result=$this->db->query($count);
	//    return $result->row();
	//    }
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
?>