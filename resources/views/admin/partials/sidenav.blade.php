<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <span class="mb-0 text-sm  font-weight-bold">EduCenter</span>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('admin')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('scholarship.create')}}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('allBook')}}">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Books</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.Note.create')}}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Notice</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.scholarshipp.create')}}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Scholarship_Information</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Donor Details</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Donor </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.logout')}}">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Sign Out</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->

          <!-- Navigation -->

        </div>
      </div>
    </div>
  </nav>
