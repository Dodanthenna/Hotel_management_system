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

            <h1 style="font-size: 40px; font-weight: bold; ">Message</h1>

            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>

                @foreach ($data as $data)
                <tbody>
                <tr>
                    <td scope="row">{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->message}}</td>

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
