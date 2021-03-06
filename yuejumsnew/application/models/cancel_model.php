<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Cancel_model extends CI_Model{
    public function update_by_manage1($id){
        $arr=array(
            'manage'=>1
        );
        $this->db->where('cancel_id', $id);
        $this->db->update('t_cancel', $arr);
    }
    public function update_by_manage2($id){
        $arr=array(
            'manage'=>2
        );
        $this->db->where('cancel_id', $id);
        $this->db->update('t_cancel', $arr);
    }
    public function get_by_id($id){
        $this->db->select('t_cancel.*,t_order.user_id,t_order.house_id,t_user.username,t_house.title,t_house.city,t_house.street,t_house.road');
        $this->db->from('t_order,t_house,t_user');
        $this->db->join('t_cancel','t_order.order_id=t_cancel.order_id and t_order.user_id = t_user.user_id and t_order.house_id = t_house.house_id');
        $this->db->where('t_cancel.cancel_id',$id);
        return $this->db->get()->row();
    }
    public function get_by_page($manage,$id_search,$username_search,$title_search,$limit=6, $offset=0){
    	$this->db->select('t_cancel.*,t_order.user_id,t_order.house_id,t_user.username,t_house.title,t_house.city,t_house.street,t_house.road');
    	$this->db->from('t_order,t_house,t_user');
    	$this->db->join('t_cancel','t_order.order_id=t_cancel.order_id and t_order.user_id = t_user.user_id and t_order.house_id = t_house.house_id');
        if($manage!=0){
            $this->db->where('t_cancel.manage',$manage);
        }
        if($id_search){
            $this->db->like('t_cancel.order_id',$id_search);
        }
        if($username_search){
            $this->db->like('t_user.username',$username_search);
        }
        if($title_search){
            $this->db->like('t_house.title',$title_search);
        }
        $this->db->order_by('t_cancel.manage', 'desc');
        $this->db->order_by('t_cancel.cancel_id', 'desc');
    	$this->db->limit($limit,$offset);
    	return $this->db->get()->result();
    }
    public function get_all_counts($manage,$id_search,$username_search,$title_search){
    	$this->db->select('t_cancel.*,t_order.user_id,t_order.house_id,t_user.username,t_house.title,t_house.city,t_house.street,t_house.road');
    	$this->db->from('t_order,t_house,t_user');
    	$this->db->join('t_cancel','t_order.order_id=t_cancel.order_id and t_order.user_id = t_user.user_id and t_order.house_id = t_house.house_id');
        if($manage!=0){
            $this->db->where('t_cancel.manage',$manage);
        }
        if($id_search){
            $this->db->like('t_cancel.order_id',$id_search);
        }
        if($username_search){
            $this->db->like('t_user.username',$username_search);
        }
        if($title_search){
            $this->db->like('t_house.title',$title_search);
        }
        $this->db->order_by('t_cancel.manage', 'desc');
        $this->db->order_by('t_cancel.cancel_id', 'desc');
    	return $this->db->count_all_results();
    }
}
?>

