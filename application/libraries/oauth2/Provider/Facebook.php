<?php
/**
 * Facebook OAuth2 Provider
 *
 * @package    CodeIgniter/OAuth2
 * @category   Provider
 * @author     Phil Sturgeon
 * @copyright  (c) 2012 HappyNinjas Ltd
 * @license    http://philsturgeon.co.uk/code/dbad-license
 */

class OAuth2_Provider_Facebook extends OAuth2_Provider
{
	protected $scope = array( 'email', 'read_stream');

	public function url_authorize()
	{
		return 'https://www.facebook.com/dialog/oauth';
	}

	public function url_access_token()
	{
		return 'https://graph.facebook.com/oauth/access_token';
	}

	public function get_user_info(OAuth2_Token_Access $token)
	{
		//https://graph.facebook.com/me?fields=id,name,email,last_name,gender,first_name&access_token=EAAOUL2gAsY4BADVjS73Pn7UW94RaXCUyJ4W7QjugpZCGcfnXUBr2WyghRICO3b1lbdaZAgISAFbu1K6YEhj7aVD6d07899vOPkcUoTGGHMU0eafA8LNrgRGDEm3DXSZAtvZCnBDrZCEop5Y6nT8Te2qa0l2vq34oZD
		$url = 'https://graph.facebook.com/me?fields=id,name,email,last_name,gender,first_name&'.http_build_query(array(
			'access_token' => $token->access_token,
		));

		$user = json_decode(file_get_contents($url));

		// Create a response from the request
		return array(
			'uid' => $user->id,
			'nickname' => isset($user->username) ? $user->username : null,
			'name' => $user->name,
			'first_name' => $user->first_name,
			'last_name' => $user->last_name,
			'email' => isset($user->email) ? $user->email : null,
			'location' => isset($user->hometown->name) ? $user->hometown->name : null,
			'description' => isset($user->bio) ? $user->bio : null,
			'image' => 'https://graph.facebook.com/me/picture?type=normal&access_token='.$token->access_token,
			'urls' => array(
			'Facebook' => $user->link,
			),
		);
	}
}
