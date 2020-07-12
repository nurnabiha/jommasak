<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipes extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function get_category()
    {
        $result = $this->db->where('parent_id !=',0)
                ->get('recipe_categories')->result_array();

        foreach($result as $key => $value)
        {
            $parent = $this->db->where('id',$value['parent_id'])
                ->get('recipe_categories')->result_array()[0];
                $result[$key]['cat_name'] = $parent['name'].' '.$result[$key]['name'];
        }
						  
		if(sizeof($result) > 0) return $result;
    }

    public function create_recipe($input)
    {
        $this->db->insert('recipes', $input);
        return $this->db->insert_id();
    }

    public function get_recipes($recipe_id = null)
    {
        $this->db->select('a.*,b.name as subcategory_name,c.name as category_name,d.name as recipe_owner');
        if(!empty($recipe_id)) $this->db->where('a.id',$recipe_id) ;
        $this->db->join('recipe_categories b','b.id = a.category');
        $this->db->join('recipe_categories c','c.id = b.parent_id');
        $this->db->join('users d','d.id = a.user_id');
        $query = $this->db->get('recipes a');
        $result = $query->result_array();
        return (!empty($result))?$result:null;
    }

    public function get_recipes_by_categories($parent_category,$child_category)
    {
        $child_id = $this->db->select('a.id')->like('a.name',strtolower($child_category))->get('recipe_categories a')->result()[0]->id;

        $this->db->select('a.*,b.name as subcategory_name,c.name as category_name,d.name as recipe_owner');
        $this->db->join('recipe_categories b','b.id = a.category and b.id = '.$child_id);
        $this->db->join('recipe_categories c','c.id = b.parent_id');
        $this->db->join('users d','d.id = a.user_id');
        $query = $this->db->get('recipes a');
        $result = $query->result_array();
        return (!empty($result))?$result:null;
    }

    public function get_popular_recipes()
    {
        $this->db->select('a.*,b.name as subcategory_name,c.name as category_name,d.name as recipe_owner');
        $this->db->join('recipe_categories b','b.id = a.category');
        $this->db->join('recipe_categories c','c.id = b.parent_id');
        $this->db->join('users d','d.id = a.user_id');
        $this->db->order_by('counter','DESC');
        $this->db->limit(3);
        $query = $this->db->get('recipes a');
        $result = $query->result_array();
        return (!empty($result))?$result:null;
    }

    public function add_counter($recipe_id)
    {
        $result = $this->db->select('counter')->where('id',$recipe_id)->get('recipes')->result();
        if(!empty($result))
        {
            $counter = $result[0]->counter+1;
        }

        $this->db->set('counter',$counter)->where('id',$recipe_id)->update('recipes');
    }

    public function find($keyword)
    {
        $this->db->select('a.*,b.name as subcategory_name,c.name as category_name,d.name as recipe_owner');
        $this->db->like('title',$keyword);
        $this->db->or_like('ingredients',$keyword);
        $this->db->or_like('steps',$keyword);
        $this->db->join('recipe_categories b','b.id = a.category');
        $this->db->join('recipe_categories c','c.id = b.parent_id');
        $this->db->join('users d','d.id = a.user_id');
        $query = $this->db->get('recipes a');
        $result = $query->result_array();
        return (!empty($result))?$result:null;
    }
}

