@include('header')
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css.min')}}">
	<title>Edit</title>
</head>
<body>


	<div class="container">
		<div class="row ">
      <div class="col-lg-3"></div>
			<div class="col-lg-6">

                <form method="POST" action="{{ url('/posts/update') }}">


  <fieldset>
  
    <br>
    <h1 style="text-align: center; color: green">Update your data</h1>
    <br>
    <br>
    
    

    <div class="form-group">
    	<legend>Edit Post:  {{$post->title}}</legend>
    </div>



    
    @if(session('message'))
    <p class="alert alert-success">
    {{session('message')}}</p>
    @endif
    


    <input type="hidden" name="id" value="{{$post->id}}" />


    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" value="{{$post->title}}">
     
    </div>
    <div class="form-group">
      <label for="Description">Description</label>
      <input type="text" class="form-control" name="description" value="{{$post->description}}">
    </div>

    {{csrf_field()}}
  
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
             <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Back</a>
     <button type="submit" class="btn btn-primary btn-lg">Edit</button>

     
        </div>
   </div>
  
  </fieldset>
  </form>

<br>

</div>
</div>
</div>



<br>
<br>
<br>

				
				
			</div>
		</div>
	


</body>
</html>
@include('footer')
