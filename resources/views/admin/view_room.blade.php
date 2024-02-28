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

            <h1 style="font-size: 40px; font-weight: bold; ">Rooms</h1>

            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th scope="col">Room Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">WIFI</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Image</th>
                </tr>
                </thead>

                @foreach ($data as $data)
                <tbody>
                <tr>
                    <td scope="row">{{$data->room_title}}</td>
                    <td>{!! Str::limit($data->description,150)!!}</td>
                    <td>{{$data->price}}$</td>
                    <td>{{$data->wifi}}</td>
                    <td>{{$data->room_type}}</td>
                    <td>
                        <img src="room/{{$data->image}}" width="200px">
                    </td>
                    <td>
                        <a onclick="return confirm('Are you sure!')" href="{{url('room_delete',$data->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a href="{{url('room_update',$data->id)}}" class="btn btn-warning">Update</a>
                    </td>

                </tr>
                </tbody>
                @endforeach

            </table>

          </div>
        </div>
      </div>
        @include('admin.footer')

  </body>
</html>
