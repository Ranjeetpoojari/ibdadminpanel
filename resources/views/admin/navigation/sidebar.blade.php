<nav class="sidebar sidebar-offcanvas position-fixed" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/dashboard')}}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/blog')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Our Blogs</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/vender_profile')}}">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Vender Profile</span>
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#campaign" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Setting</span>
          <i class="menu-arrow"></i> 
        </a>
        <div class="collapse" id="campaign">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/categories')}}">
                  <span class="menu-title">Category</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/subcategories')}}">
                <span class="menu-title">SubCategory</span>
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/subsubcategories')}}">
                <span class="menu-title">SubsubCategory</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
  
      
    
     
   

      

      

      
    </ul>
  </nav>