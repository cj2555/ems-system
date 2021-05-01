 <div id="layoutSidenav">
     <div id="layoutSidenav_nav">
         <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
             <div class="sb-sidenav-menu">
                 <div class="nav">
                     <div class="sb-sidenav-menu-heading">Core</div>
                     <a class="nav-link" href="{{url('/')}}">
                         <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                         Dashboard
                     </a>
                     <div class="sb-sidenav-menu-heading">Interface</div>
                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                         <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         Departments
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="{{route('departments.create')}}">create departments</a>
                             <a class="nav-link" href="{{route('departments.index')}}">show departments</a>
                         </nav>
                     </div>

                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                         <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         roles
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="{{route('roles.create')}}">create role</a>
                             <a class="nav-link" href="{{route('roles.index')}}">show roles</a>
                         </nav>
                     </div>
                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                         <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         Users
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="{{route('users.create')}}">create user</a>
                             <a class="nav-link" href="{{route('users.index')}}">show users</a>
                         </nav>
                     </div>

                     @if (Auth::user()->role['id']==1)
                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#permission" aria-expanded="false" aria-controls="collapseLayouts">
                         <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         permission
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="permission" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="{{route('permission.create')}}">create permissions</a>
                             <a class="nav-link" href="{{route('permission.index')}}">show permissions</a>
                         </nav>
                     </div>
                     @endif

                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#leave" aria-expanded="false" aria-controls="collapseLayouts">
                         <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         Leave Request
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="leave" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             @if (Auth::user()->role['id']==1)
                             <a class="nav-link" href="{{route('leave.index')}}">see requests</a>
                             @else
                             <a class="nav-link" href="{{route('leave.create')}}">make request</a>
                             @endif
                         </nav>
                     </div>

                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                         Error
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="401.html">401 Page</a>
                             <a class="nav-link" href="404.html">404 Page</a>
                             <a class="nav-link" href="500.html">500 Page</a>
                         </nav>
                     </div>
         </nav>
     </div>
     <div class="sb-sidenav-menu-heading">Addons</div>
     <a class="nav-link" href="charts.html">
         <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
         Charts
     </a>
     <a class="nav-link" href="tables.html">
         <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
         Tables
     </a>
 </div>
 </div>
 <div class="sb-sidenav-footer">
     <div class="small">Logged in as:</div>
     Start Bootstrap
 </div>
 </nav>
 </div>