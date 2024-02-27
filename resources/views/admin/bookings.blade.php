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
                    <th>Room ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Arrival Date</th>
                    <th>Leaving Date</th>
                    <th>Status</th>
                    <th>Room Title</th>
                    <th>Price</th>
                    <th>Image</th>

                </tr>

                @foreach ($data as $data)

                <tr>
                    <td>{{$data->room_id}}</td>
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
                    <td><img style="width: 200px" src="/room/{{$data->room->image}}" alt=""></td>

                    <td><a onclick="return confirm('Are you sure!')" class="btn btn-danger" href="{{url('delete_bookings',$data->id)}}">Delete</a></td>

                    <td><a class="btn btn-success" href="{{url('approve_book',$data->id)}}">Approve</a></td>

                    <td><a class="btn btn-warning" href="{{url('reject_book',$data->id)}}">Reject</a></td>




                </tr>

                @endforeach

            </table>



        </div>
        </div>
    </div>

        @include('admin.footer')

  </body>
</html>
