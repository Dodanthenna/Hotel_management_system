<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->

<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="title">

      </div>
    </div>

    <ul class="list-unstyled">

            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">Hotel Rooms </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{url('create_room')}}">Add Rooms</a></li>
                <li><a href="{{url('view_room')}}">View Rooms</a></li>
              </ul>
            </li>
            <li><a href="{{url('bookings')}}">Booking </a></li>
            <li><a href="{{url('view_gallary')}}">Gallary </a></li>
            <li><a href="{{url('all_message')}}">Message </a></li>

    </ul>
  </nav>
