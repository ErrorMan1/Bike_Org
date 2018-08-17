<?php

namespace App\Service;


class Line{


    private $base_url = "http://localhost/line/public/line/";
    private $client_id = "1596406680";
    private $client_secret = "287654b1f431edf1309690a0875ed09f";

    public function login($code){
        $parameter = array(
			'grant_type' => 'authorization_code',
			'code' => $code,
			'redirect_uri' => $this->base_url,
			'client_id' => $this->client_id ,
			'client_secret' => $this->client_secret
        );
        $response = json_decode($this->curl('https://api.line.me/v2/oauth/accessToken',$parameter,'POST'),TRUE);
        return $response;
    }

    public function getUserProfile($line_token){
        $getUser = json_decode($this->curl('https://api.line.me/v2/profile',array(),'GET',array('Authorization: Bearer '.$line_token)),TRUE);
	     return $getUser;
    }


    public function curl($url=null,$parameter=array(),$method='GET',$header=array()){
		$options = array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_CUSTOMREQUEST => $method
		);

		if(!empty($parameter)) $options[CURLOPT_POSTFIELDS] = http_build_query($parameter);
		if(!empty($header)) $options[CURLOPT_HTTPHEADER] = $header;

		$curl = curl_init();
		curl_setopt_array($curl, $options);
		$response = curl_exec($curl);
        curl_close($curl);
		return $response;
	}

}
