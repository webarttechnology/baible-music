 <aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="nav-link pl-1 pr-1 leading-none ">
								<img src="{{ asset('assets/avtar.jpg') }}" alt="user-img" class="avatar-xl rounded-circle mb-1 mCS_img_loaded">
								<span class="pulse bg-success" aria-hidden="true"></span>
							</div>
							<div class="user-info">
								<h6 class=" mb-1 text-dark">Admin</h6>
								<span class="text-muted app-sidebar__user-name text-sm">{{ Session::get('email_id')}}</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('author/dashboard') }}"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Dashboard</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>
                        
						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('author/category') }}"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Category</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('author/order') }}"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Order</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>

						  
						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('author/company') }}"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Company Details</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>

					

						
						
						
						
						<!-- for organization -->
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">Songs</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{ URL::to('author/album') }}" class="slide-item">List </a></li>
								<li><a href="{{ URL::to('author/album/add') }}" class="slide-item">Add </a></li>
								
								<li></li>
							</ul>
						</li>

 					
					</ul>
				
 </aside>