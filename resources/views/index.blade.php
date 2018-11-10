@include('header')
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css.min')}}">
	<title>index-saved</title>
</head>
	<body>
			<div class="container">
				<div class="row">
					@if(session('message'))
		              <p class="alert alert-success">
		                {{session('message')}}</p>
		            @endif
				   <div class="col-sm-12">
				     @foreach($posts as $post)
				       <article>
				         <h2><a href="{{url('/posts/show/'.$post->id)}}"> {{$post->title}}</a></h2>
				         <h2>{{$post->description}}</h2>		         
				         <a href="{{url('/posts/'.$post->id.'/edit')}}" class="btn btn-primary btn-lg">Edit</a>
				         <a href="{{url('/posts/'.$post->id.'/delete/')}}" class="btn btn-primary btn-lg">Delete</a>
				       </article>
				     @endforeach
				   </div>
				</div>
			</div>
	</body>
</html>

@include('footer')
