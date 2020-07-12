<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
        if($this->session->has_userdata('user')) redirect(base_url());
		$this->template->set_body('content/login/login')->view('notika','blank');
    }

    public function register_page()
	{
        if($this->session->has_userdata('user')) redirect(base_url());

        $this->load->library('form_validation');

		$this->template->set_body('content/login/register')->view('notika','blank');
    }

    public function register()
    {

        $this->load->library('form_validation');
        $this->load->model('user');

        $this->form_validation->set_rules('name', 'Nama', 'required', 
                array('required' => '%s mesti dimasukkan.')
        );
        $this->form_validation->set_rules('password', 'Kata laluan', 'required',
                array('required' => '%s mesti dimasukkan.')
        );
        $this->form_validation->set_rules('passconf', 'Pengesahan Kata Laluan', 'required|matches[password]', 
                array('required' => '%s mesti dimasukkan.', 'matches' => '%s tidak sepadan.')
        );
        $this->form_validation->set_rules('email', 'Emel', 'required|valid_email|is_unique[users.email]', 
                array('required' => '%s mesti dimasukkan.', 'valid_email' => '%s tidak sah.', 'is_unique' => '%s pernah didaftarkan.' )
        
        );

        if ($this->form_validation->run() == FALSE)
        {
            $string = '';
            foreach($this->form_validation->error_array() as $key => $value){
                $string .= ' '.strip_tags(trim($value));
            }
            $this->session->set_flashdata('error', $string); 
            $this->register_page();
        }
        else
        {
            $input = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            );

            $id = $this->user->create_user($input);

            if(!empty($id))
            {
                $this->session->set_flashdata('success', 'Akaun berjaya didaftarkan.'); 
                $this->index();
            }
        }        
    }

    public function verify()
    {
        $this->load->model('user');

        $user = $this->user->get_user($this->input->post('email'));

        if($user)
        {
            if(password_verify($this->input->post('password'), $user['password']))
            {
                $this->session->set_userdata('user', $user);
                $this->session->set_flashdata('success', 'Hai, '.$user['name']); 
                redirect(base_url('recipe/user_recipe'));
            } else {
                $this->session->set_flashdata('error', 'Kata laluan tidak tepat.');
                $this->index();
            }
        } else {
            $this->session->set_flashdata('error', 'Emel tidak berdaftar.'); 
            $this->index();
        }
    }

    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
    
        
}
