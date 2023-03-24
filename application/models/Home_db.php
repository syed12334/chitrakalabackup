<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_db extends CI_Model{

	    public function rows_by_paginations($query,$order_by,$order_by_arr,$db="default")
    {
        $this->load->database($db);

        if(isset($_POST["order"]))
        {
            $order_by = " order by ".$order_by_arr[$_POST['order']['0']['column']]." ".$_POST['order']['0']['dir'];
        }
        
        $limit = " ";
        if($_POST["length"] != -1)
        {
            $limit = " limit {$_POST['length']}";
            if($_POST['start'] > 0){
                $limit = " limit {$_POST['start']}, {$_POST['length']}";
            }
        }
        $query = $this->db->query($query.$order_by.$limit);
        
        return $query->result();
    }   
  
    public function run_manual_query_result($query,$db="default")
    {
        $this->load->database($db);
        $query = $this->db->query($query);
        return $query->result();
    }
    
    
	  
    
    public function getprofilegallery() {
        $getPopular = $this->db->select('p.name,p.pro_id as pid,pi.amount,pi.category,pi.medium')
                               ->from('profile p')
                               ->join('profile_img pi','pi.proid = p.pro_id','left')
                               ->group_by('pi.proid')
                               ->order_by('p.name asc')
                               ->where(['p.astatus'=>1,'p.status'=>0])
                               ->get();
        return $getPopular !== FALSE ? $getPopular->result() : array();
    }
    
}