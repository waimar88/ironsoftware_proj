<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model{

    public function __construct()
  	{
    	parent::__construct();
  	}	

    public function get_products()
    {
        $this->db->select('*');
        $this->db->from('product_tbl');
        $this->db->order_by('id', 'Desc');
        $query = $this->db->get();
        return $query->result_array();  
    }   
   
    public function get_productByCat($category)
    {
        $this->db->select('*');
        $this->db->from('product_tbl');
        $this->db->where('category', $category);
        $query = $this->db->get();
        return $query->result_array();  
    }   
    
}
?>