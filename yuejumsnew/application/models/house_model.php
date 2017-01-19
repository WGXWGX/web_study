<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class House_model extends CI_Model {
    public function get_by_page($type_id,$search,$limit,$offset){
        $this->db->from('t_house');
        $this->db->join('t_house_type','t_house.type_id=t_house_type.type_id');
        $this->db->where('t_house.is_delete',0);
        if($type_id &&$type_id != 0){
            $this->db->where('t_house.type_id',$type_id);
        }
        if($search){
            $this->db->like('t_house.title',$search);
        }
        $this->db->order_by('t_house.house_id','desc');
        $this->db->limit($limit,$offset);
        $query=$this->db->get();
        return $query->result();
//        $this->db->query("select * from t_house,t_house_type where t_house.type_id=t_house_type.type_id and t_house.is_delete=0")->result();
    }
    public function get_all_house_num($type_id,$search){
        $this->db->from('t_house');
        $this->db->join('t_house_type','t_house.type_id=t_house_type.type_id');
        $this->db->where('t_house.is_delete',0);
        if($type_id&&$type_id != 0){
            $this->db->where('t_house.type_id',$type_id);
        }
        if($search){
            $this->db->like('t_house.title',$search);
        }
        return $number=$this->db->count_all_results();
    }
    public function get_all_type(){
        $this->db->from('t_house_type');
        return $this->db->get()->result();
    }
    public function  get_all_facility(){
        $this->db->from('t_facility_type');
        return $this->db->get()->result();
    }
    public function get_all_rent_type(){
        $this->db->from ('t_house_rent_type');
        return $this->db->get()->result();
    }
}