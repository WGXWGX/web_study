<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('house_model');
    }
    public function house($offset=0)
    {
        $type_id = $this->input->get('type_id');
        $search = $this->input->get('search');
        $totalrows = $this->house_model->get_all_house_num($type_id,$search);
        /*分页类配置*/
        $this->load->library('pagination');
        $config['base_url'] = 'admin/house/';
        $config['total_rows'] = $totalrows;
        $config['per_page'] = 5;
        $config['uri_segment']=5;
        $config['reuse_query_string'] = TRUE;
        $config['enable_query_strings'] = TRUE;
        $this->pagination->initialize($config);
        /*分页类配置结束*/
        $alltype = $this->house_model->get_all_type();
        $result = $this->house_model->get_by_page($type_id,$search,$config['per_page'],$offset);
        $arr=array(
            'house' => $result,
            'types' => $alltype
        );
        $this->load->view('house.php', $arr);
    }
    public function get_add_house_info(){
        $all_type = $this->house_model->get_all_type();
        $all_facility = $this->house_model->get_all_facility();
        $all_rent_type = $this->house_model->get_all_rent_type();
        $arr = array(
            'types' =>$all_type,
            'facilitys'=>$all_facility,
            'rent_types'=>$all_rent_type
        );
        echo json_encode($arr);
    }

}
