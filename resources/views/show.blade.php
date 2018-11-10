@include('header')
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css.min')}}">
	<title>index</title>
</head>
<body>
		<div class="container">
		   <div class="col-sm-12">

		       <article>
		         <h2>{{$post->title}}</h2>
		         <h2>{{$post->description}}</h2>
		       </article>
		       
		   </div>
		</div>

</body>
</html>
<br>
<br>
<br>
@include('footer')
