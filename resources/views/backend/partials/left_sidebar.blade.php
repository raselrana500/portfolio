<nav class="sidebar sidebar-offcanvas mt-2" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
      <img src="{{ asset('public/admin/assets/images/favico.ico') }}" width="100px"alt="">
        <a href="{{ route('admin.index') }}" class="nav-link">          
          <div class="text-wrapper">
            <p class="profile-name">Main Menu<br/></p>
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

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" class="collapsed" href="#ui-skill" aria-expanded="false" aria-controls="ui-skill">
            <i class="menu-icon typcn typcn-coffee"></i>
            <span class="menu-title">Skill Section</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-skill">
            <ul class="nav flex-column sub-menu">            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pages.skill.new') }}">Add New Skill</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.skill') }}">Manage Skill info</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" class="collapsed" href="#ui-project" aria-expanded="false" aria-controls="ui-project">
            <i class="menu-icon typcn typcn-coffee"></i>
            <span class="menu-title">Project Section</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-project">
            <ul class="nav flex-column sub-menu">            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pages.project.new') }}">Add New project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.project.manage') }}">Manage Project info</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" class="collapsed" href="#ui-contact" aria-expanded="false" aria-controls="ui-contact">
            <i class="menu-icon typcn typcn-coffee"></i>
            <span class="menu-title">Contact</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-contact">
            <ul class="nav flex-column sub-menu">            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.contact.manage') }}">Manage Contact</a>
              </li>
            </ul>
          </div>
        </li>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" class="collapsed" href="#ui-footer" aria-expanded="false" aria-controls="ui-footer">
            <i class="menu-icon typcn typcn-coffee"></i>
            <span class="menu-title">Footer</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-footer">
            <ul class="nav flex-column sub-menu">            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.footer') }}">Manage footer text</a>
              </li>
            </ul>
          </div>
        </li>


        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" class="collapsed" href="#ui-social" aria-expanded="false" aria-controls="ui-social">
            <i class="menu-icon typcn typcn-coffee"></i>
            <span class="menu-title">Social Link</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-social">
            <ul class="nav flex-column sub-menu">   
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.social.add') }}">Add New</a>
              </li>         
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.social') }}">Manage</a>
              </li>
            </ul>
          </div>
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