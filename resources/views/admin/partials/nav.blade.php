<div class="sidebar">
    <h2><i class="bi bi-calendar-check"></i> Admin Panel</h2>
    <ul>
        <li><a href="{{route('admin.dashboard')}}"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
        <li><a href="{{route('admin.manageBookings')}}"><i class="bi bi-calendar-event"></i> Manage Bookings</a></li>
        <li><a href="{{route('admin.manageFields')}}"><i class="bi bi-geo-alt"></i> Manage Fields</a></li>
        <li><a href={{route('admin.manageUsers')}}><i class="bi bi-people"></i> Manage Users</a></li>
        <li><a href="{{route('admin.payments')}}"><i class="bi bi-cash-stack"></i> Payments</a></li>
        <hr>
        <li><a href="{{route('admin.analytics')}}"><i class="bi bi-graph-up"></i> Analytics</a></li>
        <li><a href="{{route('admin.settings')}}"><i class="bi bi-gear"></i> Settings</a></li>
    </ul>


    <!-- رابط لتسجيل الخروج -->
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-link">Log out</button>
    </form>

</div>
