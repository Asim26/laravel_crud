@include('header')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<div class="container">
		<div class="container col-md-5" >
      
  
<form method="POST" action="{{ url('/save') }}" enctype="multipart/form-data">


  <fieldset>
  
    <br>
    <h1 style="text-align: center; color: green">Enter your data here</h1>
    <br>
    <br>
    

    @if(session('message'))
    <p class="alert alert-success">
    {{session('message')}}</p>
    @endif



    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title" required>
     
    </div>
    <div class="form-group">
      <label for="Description">Description</label>
      <input type="text" class="form-control" name="description" placeholder="Description" >
    </div>

    <div class="form-group">
      <label for="image"></label>
      <input type="file"  name="image" >
    </div>

    {{csrf_field()}}
  
    
     
     <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
             <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Back</a>

     <button type="submit" class="btn btn-primary btn-lg">Add</button>

          
        </div>
   </div>
  
  </fieldset>
  </form>

<br>

</div>
</div>

</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
@include('footer')


