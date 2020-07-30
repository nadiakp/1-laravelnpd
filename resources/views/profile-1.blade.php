@extends('layouts.app')

@section('content')
<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
	    <ul class="side-menu-list">
	        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Dashboard</span>
	            </span>
	            <ul>
	                <li><a href="{{ route('dashboard') }}"><span class="lbl">Default</span><span class="label label-custom label-pill label-danger">new</span></a></li>
	                <li><a href="{{ route('dashboard-top-menu') }}"><span class="lbl">Top menu</span></a></li>
	                <li><a href="{{ route('side-menu-compact-full') }}"><span class="lbl">Compact menu</span></a></li>
	                <li><a href="{{ route('dashboard-addl-menu') }}"><span class="lbl">Submenu</span></a></li>
	                <li><a href="#"><span class="lbl">Menu with avatar</span></a></li>
	                <li><a href="#"><span class="lbl">Compact menu with avatar</span></a></li>
	                <li><a href="#"><span class="lbl">Dark menu</span></a></li>
	                <li><a href="#l"><span class="lbl">Blue dark menu</span></a></li>
	                <li><a href="#"><span class="lbl">Green dark menu</span></a></li>
	                <li><a href="#"><span class="lbl">Green compact dark menu</span></a></li>
	                <li><a href="#"><span class="lbl">Ultramarine dark menu</span></a></li>
	                <li><a href="#"><span class="lbl">Asphalt top menu</span></a></li>
	                <li><a href="#"><span class="lbl">Big menu</span></a></li>
	            </ul>
	        </li>
	        <li class="brown with-sub">
	            <span>
	                <i class="font-icon glyphicon glyphicon-tint"></i>
	                <span class="lbl">Skins</span>
	            </span>
	            <ul>
	                <li><a href="#"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="#"><span class="lbl">Madison Caribbean</span></a></li>
	                <li><a href="#"><span class="lbl">Caesium Dark Caribbean</span></a></li>
	                <li><a href="#"><span class="lbl">Tin</span></a></li>
	                <li><a href="#"><span class="lbl">Litmus Blue</span></a></li>
	                <li><a href="#"><span class="lbl">Rebecca Purple</span></a></li>
	                <li><a href="#"><span class="lbl">Picton Blue</span></a></li>
	                <li><a href="#"><span class="lbl">Picton Blue White Ebony</span></a></li>
	            </ul>
	        </li>
	        <li class="purple with-sub">
	            <span>
	                <i class="font-icon font-icon-comments active"></i>
	                <span class="lbl">Messages</span>
	            </span>
	            <ul>
	                <li><a href="{{ route('messenger') }}"><span class="lbl">Messenger</span></a></li>
	                <li><a href="{{ route('messages') }}"><span class="lbl">Messages</span><span class="label label-custom label-pill label-danger">8</span></a></li>
	                <li><a href="#"><span class="lbl">Write Message</span></a></li>
	                <li><a href="#"><span class="lbl">Select User</span></a></li>
	            </ul>
	        </li>
	        <li class="red">
	            <a href="{{ route('mail') }}">
	                <i class="font-icon glyphicon glyphicon-send"></i>
	                <span class="lbl">Mail</span>
	            </a>
	        </li>
	        <li class="gold with-sub">
	            <span>
	                <i class="font-icon font-icon-edit"></i>
	                <span class="lbl">Forms</span>
	            </span>
	            <ul>
	                <li><a href="#"><span class="lbl">Basic Inputs</span></a></li>
	                <li><a href="#"><span class="lbl">Buttons</span></a></li>
	                <li><a href="#"><span class="lbl">Select &amp; Tags</span></a></li>
	                <li><a href="#"><span class="lbl">Checkboxes &amp; Radios</span></a></li>
	                <li><a href="#"><span class="lbl">Validation</span></a></li>
	                <li><a href="#"><span class="lbl">Typeahead</span></a></li>
	                <li><a href="#"><span class="lbl">Steps</span></a></li>
	                <li><a href="#"><span class="lbl">Input Mask</span></a></li>
	                <li><a href="#"><span class="lbl">Extras</span></a></li>
	            </ul>
	        </li>
	        <li class="blue-dirty">
	            <a href="{{ route('tables') }}">
	                <span class="glyphicon glyphicon-th"></span>
	                <span class="lbl">Tables</span>
	            </a>
	        </li>
	        <li class="magenta with-sub">
	            <span>
	                <span class="glyphicon glyphicon-list-alt"></span>
	                <span class="lbl">Datatables</span>
	            </span>
	            <ul>
	                <a href="#"><span class="lbl">Datatables.net</span></a></li>
	                <a href="#"><span class="lbl">Bootstrap Table</span></a></li>
	
	                <!--<li><a href="datatables.html"><span class="lbl">Default</span></a></li>
	                <li><a href="datatables-fixed-columns.html"><span class="lbl">Fixed Columns</span></a></li>
	                <li><a href="datatables-reorder-rows.html"><span class="lbl">Reorder Rows</span></a></li>
	                <li><a href="datatables-reorder-columns.html"><span class="lbl">Reorder Columns</span></a></li>
	                <li><a href="datatables-resize-columns.html"><span class="lbl">Resize Columns</span></a></li>
	                <li><a href="datatables-mobile.html"><span class="lbl">Mobile</span></a></li>
	                <li><a href="datatables-filter-control.html"><span class="lbl">Filters</span></a></li>-->
	            </ul>
	        </li>
	        <li class="green with-sub">
	            <span>
	                <i class="font-icon font-icon-widget"></i>
	                <span class="lbl">Components</span>
	            </span>
	            <ul>
	                <li><a href="#"><span class="lbl">Widgets</span></a></li>
	                <li><a href="#"><span class="lbl">Bootstrap UI</span></a></li>
	                <li><a href="#"><span class="lbl">Date and Time Pickers</span></a></li>
	                <li><a href="#"><span class="lbl">Multi Picker</span></a></li>
	                <li><a href="#"><span class="lbl">Form Steps</span></a></li>
	                <li><a href="#"><span class="lbl">Upload</span></a></li>
	                <li><a href="#"><span class="lbl">SweetAlert</span></a></li>
	                <li><a href="#"><span class="lbl">Tabs</span></a></li>
	                <li><a href="#"><span class="lbl">Panels</span></a></li>
	                <li><a href="#"><span class="lbl">Notifications</span></a></li>
	                <li><a href="#"><span class="lbl">Sliders</span></a></li>
	                <li><a href="#"><span class="lbl">Editors</span></a></li>
	                <li><a href="#"><span class="lbl">Nestable</span></a></li>
	                <li><a href="#"><span class="lbl">BlockUI</span></a></li>
	                <li><a href="#"><span class="lbl">Alerts</span></a></li>
	                <li><a href="#"><span class="lbl">Players</span></a></li>
	            </ul>
	        </li>
	        <li class="pink-red">
				<a href="{{ route('activity') }}">
	                <i class="font-icon font-icon-zigzag"></i>
	                <span class="lbl">Activity</span>
	            </a>
	        </li>
	        <li class="blue with-sub">
	            <span>
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">Profile</span>
	            </span>
	            <ul>
	                <li><a href="{{ route('profile-1') }}"><span class="lbl">Version 1</span></a></li>
	                <li><a href="{{ route('profile-2') }}"><span class="lbl">Version 2</span></a></li>
	            </ul>
	        </li>
	        <li class="orange-red with-sub">
	            <span>
	                <i class="font-icon font-icon-help"></i>
	                <span class="lbl">Support</span>
	            </span>
	            <ul>
	                <li><a href="documentation.html"><span class="lbl">Docs (example)</span></a></li>
	                <li><a href="faq.html"><span class="lbl">FAQ Simple</span></a></li>
	                <li><a href="faq-search.html"><span class="lbl">FAQ Search</span></a></li>
	            </ul>
	        </li>
	        <li class="red">
	            <a href="contacts.html" class="label-right">
	                <i class="font-icon font-icon-contacts"></i>
	                <span class="lbl">Contacts</span>
	                <span class="label label-custom label-pill label-danger">35</span>
	            </a>
	        </li>
	        <li class="magenta opened">
	            <a href="scheduler.html">
	                <i class="font-icon font-icon-calend"></i>
	                <span class="lbl">Calendar</span>
	            </a>
	        </li>
	        <li class="grey with-sub">
	            <span>
	                <span class="glyphicon glyphicon-duplicate"></span>
	                <span class="lbl">Pages</span>
	            </span>
	            <ul>
	                <li><a href="email_templates.html"><span class="lbl">Email Templates</span></a></li>
	                <li><a href="blank.html"><span class="lbl">Blank</span></a></li>
	                <li><a href="empty.html"><span class="lbl">Empty List</span></a></li>
	                <li><a href="prices.html"><span class="lbl">Prices</span></a></li>
	                <li><a href="typography.html"><span class="lbl">Typography</span></a></li>
	                <li><a href="sign-in.html"><span class="lbl">Login</span></a></li>
	                <li><a href="sign-up.html"><span class="lbl">Register</span></a></li>
	                <li><a href="reset-password.html"><span class="lbl">Reset Password</span></a></li>
	                <li><a href="new-password.html"><span class="lbl">New Password</span></a></li>
	                <li><a href="error-404.html"><span class="lbl">Error 404</span></a></li>
	                <li><a href="error-500.html"><span class="lbl">Error 500</span></a></li>
	                <li><a href="cards.html"><span class="lbl">Cards</span></a></li>
	                <li><a href="avatars.html"><span class="lbl">Avatars</span></a></li>
	                <li><a href="ribbons.html"><span class="lbl">Ribbons</span></a></li>
	                <li><a href="icons-startui.html"><span class="lbl">Icons</span></a></li>
	                <li><a href="invoice.html"><span class="lbl">Invoice</span></a></li>
	                <li><a href="helpers.html"><span class="lbl">Helpers</span></a></li>
	            </ul>
	        </li>
	        <li class="blue-dirty">
	            <a href="{{ route('tasks') }}">
	                <i class="font-icon font-icon-notebook"></i>
	                <span class="lbl">Tasks</span>
	            </a>
	        </li>
	        <li class="aquamarine">
	            <a href="{{ route('contacts-page') }}">
	                <i class="font-icon font-icon-mail"></i>
	                <span class="lbl">Contact form</span>
	            </a>
	        </li>
	        <li class="blue">
	            <a href="files.html">
	                <i class="font-icon glyphicon glyphicon-paperclip"></i>
	                <span class="lbl">File Manager</span>
	            </a>
	        </li>
	        <li class="gold">
	            <a href="gallery.html">
	                <i class="font-icon font-icon-picture-2"></i>
	                <span class="lbl">Gallery</span>
	            </a>
	        </li>
	        <li class="red">
	            <a href="project.html">
	                <i class="font-icon font-icon-case-2"></i>
	                <span class="lbl">Project</span>
	            </a>
	        </li>
	        <li class="brown with-sub">
	            <span>
	                <span class="font-icon font-icon-chart"></span>
	                <span class="lbl">Charts</span>
	            </span>
	            <ul>
	                <li><a href="charts-c3js.html"><span class="lbl">C3.js</span></a></li>
	                <li><a href="charts-peity.html"><span class="lbl">Peity</span></a></li>
	                <li><a href="charts-plottable.html"><span class="lbl">Plottable.js</span></a></li>
	            </ul>
	        </li>
	        <li class="grey with-sub">
	            <span>
	                <span class="font-icon font-icon-burger"></span>
	                <span class="lbl">Nested Menu</span>
	            </span>
	            <ul>
	                <li><a href="#"><span class="lbl">Level 1</span></a></li>
	                <li><a href="#"><span class="lbl">Level 1</span></a></li>
	                <li class="with-sub">
	                    <span>
	                        <span class="lbl">Level 2</span>
	                    </span>
	                    <ul>
	                        <li><a href="#"><span class="lbl">Level 2</span></a></li>
	                        <li><a href="#"><span class="lbl">Level 2</span></a></li>
	                        <li class="with-sub">
	                            <span>
	                                <span class="lbl">Level 3</span>
	                            </span>
	                            <ul>
	                                <li><a href="#"><span class="lbl">Level 3</span></a></li>
	                                <li><a href="#"><span class="lbl">Level 3</span></a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                </li>
	            </ul>
	        </li>
	    </ul>
	
	    <section>
	        <header class="side-menu-title">Tags</header>
	        <ul class="side-menu-list">
	            <li>
	                <a href="#">
	                    <i class="tag-color green"></i>
	                    <span class="lbl">Website</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color grey-blue"></i>
	                    <span class="lbl">Bugs/Errors</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color red"></i>
	                    <span class="lbl">General Problem</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color pink"></i>
	                    <span class="lbl">Questions</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color orange"></i>
	                    <span class="lbl">Ideas</span>
	                </a>
	            </li>
	        </ul>
	    </section>
	</nav><!--.side-menu-->
