<!DOCTYPE html>
<html lang="en">
   <head>

    <base href="/public">

      @include('home.css')

    </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>

        @include('home.header')

      </header>
      <!-- end header inner -->
      <!-- end header -->

      <div  class="our_room">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>{{$room->room_title}}</h2>

                 </div>
              </div>
           </div>

           <div class="row">



            <div class="col-md-8">
                <div id="serv_hover"  class="room">
                   <div class="room_img">
                      <figure><img src="/room/{{$room->image}}" alt=""></figure>
                   </div>
                   <div class="bed_room">

                      <p style="padding: 10px">{{$room->description,100}}</p>

                      <h4>WIFI : {{$room->wifi}}</h4>

                      <h4>Room Type : {{$room->room_type}}</h4>

                      <h4>Price : {{$room->price}}</h4>


                   </div>
                </div>
             </div>


        </div>
        </div>
     </div>







      <!--  footer -->

        @include('home.footer')

   </body>
</html>

