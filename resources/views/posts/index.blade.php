<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Posts Request</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<h1 style="margin: 0px">Posts Response</h1>
		<spam>Using {{config('app.http_client');}}</spam>

		<div style="width: 40%; margin-top: 3%;">
			@foreach($response as $listResponse)
			<div style="padding-bottom: 5%;">
				<a href="{{route('posts.show',$listResponse->id)}}">{{$listResponse->id}}</a>
				<h2>{{$listResponse->title}}</h2>
				<p>{{$listResponse->body}}</p>
			</div>
			@endforeach()
		</div>
	</center>
</body>
</html>