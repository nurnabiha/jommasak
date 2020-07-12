<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe extends CI_Controller {


	
	public function index()
	{
		$this->load->model('recipes');
		$data_page = array(
			'recipes' => $this->recipes->get_recipes(),
			'popular_recipes' => $this->recipes->get_popular_recipes()
		);

		// die(debug($data_page['popular_recipes']));
		$this->template->set_body('content/recipe/body')->set_data($data_page)->view('notika','layout');
    }
    
    public function category($category,$sub_category)
    {
		$this->load->model('recipes');

		$cat = str_replace("_"," ",$category);
		$sub_cat = str_replace("_"," ",$sub_category);

        $data_page = array(
			'category' => $cat,
			'sub_category' => $sub_cat,
			'recipes'	=> $this->recipes->get_recipes_by_categories($cat,$sub_cat),
			'popular_recipes' => $this->recipes->get_popular_recipes()
		);
		$this->template->set_body('content/recipe/body')->set_data($data_page)->view('notika','layout');
	}
	
	public function details_recipe($recipe_id)
	{
		$this->load->model('recipes');
		$this->recipes->add_counter($recipe_id);


		$recipe = $this->recipes->get_recipes($recipe_id)[0];
		
		// die(debug($recipe));
		$data_page = array(
			'publish_date' => date('d-M-Y',strtotime($recipe['publish_date'])), 
			'category' => $recipe['category_name'], 
			'sub_category' => $recipe['subcategory_name'],
			'recipe_name' => $recipe['title'], 
			'recipe_owner' => $recipe['recipe_owner'],  
			'preparation_time' => $recipe['duration'],  
			'people_per_serve' => $recipe['serves'],
			'ingredients' => $recipe['ingredients'],
			'steps'	=> $recipe['steps'],
			'popular_recipes' => $this->recipes->get_popular_recipes()

		);

		$this->template->set_body('content/recipe/details_recipe')->set_data($data_page)->view('notika','layout');
	}

	public function search_recipe()
	{
		$this->load->model('recipes');
		$search_result = array();

		$keywords = explode(' ',$this->input->post('keywords'));
		foreach ($keywords as $keyword) 
		{
			$result = $this->recipes->find($keyword);
			if(!empty($result))
			{
				array_push($search_result,$result);
			}
		}

		$data_page = array(
			'recipes' => (!empty($search_result))?$search_result[0]:null,
			'popular_recipes' => $this->recipes->get_popular_recipes(),
			'page_name' => 'carian'
		);

		// die(debug($data_page));

		$this->template->set_body('content/recipe/body')->set_data($data_page)->view('notika','layout');
	}

	public function create_recipe()
	{
		if(!$this->session->has_userdata('user')) redirect(base_url());

		$this->load->model('recipes');
		$category = $this->recipes->get_category();
		// die(debug($category));


		$data_page = array(
			'category' => $category, 
		);

		$this->template->set_body('content/recipe/add_recipe')->set_data($data_page)->view('notika','blank');
	}

	public function add_recipe()
	{
		// echo json_encode($this->input->post());

		$this->load->model('recipes');

		$input = array(
			'title' => $this->input->post('title'),
			'duration' => $this->input->post('duration'),
			'serves' => $this->input->post('serves'),
			'ingredients' => $this->input->post('ingredients'),
			'steps' => $this->input->post('steps'), 
			'user_id' => $this->session->userdata('user')['id'],
			'category' => $this->input->post('category'), 
		);

		$id = $this->recipes->create_recipe($input);

		if(!empty($id))
		{
			$this->session->set_flashdata('success', 'Resepi berjaya ditambah.'); 
		} else 
		{
			$this->session->set_flashdata('error', 'Tidka berjaya menambah resepi.'); 
		}
		return;
	}

	public function user_recipe()
	{
		if(!$this->session->has_userdata('user')) redirect(base_url());
		
		$this->template->set_body('content/recipe/body')->view('notika','layout');
		
	}

    
}
