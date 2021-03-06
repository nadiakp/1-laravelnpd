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
			<section class="activity-line">
				<article class="activity-line-item box-typical">
					<div class="activity-line-date">
						Tuesday<br/>
						sep 9
					</div>
					<header class="activity-line-item-header">
						<div class="activity-line-item-user">
							<div class="activity-line-item-user-photo">
								<a href="#">
									<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
								</a>
							</div>
							<div class="activity-line-item-user-name">Tim Colins</div>
							<div class="activity-line-item-user-status">Developer, Palo Alto</div>
						</div>
					</header>
					<div class="activity-line-action-list">
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Uploaded 3 Images to Daily UI Album</p>
									<ul class="previews">
										<li>
											<a class="fancybox" rel="gall-1" href="{{ asset('build/img/pic.jpg') }}">																	<img src="http://placehold.it/120x80" alt=""/>
											</a>
										</li>
										<li>
											<a class="fancybox" rel="gall-1" href="{{ asset('build/img/pic.jpg') }}">																	<img src="http://placehold.it/120x80" alt=""/>
											</a>
										</li>
										<li>
											<a class="fancybox" rel="gall-1" href="{{ asset('build/img/pic.jpg') }}">																	<img src="http://placehold.it/120x80" alt=""/>
											</a>
										</li>
										<li>
											<a class="fancybox" rel="gall-1" href="{{ asset('build/img/pic.jpg') }}">																	<img src="http://placehold.it/120x80" alt=""/>
											</a>
										</li>
										<li>
											<a class="fancybox" rel="gall-1" href="{{ asset('build/img/pic.jpg') }}">																	<img src="http://placehold.it/120x80" alt=""/>
											</a>
										</li>
									</ul>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Left a comment to <a href="#">Olga Gozha’s</a> Image</p>
									<div class="tbl img-comment">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-img">
												<img src="http://placehold.it/120x80" alt=""/>
											</div>
											<div class="tbl-cell tbl-cell-txt">
												«Had a meeting about shopping cart experience, with Isobel Patterson, Josh Weller»
											</div>
										</div>
									</div>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Uploaded 3 files</p>
									<ul class="attach-list">
										<li>
											<i class="font-icon font-icon-page"></i>
											<a href="#">example.avi</a>
										</li>
										<li>
											<i class="font-icon font-icon-page"></i>
											<a href="#">activity.psd</a>
										</li>
										<li>
											<i class="font-icon font-icon-page"></i>
											<a href="#">example.psd</a>
										</li>
									</ul>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
					</div><!--.activity-line-action-list-->
				</article><!--.activity-line-item-->

				<article class="activity-line-item box-typical">
					<div class="activity-line-date">
						Monday<br/>
						sep 8
					</div>
					<header class="activity-line-item-header">
						<div class="activity-line-item-user">
							<div class="activity-line-item-user-photo">
								<a href="#">
									<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
								</a>
							</div>
							<div class="activity-line-item-user-name">Tim Colins</div>
							<div class="activity-line-item-user-status">Developer, Palo Alto</div>
						</div>
					</header>
					<div class="activity-line-action-list">
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Started nes UI migration</p>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
						<section class="activity-line-action">
							<div class="dot"></div>
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Had a meeting about shopping cart experience, with Isobel Patterson, Josh Weller, Mark Taylor</p>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Had a meeting about shopping cart experience, with Isobel Patterson, Josh Weller, Mark Taylor</p>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">1 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
					</div><!--.activity-line-action-list-->
				</article><!--.activity-line-item-->

				<article class="activity-line-item box-typical">
					<div class="activity-line-date">
						Sunday<br/>
						sep 7
					</div>
					<header class="activity-line-item-header">
						<div class="activity-line-item-user">
							<div class="activity-line-item-user-photo">
								<a href="#">
									<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
								</a>
							</div>
							<div class="activity-line-item-user-name">Vasilisa</div>
							<div class="activity-line-item-user-status">Product Manager, San Francisco</div>
						</div>
					</header>
					<div class="activity-line-action-list">
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Scheduled a meeting for new shopping cart experience with Development team</p>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Had a meeting about shopping cart experience, with Isobel Patterson, Josh Weller, Mark Taylor</p>
									<div class="alert alert-info">
										New Notification E-Mail: Past Due Request Reminder<br/>
										Recap: For requests, 3 e-mails are generated
									</div>
									<div class="alert alert-danger">
										New Notification E-Mail: Past Due Request Reminder<br/>
										Recap: For requests, 3 e-mails are generated
									</div>
									<div class="alert alert-warning">
										New Notification E-Mail: Past Due Request Reminder<br/>
										Recap: For requests, 3 e-mails are generated
									</div>
									<div class="alert alert-success">
										New Notification E-Mail: Past Due Request Reminder<br/>
										Recap: For requests, 3 e-mails are generated
									</div>
									<div class="alert alert-purple">
										New Notification E-Mail: Past Due Request Reminder<br/>
										Recap: For requests, 3 e-mails are generated
									</div>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
						<div class="activity-line-more">
							<a href="#">See more</a>
						</div>
					</div><!--.activity-line-action-list-->
				</article><!--.activity-line-item-->
			</section><!--.activity-line-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="{{ asset('build/js/lib/fancybox/jquery.fancybox.pack.js') }}"></script>
	<script>
		$(function() {
			$(".fancybox").fancybox({
				padding: 0,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		});
	</script>
@endsection
