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

            <h1 style="font-size: 40px; font-weight: bold; ">Bookings </h1>

            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th scope="col">Room ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Arrival Date</th>
                    <th scope="col">Leaving Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Room Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>

                @foreach ($data as $data)
                <tbody>
                <tr>
                    <td scope="row">{{$data->room_id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->start_date}}</td>
                    <td>{{$data->end_date}}</td>
                    <td>
                        @if($data->status == 'approve')
                        <span style="color: skyblue">Approved</span>

                        @endif

                        @if($data->status == 'rejected')
                        <span style="color: red">Rejected</span>

                        @endif

                        @if($data->status == 'waiting')
                        <span style="color: yellow">Waiting</span>

                        @endif

                    </td>
                    <td>{{$data->room->room_title}}</td>
                    <td>{{$data->room->price}}</td>
                    {{-- <td><img style="width: 200px" src="/room/{{$data->room->image}}" alt=""></td> --}}

                    <td><a onclick="return confirm('Are you sure!')" class="btn btn-danger" href="{{url('delete_bookings',$data->id)}}">Delete</a></td>

                    <td><a class="btn btn-success" href="{{url('approve_book',$data->id)}}">Approve</a></td>

                    <td><a class="btn btn-warning" href="{{url('reject_book',$data->id)}}">Reject</a></td>

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
