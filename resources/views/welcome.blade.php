<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-MYqvu3HlL5IB5sSmHvXItH3ORCe66/GJi87e7vS12iZj+nWQgEJ4FL/2x4Zs8lUFlMI+z9Zvl1wNU+qHp1mH9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body >



    <video width="100%" autoplay muted loop id="myVideo" src="https://cdn.pixabay.com/video/2016/02/10/2118-155244104_large.mp4">
    
   
    
    
    
    
    </video>
 
    <div style="
    position: fixed;
    top: 5%;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
  
  " ><h1 class=" fs-1 content text-center">Welcome to Earth</h1>
        <p class="fs-6 text-center">Please get yourself registered first...</p>

        <form class="col-lg-4 me-auto" action="{{ route('signup') }}" method="POST">

    @csrf
<label for="">Name you would like to choose?</label>
<input name="name"  class="form-control w-100 mb-3" type="text" placeholder="Name...">

<label for="">Who you are?</label>
<select class="form-control w-75 mb-3" name="identity" id=""><option value="">Female</option><option value="">Male</option></select>

<label for="">Write an email address for yourself...</label>
<input name="email"  class="form-control w-50 mb-3" type="email" placeholder="Email...">

<label for="" >Enter passcode...</label>
<input  name="passcode" type="password" class="form-control w-50 mb-2" placeholder="Write your password...">
<label for="">Enter phone number</label>
<input class="form-control w-75 mb-3" type="text" placeholder="Phone No.# ">

<Label>Where would you like to live?</Label>
<input name="nationality"  class="form-control w-100 mb-5" type="text" placeholder="Enter your homeland name...">
<button style="background-color: #111324;" class=" py-2 fs-5  text-white mt-3 mb-5 w-100 d-block form-control">Sign-up Life</button>

</form>

@if(session()->has('message'))
<p class="text-danger flash w-50">
    {{ session('message') }}
</p>
@endif

<script>
const flash = document.querySelector('.flash');
const timeout = 2000;

setTimeout(() => {
    flash.style.transition = 'transform 0.7s ease';
    flash.style.transform = 'scale(0)';
}, timeout);
</script>

         </div>
 


</body>
</html>