<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-lg-pull-6 col-md-6 col-sm-6">
					<section class="box-typical">
						<div class="profile-card">
							<div class="profile-card-photo">
								<img src="{{ asset('build/img/photo-220-1.jpg') }}" alt=""/>
							</div>
							<div class="profile-card-name">Sarah Sanchez</div>
							<div class="profile-card-status">Company Founder</div>
							<div class="profile-card-location">Greater Seattle Area</div>
							<button type="button" class="btn btn-rounded">Follow</button>
							<div class="btn-group">
								<button type="button"
										class="btn btn-rounded btn-primary-outline dropdown-toggle"
										data-toggle="dropdown"
										aria-haspopup="true"
										aria-expanded="false">
									Connect
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
									<a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
								</div>
							</div>
						</div><!--.profile-card-->

						<div class="profile-statistic tbl">
							<div class="tbl-row">
								<div class="tbl-cell">
									<b>200</b>
									Connections
								</div>
								<div class="tbl-cell">
									<b>1.9M</b>
									Followers
								</div>
							</div>
						</div>

						<ul class="profile-links-list">
							<li class="nowrap">
								<i class="font-icon font-icon-earth-bordered"></i>
								<a href="#">example.com</a>
							</li>
							<li class="nowrap">
								<i class="font-icon font-icon-fb-fill"></i>
								<a href="#">facebook.com/example</a>
							</li>
							<li class="nowrap">
								<i class="font-icon font-icon-vk-fill"></i>
								<a href="#">vk.com/example</a>
							</li>
							<li class="nowrap">
								<i class="font-icon font-icon-in-fill"></i>
								<a href="#">linked.in/example</a>
							</li>
							<li class="nowrap">
								<i class="font-icon font-icon-tw-fill"></i>
								<a href="#">twitter.com/example</a>
							</li>
							<li class="divider"></li>
							<li>
								<i class="font-icon font-icon-pdf-fill"></i>
								<a href="#">Export page as PDF</a>
							</li>
						</ul>
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">
							Friends
							&nbsp;
							<a href="#" class="full-count">268</a>
						</header>
						<div class="friends-list">
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name status-online"><a href="#">Dan Cederholm</a></p>
											<p class="user-card-row-location">New York</p>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Oykun Yilmaz</a></p>
											<p class="user-card-row-location">Los Angeles</p>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Bill S Kenney</a></p>
											<p class="user-card-row-location">Cardiff</p>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-4.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
											<p class="user-card-row-location">Dusseldorf</p>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Dan Cederholm</a></p>
											<p class="user-card-row-location">New York</p>
										</div>
									</div>
								</div>
							</article>
						</div>
					</section><!--.box-typical-->
				</div><!--.col- -->

				<div class="col-lg-6 col-lg-push-3 col-md-12">
					<form class="box-typical">
						<input type="text" class="write-something" placeholder="Write Something..."/>
						<div class="box-typical-footer">
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<button type="button" class="btn-icon">
											<i class="font-icon font-icon-earth"></i>
										</button>
										<button type="button" class="btn-icon">
											<i class="font-icon font-icon-picture"></i>
										</button>
										<button type="button" class="btn-icon">
											<i class="font-icon font-icon-calend"></i>
										</button>
										<button type="button" class="btn-icon">
											<i class="font-icon font-icon-video-fill"></i>
										</button>
									</div>
									<div class="tbl-cell tbl-cell-action">
										<button type="submit" class="btn btn-rounded">Send</button>
									</div>
								</div>
							</div>
						</div>
					</form><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">
							Posts
							<div class="slider-arrs">
								<button type="button" class="posts-slider-prev">
									<i class="font-icon font-icon-arrow-left"></i>
								</button>
								<button type="button" class="posts-slider-next">
									<i class="font-icon font-icon-arrow-right"></i>
								</button>
							</div>
						</header>
						<div class="posts-slider">
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="{{ asset('build/img/post-1.jpeg') }}" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">3 Myths That Confuse the D Myths That Confuse the D Myths That Confuse the D</a>
									</div>
									<div class="post-announce-date">Februrary 19, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="{{ asset('build/img/post-2.jpg') }}" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">How Much Do We Spend on How Much Do We Spend on How Much Do We Spend on </a>
									</div>
									<div class="post-announce-date">January 21, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="{{ asset('build/img/post-3.jpeg') }}" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">Good News You Might Have Good News You Might Have Good News You Might Have </a>
									</div>
									<div class="post-announce-date">December 30, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="{{ asset('build/img/post-1.jpeg') }}" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">3 Myths That Confuse the D Myths That Confuse the D Myths That Confuse the D</a>
									</div>
									<div class="post-announce-date">Februrary 19, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="{{ asset('build/img/post-2.jpg') }}" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">How Much Do We Spend on How Much Do We Spend on How Much Do We Spend on </a>
									</div>
									<div class="post-announce-date">January 21, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
							<div class="slide">
								<article class="post-announce">
									<div class="post-announce-pic">
										<a href="#">
											<img src="{{ asset('build/img/post-3.jpeg') }}" alt="">
										</a>
									</div>
									<div class="post-announce-title">
										<a href="#">Good News You Might Have Good News You Might Have Good News You Might Have </a>
									</div>
									<div class="post-announce-date">December 30, 2016</div>
									<ul class="post-announce-meta">
										<li>
											<i class="font-icon font-icon-eye"></i>
											18
										</li>
										<li>
											<i class="font-icon font-icon-heart"></i>
											5K
										</li>
										<li>
											<i class="font-icon font-icon-comment"></i>
											3K
										</li>
									</ul>
								</article>
							</div><!--.slide-->
						</div><!--.posts-slider-->
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">Background</header>
						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-notebook-bird"></i>
								Summary
							</header>
							<div class="text-block text-block-typical">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
							</div>
						</article><!--.profile-info-item-->

						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-case"></i>
								Experience
							</header>
							<ul class="exp-timeline">
								<li class="exp-timeline-item">
									<div class="dot"></div>
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<div class="exp-timeline-range">2000 President</div>
												<div class="exp-timeline-status">Co-founder, Chairman</div>
												<div class="exp-timeline-location"><a href="#">Company</a></div>
											</div>
											<div class="tbl-cell tbl-cell-logo">
												<img src="{{ asset('build/img/logo-2.png') }}" alt="">
											</div>
										</div>
									</div>
								</li>
								<li class="exp-timeline-item">
									<div class="dot"></div>
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<div class="exp-timeline-range">1992–1999</div>
												<div class="exp-timeline-status">Senior Developer</div>
												<div class="exp-timeline-location"><a href="#">YouTube</a></div>
											</div>
											<div class="tbl-cell tbl-cell-logo">
												<img src="{{ asset('build/img/logo-2.png') }}" alt="">
											</div>
										</div>
									</div>
								</li>
								<li class="exp-timeline-item">
									<div class="dot"></div>
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<div class="exp-timeline-range">2000 President</div>
												<div class="exp-timeline-status">Co-founder, Chairman</div>
												<div class="exp-timeline-location"><a href="#">Company</a></div>
											</div>
											<div class="tbl-cell tbl-cell-logo">
												<img src="{{ asset('build/img/logo-2.png') }}" alt="">
											</div>
										</div>
									</div>
								</li>
							</ul>
						</article><!--.profile-info-item-->

						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-award"></i>
								Edication
							</header>
							<ul class="exp-timeline">
								<li class="exp-timeline-item">
									<div class="dot"></div>
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<div class="exp-timeline-range">1973 – 1975</div>
												<div class="exp-timeline-status">Harvard University</div>
												<div class="exp-timeline-location"><a href="#">BS Computer Science</a></div>
											</div>
											<div class="tbl-cell tbl-cell-logo">
												<img src="{{ asset('build/img/logo-2.png') }}" alt="">
											</div>
										</div>
									</div>
								</li>
								<li class="exp-timeline-item">
									<div class="dot"></div>
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<div class="exp-timeline-range">1960 – 1973</div>
												<div class="exp-timeline-status">Lakeside Scool, Seattle</div>
											</div>
											<div class="tbl-cell tbl-cell-logo">
												<img src="{{ asset('build/img/logo-2.png') }}" alt="">
											</div>
										</div>
									</div>
								</li>
							</ul>
						</article><!--.profile-info-item-->

						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-lamp"></i>
								Skills
							</header>

							<section class="skill-item tbl">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-num">
										<div class="skill-circle skill-circle-num">74</div>
									</div>
									<div class="tbl-cell tbl-cell-txt">Social Media Marketing</div>
									<div class="tbl-cell tbl-cell-users">
										<img class="skill-user-photo" src="{{ asset('build/img/avatar-1-64.png') }}" alt=""/>
										<img class="skill-user-photo" src="{{ asset('build/img/photo-64-3.jpg') }}" alt=""/>
										<img class="skill-user-photo" src="{{ asset('build/img/photo-64-4.jpg') }}" alt=""/>
										<div class="skill-circle skill-circle-users">+74</div>
									</div>
								</div>
							</section><!--.skill-item-->

							<section class="skill-item tbl">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-num">
										<div class="skill-circle skill-circle-num">67</div>
									</div>
									<div class="tbl-cell tbl-cell-txt">Web Development</div>
									<div class="tbl-cell tbl-cell-users">
										<img class="skill-user-photo" src="{{ asset('build/img/avatar-2-64.png') }}" alt=""/>
										<img class="skill-user-photo" src="{{ asset('build/img/photo-64-2.jpg') }}" alt=""/>
										<img class="skill-user-photo" src="{{ asset('build/img/photo-64-3.jpg') }}" alt=""/>
										<div class="skill-circle skill-circle-users">+82</div>
									</div>
								</div>
							</section><!--.skill-item-->

							<section class="skill-item tbl">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-num">
										<div class="skill-circle skill-circle-num">25</div>
									</div>
									<div class="tbl-cell tbl-cell-txt">Search Engine Optimization</div>
									<div class="tbl-cell tbl-cell-users">
										<img class="skill-user-photo" src="{{ asset('build/img/avatar-3-64.png') }}" alt=""/>
										<img class="skill-user-photo" src="{{ asset('build/img/photo-64-1.jpg') }}" alt=""/>
										<img class="skill-user-photo" src="{{ asset('build/img/photo-64-2.jpg') }}" alt=""/>
										<div class="skill-circle skill-circle-users">+4</div>
									</div>
								</div>
							</section><!--.skill-item-->

							<section class="skill-item tbl">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-num">
										<div class="skill-circle skill-circle-num">20</div>
									</div>
									<div class="tbl-cell tbl-cell-txt">User Experience Design</div>
									<div class="tbl-cell tbl-cell-users">
										<img class="skill-user-photo" src="{{ asset('build/img/photo-64-3.jpg') }}" alt=""/>
										<img class="skill-user-photo" src="{{ asset('build/img/photo-64-4.jpg') }}" alt=""/>
										<img class="skill-user-photo" src="{{ asset('build/img/photo-64-1.jpg') }}" alt=""/>
										<div class="skill-circle skill-circle-users">+13</div>
									</div>
								</div>
							</section><!--.skill-item-->
						</article><!--.profile-info-item-->

						<article class="profile-info-item">
							<header class="profile-info-item-header">
								<i class="font-icon font-icon-star"></i>
								More interest
							</header>
							<div class="profile-interests">
								<a href="#" class="label label-light-grey">Interest</a>
								<a href="#" class="label label-light-grey">Example</a>
								<a href="#" class="label label-light-grey">One more</a>
								<a href="#" class="label label-light-grey">Here is example interest</a>
								<a href="#" class="label label-light-grey">Interest</a>
								<a href="#" class="label label-light-grey">Example</a>
								<a href="#" class="label label-light-grey">One more</a>
								<a href="#" class="label label-light-grey">Here is example interest</a>
								<a href="#" class="label label-light-grey">Interest</a>
								<a href="#" class="label label-light-grey">Example</a>
								<a href="#" class="label label-light-grey">One more</a>
								<a href="#" class="label label-light-grey">Here is example interest</a>
							</div>
						</article><!--.profile-info-item-->
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">
							Recomendations
							<div class="slider-arrs">
								<button type="button" class="recomendations-slider-prev">
									<i class="font-icon font-icon-arrow-left"></i>
								</button>
								<button type="button" class="recomendations-slider-next">
									<i class="font-icon font-icon-arrow-right"></i>
								</button>
							</div>
						</header>
						<div class="recomendations-slider">
							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->

							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->

							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->

							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-4.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->

							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->

							<div class="slide">
								<div class="citate-speech-bubble">
									<i class="font-icon-quote"></i>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-4.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
											<p class="user-card-row-status"><a href="#">PatchworkLabs</a></p>
										</div>
									</div>
								</div>
							</div><!--.slide-->
						</div><!--.recomendations-slider-->
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">Following</header>
						<div class="profile-following">
							<div class="profile-following-grid">
								<div class="col">
									<article class="follow-group">
										<div class="follow-group-logo">
											<a href="#" class="follow-group-logo-in"><img src="{{ asset('build/img/logo-2.png') }}" alt=""></a>
										</div>
										<div class="follow-group-name">
											<a href="#">KIPP Foundation</a>
										</div>
										<div class="follow-group-link">
											<a href="#">
												<span class="plus-link-circle"><span>&plus;</span></span>
												Follow
											</a>
										</div>
									</article>
								</div>
								<div class="col">
									<article class="follow-group">
										<div class="follow-group-logo">
											<a href="#" class="follow-group-logo-in"><img src="{{ asset('build/img/logo-2.png') }}" alt=""></a>
										</div>
										<div class="follow-group-name">
											<a href="#">KIPP Foundation</a>
										</div>
										<div class="follow-group-link">
											<a href="#">
												<span class="plus-link-circle"><span>&plus;</span></span>
												Follow
											</a>
										</div>
									</article>
								</div>
								<div class="col">
									<article class="follow-group">
										<div class="follow-group-logo">
											<a href="#" class="follow-group-logo-in"><img src="{{ asset('build/img/logo-2.png') }}" alt=""></a>
										</div>
										<div class="follow-group-name">
											<a href="#">KIPP Foundation</a>
										</div>
										<div class="follow-group-link">
											<a href="#">
												<span class="plus-link-circle"><span>&plus;</span></span>
												Follow
											</a>
										</div>
									</article>
								</div>
								<div class="col">
									<article class="follow-group">
										<div class="follow-group-logo">
											<a href="#" class="follow-group-logo-in"><img src="{{ asset('build/img/logo-2.png') }}" alt=""></a>
										</div>
										<div class="follow-group-name">
											<a href="#">KIPP Foundation</a>
										</div>
										<div class="follow-group-link">
											<a href="#">
												<span class="plus-link-circle"><span>&plus;</span></span>
												Follow
											</a>
										</div>
									</article>
								</div>
							</div>
							<a href="#" class="btn btn-rounded btn-primary-outline">See all (20)</a>
						</div><!--.profile-following-->
					</section><!--.box-typical-->
				</div><!--.col- -->

				<div class="col-lg-3 col-md-6 col-sm-6">
					<section class="box-typical">
						<header class="box-typical-header-sm">People also viewed</header>
						<div class="friends-list stripped">
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name status-online"><a href="#">Dan Cederholm</a></p>
											<p class="user-card-row-status">Co-founder of <a href="#">Company</a></p>
										</div>
										<div class="tbl-cell tbl-cell-action">
											<a href="#" class="plus-link-circle"><span>&plus;</span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Oykun Yilmaz</a></p>
											<p class="user-card-row-status">Co-founder of <a href="#">Company</a></p>
										</div>
										<div class="tbl-cell tbl-cell-action">
											<a href="#" class="plus-link-circle"><span>&plus;</span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Bill S Kenney</a></p>
											<p class="user-card-row-status">Co-founder of <a href="#">Company</a></p>
										</div>
										<div class="tbl-cell tbl-cell-action">
											<a href="#" class="plus-link-circle"><span>&plus;</span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-4.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
											<p class="user-card-row-status">Co-founder of <a href="#">Company</a></p>
										</div>
										<div class="tbl-cell tbl-cell-action">
											<a href="#" class="plus-link-circle"><span>&plus;</span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="friends-list-item">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo">
											<a href="#">
												<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name"><a href="#">Susan Andrews</a></p>
											<p class="user-card-row-status">Co-founder of <a href="#">Company</a></p>
										</div>
										<div class="tbl-cell tbl-cell-action">
											<a href="#" class="plus-link-circle"><span>&plus;</span></a>
										</div>
									</div>
								</div>
							</article>
						</div>

						<div class="see-all">
							<a href="#">See All (300)</a>
						</div>

						<section>
							<header class="box-typical-header-sm">More Influencer</header>
							<div class="profile-card-slider">
								<div class="slide">
									<div class="profile-card">
										<div class="profile-card-photo">
											<img src="{{ asset('build/img/photo-220-1.jpg') }}" alt=""/>
										</div>
										<div class="profile-card-name">Jackie Tran</div>
										<div class="profile-card-status">Company Founder</div>
										<button type="button" class="btn btn-rounded btn-primary-outline">Follow</button>
									</div><!--.profile-card-->
								</div><!--.slide-->
								<div class="slide">
									<div class="profile-card">
										<div class="profile-card-photo">
											<img src="{{ asset('build/img/avatar-1-256.png') }}" alt=""/>
										</div>
										<div class="profile-card-name">Jackie Tran</div>
										<div class="profile-card-status">Company Founder</div>
										<button type="button" class="btn btn-rounded btn-primary-outline">Follow</button>
									</div><!--.profile-card-->
								</div><!--.slide-->
								<div class="slide">
									<div class="profile-card">
										<div class="profile-card-photo">
											<img src="{{ asset('build/img/avatar-2-256.png') }}" alt=""/>
										</div>
										<div class="profile-card-name">Sarah Sanchez</div>
										<div class="profile-card-status">Longnameexample<br/>corporation</div>
										<button type="button" class="btn btn-rounded btn-primary-outline">Follow</button>
									</div><!--.profile-card-->
								</div><!--.slide-->
								<div class="slide">
									<div class="profile-card">
										<div class="profile-card-photo">
											<img src="{{ asset('build/img/avatar-3-256.png') }}" alt=""/>
										</div>
										<div class="profile-card-name">Sarah Sanchez</div>
										<div class="profile-card-status">Longnameexample<br/>corporation</div>
										<button type="button" class="btn btn-rounded btn-primary-outline">Follow</button>
									</div><!--.profile-card-->
								</div><!--.slide-->
							</div><!--.profile-card-slider-->
						</section>
					</section><!--.box-typical-->

					<section class="box-typical">
						<header class="box-typical-header-sm">People you may know</header>
						<div class="people-rel-list">
							<div class="people-rel-list-name"><a href="#">Jackie Tran Anh</a>  /  Designer</div>
							<ul class="people-rel-list-photos">
								<li><a href="#"><img src="{{ asset('build/img/photo-92-1.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-2.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-3.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/avatar-1-128.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-2.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/avatar-2-128.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-1.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/avatar-3-128.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-3.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-1.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-2.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-3.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-1.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-2.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-3.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('build/img/photo-92-1.jpg') }}" alt=""></a></li>
							</ul>
							<form class="site-header-search">
								<input type="text" placeholder="Search for people"/>
								<button type="submit">
									<span class="font-icon-search"></span>
								</button>
								<div class="overlay"></div>
							</form>
						</div>
					</section><!--.box-typical-->
				</div><!--.col- -->
			</div><!--.row-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<script src="{{ asset('build/js/lib/slick-carousel/slick.min.js') }}"></script>
	<script>
		$(function () {
			$(".profile-card-slider").slick({
				slidesToShow: 1,
				adaptiveHeight: true,
				prevArrow: '<i class="slick-arrow font-icon-arrow-left"></i>',
				nextArrow: '<i class="slick-arrow font-icon-arrow-right"></i>'
			});

			var postsSlider = $(".posts-slider");

			postsSlider.slick({
				slidesToShow: 4,
				adaptiveHeight: true,
				arrows: false,
				responsive: [
					{
						breakpoint: 1700,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 1350,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});

			$('.posts-slider-prev').click(function(){
				postsSlider.slick('slickPrev');
			});

			$('.posts-slider-next').click(function(){
				postsSlider.slick('slickNext');
			});

			/* ==========================================================================
			 Recomendations slider
			 ========================================================================== */

			var recomendationsSlider = $(".recomendations-slider");

			recomendationsSlider.slick({
				slidesToShow: 4,
				adaptiveHeight: true,
				arrows: false,
				responsive: [
					{
						breakpoint: 1700,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 1350,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});

			$('.recomendations-slider-prev').click(function() {
				recomendationsSlider.slick('slickPrev');
			});

			$('.recomendations-slider-next').click(function(){
				recomendationsSlider.slick('slickNext');
			});
		});
	</script>
@endsection
