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
	<h1 style="margin: 0px">Posts Specific Resource</h1>
	<spam>Using {{config('app.http_client');}}</spam>

	<div style="width: 40%; margin-top: 3%;">
		<div style="padding-bottom: 5%;">
			<p>{{$response->id}}</p>
			<h2>{{$response->title}}</h2>
			<p>{{$response->body}}</p>
			<a href="{{route('posts.index')}}">back</a>
		</div>
	</div>
	</center>
</body>
</html>