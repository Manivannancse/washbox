<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_oa2 extends CI_Controller
{
    function __construct()
		{
			parent::__construct();
			$this->load->model("Wash_Model");
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
			$this->load->helper('url');
			$this->load->library('session');
	
			
		}
    public function session($provider_name)
    {

        $this->load->library('session');
        $this->load->helper('url_helper');
        $this->load->library('oauth2/OAuth2');
	$this->load->library('tank_auth');
	$this->load->config('oauth2', TRUE);
        $provider = $this->oauth2->provider($provider_name, array(
	'id' => $this->config->item($provider_name.'_id', 'oauth2'),
        'secret' => $this->config->item($provider_name.'_secret', 'oauth2'),
        ));

        if ( ! $this->input->get('code'))
        {
           $provider->authorize();
        }
        else
        {
            try
            {
                $token = $provider->access($this->input->get('code'));
                $user = $provider->get_user_info($token);

                $alreadyExits=$this->Wash_Model->alreadyExits($user);
		if($alreadyExits["message"]=="yes"){
		$session=$this->session->set_userdata("user",$alreadyExits["data"]);

		}
		else{
		$result=$this->Wash_Model->registerUser($user,$provider_name);
		$session=$this->session->set_userdata("user",$result);

		}
		redirect("WashBox/washBoxOrder");

            }

            catch (OAuth2_Exception $e)
            {
                show_error('That didnt work: '.$e);
            }

        }
    }
}

