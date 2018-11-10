@include('header')
<html>
<head>
  <title>Contact Us </title>

  <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css.min')}}">

</head>

<body>



<div class="container col-md-6">
  <br>
  
       
<h2 style="text-align: center;">Contact Us </h2>

<form method="POST" action="{{ url('/') }}">
  {{ csrf_field() }}
  <fieldset>

<div class="col-md-07">
  
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name"  name="name" aria-describedby="enter_your_name" placeholder="enter your name" required="">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>


    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="enter your email" required="">
    </div>

    <div class="form-group">
      <label for="phone_number">Phone number</label>
      <input type="text" class="form-control" id="phone_number" name="phone_no" placeholder="enter your phone number" required="">
    </div>

    <div class="form-group">
      <label for="message">Write Your Message</label>
 
    
    <div class="form-group">
    <textarea rows="7" cols="50" name="message" placeholder=" Please Write Your Message here." required="">
    </textarea>
   </div>



       
     <button type="submit" class="btn btn-primary">Submit</button>
     <a href="{{ url('/') }}" class="btn btn-danger">Back</a>
  </fieldset>

</div>
</form>
</div>


</body>
</html>

@include('footer')


