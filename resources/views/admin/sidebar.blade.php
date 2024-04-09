<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Orders
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('data_mobil') }}">
              <svg class="bi"><use xlink:href="#cart"/></svg>
              Product
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('customer') }}">
              <svg class="bi"><use xlink:href="#people"/></svg>
              Customers
            </a>
          </li> --}}
          <div class="p-2">
              <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
          </div>
        </ul>

      </div>
    </div>
  </div>