<nav class="sidebar sidebar-offcanvas mt-2" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">          
          <div class="text-wrapper">
            <p class="profile-name">Main menu <br/></p>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" class="collapsed" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
          <i class="menu-icon typcn typcn-coffee"></i>
          <span class="menu-title">Hero Section</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-product">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.hero') }}">Manage Hero info</a>
            </li>
          </ul>
        </div>
      </li>
      </li>
      
      
      <li>
        <a class="nav-link" href="#ui-division">
          <form class="form-inline" action="{{ route('admin.logout') }}" method="post">
          @csrf
          <input type="submit" value="Logout Now" class="btn btn-danger">

          </form>
        </a>
      </li>

    </ul>
  </nav>