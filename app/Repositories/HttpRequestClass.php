<?php

namespace App\Repositories;


class HttpRequestClass{


	private $client;

	public function __construct(){
		$httpClient = config('app.http_client');
		if ($httpClient == 'GuzzleHttp') {
			$this->client = new GuzzleHttpRequest();
		}else{
			$this->client = new HttpClientRequest();
		}
	}

	public function get($url){
		$_this = new self;
		$response = $_this->client->get($url);
		//$response = $this->client->get($url);
		return view('/posts.index', [
            'response' => $response
        ]);
	}

	public function post($url, $data){

	}


}

?>