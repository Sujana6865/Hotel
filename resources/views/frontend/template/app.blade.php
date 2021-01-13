<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <!-- header -->
    <div class="flex justify-between bg-cover w-full  h-screen relative" style="background-image:url(../images/banner3.jpg);">
     
        <div>
            <h1  class="p-10 text-white text-2xl">DHARAN KITCHEN</h1>
           
        </div>
        <div>
            <ul class="flex"> 
                <li class="p-10 text-white hover:text-white"><a href="">ABOUT</a></li>
                <li class="p-10 text-white hover:text-red-900"><a href="">MENU</a></li>
                <li class="p-10 text-white hover:text-red-900"><a href="">GALLERY</a></li>
                <li class="p-10 text-white hover:text-red-900"><a href="">CHEFS</a></li>
                <li class="p-10 text-white hover:text-red-900"><a href="">CONTACT</a></li>
            </ul>
        </div>
       
        <div class="absolute bg-gray-300 p-10 justify-center left-1/2 top-1/2 rounded-md" style="transform: translate(-50%,-50%);" >
            <h1 class="text-2xl  text-red-900 text-center">HOTEL DHARAN KITCHEN</h1>
            <p class="mt-4 text-gray-600 " >
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, dignissimos!
            </p>
            <div class="flex justify-center">
                <button class="bg-green-500 mt-4 px-4 py-2 hover:bg-green-600 text-white">Book Now</button>

            </div>
        </div>

        <div class="bg-black flex absolute p-8 left-1/2 -bottom-10 box-border border-b-4 border-red-800 shadow-md" style="transform: translate(-50%,2.5rem);">
            <div class="p-2">
                <h3 class="text-white">Email</h3>
                <input type="text" name="" class="p-1" placeholder="Email Address">    
            </div>
            <div class="p-2">
                <h3 class="text-white">Check in</h3>
                <input type="text" name="" class="p-1" placeholder="Check in"  >
            </div>
            <div class="p-2">
                <h3 class="text-white">Check out</h3>
                <input type="text" name="" class="p-1" placeholder="Check out"  >
            </div>
            <div class="p-2">
                <h3 class="text-white">Children</h3>
                <input type="text" name="" class="p-1"  >
            </div>
            <div class="p-2 mt-6">
                <a href="" class="bg-green-500 text-white px-4 py-2">Reserve</a>
            </div>
        </div>
    </div>

    @yield('main')

  <!--Footer-->
  <div class="bg-black flex">
      <div>
        <h1>Hotel Dharan kitchen</h1>
        <div></div>
      </div>
      <div>

      </div>
      <div>

      </div>
      <div>

      </div>
  </div>
</body>
</html>