<!DOCTYPE html>
<html>
  <head>

    <base href="/public">

    @include('admin.css')

    <style>
        label
        {
            display: inline-block;
            width: 200px;
        }

        .form_div
        {
            padding-top: 30px;

        }


    </style>

  </head>
  <body>

    @include('admin.header')


        @include('admin.sidebar')

      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1 style="font-size: 40px; font-weight: bold; ">Update Rooms</h1>

            <div>
                <form action="{{url('edit_room',$data->id)}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form_div">
                        <label>Room Title</label>
                        <input type="text" name="title" value="{{$data->room_title}}">
                    </div>

                    <div class="form_div">
                        <label>Description</label>
                        <textarea name="description">{{$data->description}}</textarea>
                    </div>

                    <div class="form_div">
                        <label>price</label>
                        <input type="number" name="price" value="{{$data->price}}">
                    </div>

                    <div class="form_div">
                        <label>Room Type</label>
                        <select name="type">
                            <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>
                            <option selected value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select>
                    </div>

                    <div class="form_div">
                        <label>Free wifi</label>
                        <select name="wifi">
                            <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>
                            <option selected value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="form_div">
                        <label>Current Image</label>
                        <img src="/room/{{$data->image}}" width="200">
                    </div>

                    <div class="form_div">
                        <label>Uplode Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="form_div">
                        <input type="submit" value="Update Room" class="btn btn-primary">
                    </div>

                </form>
            </div>


          </div>
        </div>
      </div>



        @include('admin.footer')

  </body>
</html>

