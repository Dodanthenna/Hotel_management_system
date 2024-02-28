<!DOCTYPE html>
<html>
  <head>

    @include('admin.css')

  </head>
  <body>

    @include('admin.header')


        @include('admin.sidebar')

      <!-- Sidebar Navigation end-->


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1 style="font-size: 40px; font-weight: bold; ">Gellary</h1>


            <div class="row">
                @foreach ($gallary as $gallary)

                <div style="padding-bottom: 20px" class="col-md-4">
                    <center>
                        <img src="/gallary/{{$gallary->image}}" style="height: 200px">
                        <div style="padding-top: 10px">
                            <a class="btn btn-danger" href="{{url('delete_gallary',$gallary->id)}}">Delete image</a>
                        </div>
                    </center>
                </div>

                @endforeach
            </div>



            <form action="{{url('upload_galary')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding-top: 40px">
                    <label style="padding-right: 30px">Uplode Image: </label>
                    <input type="file" name="image">
                </div>

                <div style="padding-top: 40px">
                    <input class="btn btn-primary" type="submit" value="Uplode Image">
                </div>

            </form>




        </div>
        </div>
      </div>


        @include('admin.footer')

  </body>
</html>

