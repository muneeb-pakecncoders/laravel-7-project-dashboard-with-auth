<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">Admin <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href=""><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							
							<li class="list-group-item">
								<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="feather icon-log-out m-r-5"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>GENERAL</label>
					</li>
					<li class="nav-item">
					    <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					
					<li class="nav-item pcoded-hasmenu">
					    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fa fa-coins"></i></span><span class="pcoded-mtext">Social Accounts</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="">facebook</a></li>
					        <li><a href="">Instagram</a></li>
					        <li><a href="">Twitter</a></li>
					    </ul>
					</li>
					<!-- <li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fa fa-file"></i></span><span class="pcoded-mtext">Files</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="" target="_blank">Upload File</a></li>
					        <li><a href="" target="_blank">Download File</a></li>
					    </ul>
					</li>
					<li class="nav-item">
					    <a href="" class="nav-link "><span class="pcoded-micon"><i class="fa fa-tag"></i></span><span class="pcoded-mtext">Tickets</span></a>
					</li> -->
					
				</ul>
			</div>
		</div>
	</nav>