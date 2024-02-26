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

            <table class="">
                <tr>
                    <th>Room Title</th>
                    <th>Description</th>
                    <th>Orice</th>
                    <th>WIFI</th>
                    <th>Room Type</th>
                    <th>Image</th>
                </tr>
                @foreach ($data as $data)

                <tr>
                    <td>{{$data->room_title}}</td>
                    <td>{!! Str::limit($data->description,150)!!}</td>
                    <td>{{$data->price}}$</td>
                    <td>{{$data->wifi}}</td>
                    <td>{{$data->room_type}}</td>
                    <td>
                        <img src="room/{{$data->image}}" width="200px">
                    </td>
                </tr>

                @endforeach


            </table>

          </div>
        </div>
      </div>
        @include('admin.footer')

  </body>
</html>
