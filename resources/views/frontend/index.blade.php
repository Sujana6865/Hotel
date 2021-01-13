@extends('frontend.template.app')
@section('main')
       <!-- welcome -->
       <div class="pt-20">
        <div class="relative w-full h-52">
            <div class="flex justify-center">
                <div class="absolute h-48 p-0 bottom-0 flex items-end">
                     <h1 class="text-9xl text-red-900 text-opacity-25">WELCOME</h1>    
                </div>
                <div class="absolute h-10 bottom-0 p-0 flex items-end">
                    <h1 class="text-3xl">Welcome To<span class="text-3xl text-red-900 p-0">Dharan Kitchen</span></h1>
                </div>
 
            </div>
        </div>
 
         <p class="text-center pt-2 text-gray-600">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus cumque sed animi dolorum, voluptatibus porro!
         </p>
     
 
         <div class="pt-20">
             <div class="container px-32">
                <div class="flex ">
                     <div class="p-4 relative">
                         <h1 class="text-center text-xl mb-2">Hotel</h1>
                         <div class="w-10 h-1 bg-red-900 absolute left-1/2 " style="transform: translate(-50%);"></div>
                         <img src="{{ asset('images/hotel.jpg') }}" alt="" class="mt-6 transform hover:scale-110 motion-reduce:transform-none  " >
                     </div>
                     <div class="p-4 relative">
                         <h1 class="text-center text-xl mb-2">Party Palace</h1>
                         <div class="w-10 h-1 bg-red-900 absolute left-1/2 " style="transform: translate(-50%);"></div>
                         <img src="{{ asset('images/partypalace.jpg') }}" alt="" class="mt-6 transform hover:scale-110 motion-reduce:transform-none">
                     </div>
                     <div class="p-4 relative">
                         <h1 class="text-center text-xl mb-2">Sekuwa Corner</h1>
                         <div class="w-10 h-1 bg-red-900 absolute left-1/2 " style="transform: translate(-50%);"></div>
                         <img src="{{ asset('images/bbq.jpg') }}" alt="" class="mt-6 transform hover:scale-110 motion-reduce:transform-none">
                     </div>
                     <div class="p-4 relative">
                         <h1 class="text-center text-xl mb-2">Restuarant</h1>
                         <div class="w-10 h-1 bg-red-900 absolute left-1/2 " style="transform: translate(-50%);"></div>
                         <img src="{{ asset('images/restuarant.jpg') }}" alt="" class="mt-6 transform hover:scale-110 motion-reduce:transform-none">
                     </div>
                </div>
                 
             </div>
         </div>
     </div>
 
 
     <!-- About -->
     <div class="mt-20 w-full h-1/2 bg-fixed " style="background-image: url(../images/banner1.jpg);">
         <div class=" bg-black w-full h-1/2 bg-opacity-25">
            <div class="flex px-28 py-40 space-x-10">
                <div class="flex-1">
                     <div class="relative">
                         <div class="absolute bottom-0">
                             <h1 class="text-9xl text-red-900 font-black text-opacity-25">About</h1> 
                         </div>
 
                         <div class="absolute bottom-0 ">
                             <h1 class="text-5xl text-white">A Little <span class="text-5xl text-red-900 ">About Us</span></h1>
                         </div>
                     </div>
                     <p class="text-white mt-4">
                         Lorem ipsum dolor sit amet.
                     </p>
                     <p class="text-white mt-4 text-justify">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, iusto facilis labore explicabo omnis accusantium, aut dolor aperiam ratione molestias sunt eveniet sint autem repellendus! Voluptatum quia, accusantium vel veritatis aut eius natus eaque.
                          Quas suscipit explicabo consectetur omnis earum impedit minima nulla architecto voluptate, consequatur reiciendis beatae, ratione eos?
                     </p>
                    
                 </div>
              
                 <div class="flex-1">
                     <p class="text-white mt-4 text-justify"> 
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis facilis quidem facere, reprehenderit similique nisi tempora. Deserunt, 
                         iure error animi voluptates tenetur ex illum at necessitatibus recusandae quidem nihil suscipit.
                     </p>
                 </div>
            </div>
         </div>
     </div>
 
    <!-- Services  -->
    <div class="flex mt-44 pl-28">
         <div class="flex-1">
             <div class="relative">
                 <div class="absolute bottom-0">
                     <h1 class="text-6xl text-red-900 font-black text-opacity-25">CLIENTS</h1> 
                 </div>
     
                 <div class="absolute bottom-0 ">
                     <h1 class="text-3xl text-black">Top<span class="text-3xl text-red-900 ">Testimonials</span></h1>
                 </div>
             </div>
             <p class="text-gray-600">
                 Lorem ipsum dolor sit amet.
             </p>
             <p class="mt-4 text-gray-600 text-justify pr-10">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae modi esse laudantium. Exercitationem sequi labore fuga consequuntur cumque fugiat sint quod optio quae voluptatem incidunt,
                  nobis odio culpa. Consequatur natus dolorem fugit aliquid eum, eveniet culpa suscipit tempore asperiores, perspiciatis, sit adipisci aliquam itaque odio distinctio neque? Magnam, aliquid necessitatibus?
             </p>
         </div>
 
         <div class="flex-1">
             <div class="relative">
                 <div class="absolute bottom-0">
                     <h1 class="text-6xl text-red-900 font-black text-opacity-25">SERVICES</h1> 
                 </div>
     
                 <div class="absolute bottom-0 ">
                     <h1 class="text-3xl text-black">Our <span class="text-3xl text-red-900 ">Services</span></h1>
                 </div>
             </div>
             <p class="text-gray-600">
                 Lorem ipsum dolor sit amet.
             </p>
             <div>
                 <ul class="mt-4">
                     <li class="mt-2 text-gray-600">Free Wifi</li>
                     <li class="mt-2 text-gray-600">100 Guest Rooms</li>
                     <li class="mt-2 text-gray-600">5 Star Restaurant</li>
                     <li class="mt-2 text-gray-600">Cocktail Bar</li>
                     <li class="mt-2 text-gray-600">Infinity Pool</li>
                     <li class="mt-2 text-gray-600">24hour front desk Staff</li>
                     <li class="mt-2 text-gray-600">Exclusive Interior</li>
                     <li class="mt-2 text-gray-600">Custom Services</li>
                 </ul>
             </div>
         </div>
 
         <div class="flex-1">
             <div class="relative">
                 <div class="absolute bottom-0">
                     <h1 class="text-6xl text-red-900 font-black text-opacity-25">OFFERS</h1> 
                 </div>
     
                 <div class="absolute bottom-0 ">
                     <h1 class="text-3xl text-black">Special <span class="text-3xl text-red-900 ">Offers</span></h1>
                 </div>
             </div>
             <p class="text-gray-600">
                 Lorem ipsum dolor sit amet.
 
            </p>
             <img src="{{ asset('images/banner.jpg') }}" alt="" class="w-80 h-52 mt-8">
         </div>
 
    </div>
@endsection