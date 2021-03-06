<?php

namespace App\Repositories;
use Illuminate\Support\Facades\Http;


class HttpClientRequest{

	protected $baseUri;

	public function __construct()
	{
		$this->baseUri = config('app.base_uri');

	}

	public function get($url){
		$response = Http::get($this->baseUri.'/'.$url);
		return json_decode($response->getBody()->getContents());
	}

}



?>