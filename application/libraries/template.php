<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Template
{
    private $CI;
    private $template_path = 'template';
    private $css = array();
    private $js = array();
    private $body = array();
    private $data = array();
    private $template_title;
    private $template_description;

    function __construct()
    {
        $this->CI =& get_instance();
    }

    public function get_template_path()
    {
        return $this->template_path;
    }

    public function set_template_path($template_path)
    {
        $this->template_path = $template_path;
        return $this;
    }
    
    public function get_css()
    {
        return $this->css;
    }

    public function set_css($css)
    {
        if(is_array($css))
        {
            array_push( $this->css, $css);
        } else 
        {
            $arraysize = sizeof($this->css);
            $this->css[$arraysize] = $css;
        }
        return $this;
    }

    public function get_js()
    {
        return $this->js;
    }

    public function set_js($js)
    {
        if(is_array($js))
        {
            array_push($this->js, $js);
        } else
        {
            $arraysize = sizeof($this->js);
            $this->js[$arraysize] = $js;
        }

        return $this;
    }

    public function get_body()
    {
        return $this->body;
    }

    public function set_body($body)
    {
        if(is_array($body))
        {
            array_push($this->body, $body);
        } else 
        {
            $arraysize = sizeof($this->body);
            $this->body[$arraysize] = $body;
        }

        return $this;
    }

    public function get_data()
    {
        return $this->data;
    }

    public function set_data($data)
    {
        $this->data = $data;
        return $this;
    }

    public function get_template_title()
    {
        return $this->template_title;
    }

    public function set_template_title($template_title)
    {
        $this->template_title = $template_title;
    }

    public function get_template_description()
    {
        return $this->template_description;
    }

    public function set_template_description($template_description)
    {
        $this->template_description = $template_description;
    }

    public function view($template_name, $layout_name)
    {
        $data = array(
            'template_title' => $this->get_template_title(),
            'template_description' => $this->get_template_description(),
            'template_body' => $this->get_body(),
        );
     
        $this->CI->load->view($this->get_template_path().'/'.$template_name.'/'.$layout_name, array_merge($data, $this->get_data()));
    }


}
?>