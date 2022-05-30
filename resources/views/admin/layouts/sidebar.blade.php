       <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
              <!-- Aplication Brand -->
              <div class="app-brand">
                <a href="/index.html">
                  <svg
                    class="brand-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid"
                    width="30"
                    height="33"
                    viewBox="0 0 30 33"
                  >
                    <g fill="none" fill-rule="evenodd">
                      <path
                        class="logo-fill-blue"
                        fill="#7DBCFF"
                        d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                      />
                      <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                  </svg>
                  <span class="brand-name">Sleek Dashboard</span>
                </a>
              </div>
              <!-- begin sidebar scrollbar -->
              <div class="sidebar-scrollbar">
  
                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                  
  
                  
                    <li  class="has-sub active expand" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                        aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse show"  id="dashboard"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                          
                          
                            
                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('home') }}">
                                  <span class="nav-text">Home</span>
                                  
                                </a>
                              </li>
                            
            
                          
                        </div>
                      </ul>
                    </li>
                  
  
                  
  
                  
                    <li  class="has-sub active expand" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#banner"
                        aria-expanded="false" aria-controls="banner">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Banner</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse show"  id="banner"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                          
                          
                            
                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('banner.index') }}">
                                  <span class="nav-text">All banners</span>
                                  
                                </a>
                              </li>

                              <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('banner.create') }}">
                                  <span class="nav-text">Create banners</span>
                                  
                                </a>
                              </li>
                            
            
                          
                        </div>
                      </ul>
                    </li>
                  
  

                  
                    <li  class="has-sub" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                        aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Products</span> <b class="caret"></b>
                      </a>
                     
                    </li>
                  
  
                  
  
                  
                    <li  class="has-sub" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                        aria-expanded="false" aria-controls="documentation">
                        <i class="mdi mdi-book-open-page-variant"></i>
                        <span class="nav-text">Category</span> <b class="caret"></b>
                      </a>
                     
                    </li>

                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                          aria-expanded="false" aria-controls="pages">
                          <i class="mdi mdi-image-filter-none"></i>
                          <span class="nav-text">Cart Managment</span> <b class="caret"></b>
                        </a>
                       
                      </li>

                      <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                          aria-expanded="false" aria-controls="pages">
                          <i class="mdi mdi-image-filter-none"></i>
                          <span class="nav-text">Order Managment</span> <b class="caret"></b>
                        </a>
                       
                      </li>

                      <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                          aria-expanded="false" aria-controls="pages">
                          <i class="mdi mdi-image-filter-none"></i>
                          <span class="nav-text">Post Category</span> <b class="caret"></b>
                        </a>
                       
                      </li>

                      <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                          aria-expanded="false" aria-controls="pages">
                          <i class="mdi mdi-image-filter-none"></i>
                          <span class="nav-text">Post Tag</span> <b class="caret"></b>
                        </a>
                       
                      </li>

                      <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                          aria-expanded="false" aria-controls="pages">
                          <i class="mdi mdi-image-filter-none"></i>
                          <span class="nav-text">Post Managment</span> <b class="caret"></b>
                        </a>
                       
                      </li>

                      <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                          aria-expanded="false" aria-controls="pages">
                          <i class="mdi mdi-image-filter-none"></i>
                          <span class="nav-text">Review Managment</span> <b class="caret"></b>
                        </a>
                       
                      </li>
                  
  
                  
                </ul>
  
              </div>
  
              <hr class="separator" />
  
              <div class="sidebar-footer">
                <div class="sidebar-footer-content">
                  <h6 class="text-uppercase">
                    Active users <span class="float-right">40%</span>
                  </h6>
                  <div class="progress progress-xs">
                    <div
                      class="progress-bar active"
                      style="width: 40%;"
                      role="progressbar"
                    ></div>
                  </div>
                  <h6 class="text-uppercase">
                    Views <span class="float-right">65%</span>
                  </h6>
                  <div class="progress progress-xs">
                    <div
                      class="progress-bar progress-bar-warning"
                      style="width: 65%;"
                      role="progressbar"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </aside>