<!DOCTYPE html>
<html>
  <head>

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

            <h1 style="font-size: 40px; font-weight: bold; ">Add Rooms</h1>

            <div>
                <form action="{{url('add_room')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form_div">
                        <label>Room Title</label>
                        <input type="text" name="title">
                    </div>

                    <div class="form_div">
                        <label>Description</label>
                        <textarea name="description"></textarea>
                    </div>

                    <div class="form_div">
                        <label>price</label>
                        <input type="number" name="price">
                    </div>

                    <div class="form_div">
                        <label>Room Type</label>
                        <select name="type">
                            <option selected value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select>
                    </div>

                    <div class="form_div">
                        <label>Free wifi</label>
                        <select name="wifi">
                            <option selected value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="form_div">
                        <label>Uplode Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="form_div">
                        <input type="submit" value="Add Room" class="btn btn-primary">
                    </div>

                </form>
            </div>


          </div>
        </div>
      </div>



        @include('admin.footer')

  </body>
</html>

