<!DOCTYPE html>
<html lang="en">
   <head>

    <base href="/public">

      @include('home.css')

    <style>
        label{
            display: inline-block;
            width: 200px;
        }
        input{
            width: 400px;
        }
    </style>

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

                      <h4>Price : {{$room->price}}$</h4>


                   </div>
                </div>
             </div>



             <div class="col-md-4">

                <h1>Book Room</h1>

                @if(session()->has('message'))

                {{session()->get('message')}}

                @endif

                @if($errors)
                @foreach ($errors->all() as $errors)

                <li style="color: red">
                    {{$errors}}
                </li>

                @endforeach

                @endif


                <form action="{{url('add_booking',$room->id)}}" method="Post">

                    @csrf

                <div>
                    <label>Name: </label>
                    <input type="text" name="name" id="name" @if(Auth::id()) value="{{Auth::user()->name}}" @endif>
                </div>

                <div>
                    <label>Email: </label>
                    <input type="text" name="email" id="email" @if(Auth::id()) value="{{Auth::user()->email}}" @endif>
                </div>

                <div>
                    <label>Phone: </label>
                    <input type="number" name="phone" id="phone" @if(Auth::id()) value="{{Auth::user()->phone}}" @endif>
                </div>

                <div>
                    <label>Start Date: </label>
                    <input type="date" name="startDate" id="startDate">
                </div>

                <div>
                    <label>End date: </label>
                    <input type="date" name="endDate" id="endDate">
                </div>

                <div style="padding-top: 25px">
                    @if (Route::has('login'))
                    @auth
                    <input type="submit" value="Book Room" class="btn btn-light" style="color: blue; font-size:20px; width: 200px; border-color: red;">

                    @else
                    <span style="color: #ff0909">Please log into your account!</span>

                    @endauth
                    @endif

                </div>

            </form>

             </div>

        </div>
        </div>
     </div>




      <!--  footer -->

        @include('home.footer')


        <script type="text/javascript">
        $(function(){
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if(month < 10)
                month = '0' + month.toString();

            if(day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);

        });
        </script>

   </body>
</html>

