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
			<section class="box-typical contacts-page">
				<header class="box-typical-header box-typical-header-bordered">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
							<h1>Contact us</h1>
							<ul class="contacts-tabs" role="tablist">
								<li class="nav-item">
									<a href="#tab-contact-1" role="tab" data-toggle="tab" class="active">France</a>
								</li>
								<li class="nav-item">
									<a href="#tab-contact-2" role="tab" data-toggle="tab">USA</a>
								</li>
								<li class="nav-item">
									<a href="#tab-contact-3" role="tab" data-toggle="tab">Singapore</a>
								</li>
							</ul>
						</div>
						<div class="tbl-cell tbl-cell-actions">
							<button type="button" class="action-btn action-btn-expand">
								<i class="font-icon font-icon-expand"></i>
							</button>
						</div>
					</div>
				</header>

				<div class="tab-content">
					<div role="tabpanel" class="clearfix tab-pane active" id="tab-contact-1">
						<div class="contacts-page-col-left">
							<div class="contacts-page-col-left-in">
								<div id="map_canvas" class="map"></div>
							</div><!--.contacts-page-col-left-in-->
						</div><!--.contacts-page-col-left-->
						<div class="contacts-page-col-right">
							<section class="contacts-page-section">
								<header class="box-typical-header-sm">Connect</header>
								<a href="#" class="contact">
									<i class="font-icon font-icon-facebook"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-twitter"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-linkedin"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-google-plus"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-instagram"></i>
								</a>
							</section>
							<form class="contacts-page-section">
								<header class="box-typical-header-sm">Send Message</header>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="E-Mail"/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Subject"/>
								</div>
								<div class="form-group">
									<textarea rows="4" class="form-control" placeholder="Message"></textarea>
								</div>
								<button type="submit" class="btn btn-rounded">Send</button>
							</form>
							<section class="contacts-page-section">
								<header class="box-typical-header-sm">Other way</header>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
							</section>
						</div><!--.contacts-page-col-right-->
					</div><!--.tab-pane-->

					<div role="tabpanel" class="clearfix tab-pane" id="tab-contact-2">
						<div class="contacts-page-col-left">
							<div class="contacts-page-col-left-in">
								<div id="map_canvas_2" class="map"></div>
							</div><!--.contacts-page-col-left-in-->
						</div><!--.contacts-page-col-left-->
						<div class="contacts-page-col-right">
							<section class="contacts-page-section">
								<header class="box-typical-header-sm">Connect</header>
								<a href="#" class="contact">
									<i class="font-icon font-icon-facebook"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-twitter"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-linkedin"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-google-plus"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-instagram"></i>
								</a>
							</section>
						</div><!--.contacts-page-col-right-->
					</div><!--.tab-pane-->

					<div role="tabpanel" class="clearfix tab-pane" id="tab-contact-3">
						<div class="contacts-page-col-left">
							<div class="contacts-page-col-left-in">
								<div id="map_canvas_3" class="map"></div>
							</div><!--.contacts-page-col-left-in-->
						</div><!--.contacts-page-col-left-->
						<div class="contacts-page-col-right">
							<section class="contacts-page-section">
								<header class="box-typical-header-sm">Connect</header>
								<a href="#" class="contact">
									<i class="font-icon font-icon-facebook"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-twitter"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-linkedin"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-google-plus"></i>
								</a>
								<a href="#" class="contact">
									<i class="font-icon font-icon-instagram"></i>
								</a>
							</section>
							<form class="contacts-page-section">
								<header class="box-typical-header-sm">Send Message</header>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="E-Mail"/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Subject"/>
								</div>
								<div class="form-group">
									<textarea rows="4" class="form-control" placeholder="Message"></textarea>
								</div>
								<button type="submit" class="btn btn-rounded">Send</button>
							</form>
							<section class="contacts-page-section">
								<header class="box-typical-header-sm">Other way</header>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
								<p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
								<p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
							</section>
						</div><!--.contacts-page-col-right-->
					</div><!--.tab-pane-->
				</div><!--.tab-content-->
			</section><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
	<script src="{{ asset('build/js/lib/google-maps/infobox.js') }}"></script>
	<script src="{{ asset('build/js/lib/google-maps/google-maps-init.js') }}"></script>
@endsection
