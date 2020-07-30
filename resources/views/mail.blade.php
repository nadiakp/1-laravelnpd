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
			<section class="box-typical mail-box">
				<header class="mail-box-header">
					<div class="mail-box-header-left">
						<button type="button" class="btn write">Write</button>
						<div class="btns-icon">
							<button type="button" class="btn-icon"><i class="font-icon font-icon-refresh-2"></i></button>
							<button type="button" class="btn-icon"><i class="font-icon font-icon-check-circle"></i></button>
							<button type="button" class="btn-icon"><i class="font-icon font-icon-folder"></i></button>
						</div>
					</div>
					<div class="mail-box-header-right">
						<ul class="mail-box-header-nav">
							<li><a href="#" class="active">Mails</a></li>
							<li><a href="#">Contacts</a></li>
							<li><a href="#">Files</a></li>
						</ul>
						<div class="search">
							<input type="text" class="form-control form-control-rounded" placeholder="Search"/>
							<button type="submit" class="btn-icon"><i class="font-icon font-icon-search"></i></button>
						</div>
					</div>
				</header><!--.mail-box-header-->

				<section class="mail-box-list  scrollable-block">
					<div class="mail-box-item selected-line">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Dropbox</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">294</span></div>
												<div class="tbl-cell tbl-cell-status">
													<div class="online"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">4 reasons to upgrade to Dropbox Pro</div>
						</div>
						<div class="mail-box-item-content">
							<div class="attach">
								<i class="font-icon-clip"></i>
							</div>
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item selected-line red">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Naomi Gibson</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">11</span></div>
												<div class="tbl-cell tbl-cell-status">
													<div class="online"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item selected">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Oakley Bradford</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">3</span></div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="attach">
								<i class="font-icon-clip"></i>
							</div>
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/avatar-1-64.png') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Facebook</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Сегодня, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents an example of a long message subjects that did not fit the full width</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/avatar-2-64.png') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Timothy Cooke</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">11</span></div>
												<div class="tbl-cell tbl-cell-status">
													<div class="online"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/photo-64-4.jpg') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Savanna Carney</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">3</span></div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="attach">
								<i class="font-icon-clip"></i>
							</div>
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/avatar-3-64.png') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Facebook</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents an example of a long message subjects that did not fit the full width</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Elena Hogan</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">11</span></div>
												<div class="tbl-cell tbl-cell-status">
													<div class="online"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Samson Bowen</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">3</span></div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="attach">
								<i class="font-icon-clip"></i>
							</div>
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/avatar-1-64.png') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Facebook</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents an example of a long message subjects that did not fit the full width</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/avatar-2-64.png') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Micah West</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">11</span></div>
												<div class="tbl-cell tbl-cell-status">
													<div class="online"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/photo-64-4.jpg') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Abril Delaney</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">3</span></div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="attach">
								<i class="font-icon-clip"></i>
							</div>
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="{{ asset('build/img/avatar-3-64.png') }}" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Facebook</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents an example of a long message subjects that did not fit the full width</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->
				</section><!--.mail-box-list-->

				<section class="mail-box-work-area">
					<div class="mail-box-work-area-in">
						<header class="mail-box-work-area-header">
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name">Matt McGill</div>
													<span class="letters-num">3 mails</span>
													<a href="#">Jaeden Gates</a>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-btns">
										<button type="button" class="btn-icon"><i class="font-icon font-icon-fire"></i></button>
										<button type="button" class="btn-icon"><i class="font-icon font-icon-folder"></i></button>
										<button type="button" class="btn-icon"><i class="font-icon font-icon-trash"></i></button>
										<button type="button" class="btn-icon"><i class="font-icon font-icon-star"></i></button>
									</div>
								</div>
							</div>
						</header><!--.mail-box-work-area-header-->

						<div class="mail-box-work-area-cont  scrollable-block">
							<div class="mail-box-letter-item">
								<div class="mail-box-letter-item-in">
									<div class="mail-box-letter-item-photo">
										<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
									</div>
									<div class="mail-box-letter-item-header tbl">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-name">Matt McGill</div>
											<div class="tbl-cell tbl-cell-date">04.07.15</div>
										</div>
									</div>
									<div class="mail-box-letter-item-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio</div>
								</div>
							</div><!--.mail-box-letter-item-->
							<div class="mail-box-letter-item">
								<div class="mail-box-letter-item-in">
									<div class="mail-box-letter-item-photo">
										<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
									</div>
									<div class="mail-box-letter-item-header tbl">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-name">Matt McGill</div>
											<div class="tbl-cell tbl-cell-date">04.07.15</div>
										</div>
									</div>
									<div class="mail-box-letter-item-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio</div>
								</div>
							</div><!--.mail-box-letter-item-->

							<div class="mail-box-letter-opened">
								<div class="mail-box-letter-opened-header tbl">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Maximo Ochoa</div>
										<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
										<div class="tbl-cell tbl-cell-action">
											<button type="button"><i class="font-icon-answer"></i></button>
										</div>
									</div>
								</div><!--.mail-box-letter-opened-header-->
								<div class="text-block text-block-typical">
									<p>Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla</p>
									<p>Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla</p>
								</div>

								<div class="mail-box-letter-files">
									<div class="mail-file pdf">
										<p><a href="#">document.pdf</a></p>
										<p>230 Kb</p>
									</div>
									<div class="mail-file doc">
										<p><a href="#">document.doc</a></p>
										<p>230 Kb</p>
									</div>
									<div class="mail-file xls">
										<p><a href="#">document.xls</a></p>
										<p>230 Kb</p>
									</div>
									<div class="mail-file img">
										<p><a href="#">document.jpg</a></p>
										<p>230 Kb</p>
									</div>
								</div><!--.mail-box-letter-files-->

								<div class="summernote-theme-1">
									<div class="summernote">
										<p>Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla</p>
										<p>Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla</p>
									</div>
								</div>
								<div class="chat-area-bottom">
									<button type="submit" class="btn btn-rounded float-left">Send</button>
									<button type="reset" class="btn btn-rounded btn-default float-left">Clear</button>
									<div class="dropdown dropdown-typical dropup attach">
										<a class="dropdown-toggle dropdown-toggle-txt"
										   id="dd-chat-attach"
										   data-target="#"
										   data-toggle="dropdown"
										   aria-haspopup="true"
										   aria-expanded="false">
											<span class="lbl">Attach</span>
										</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-chat-attach">
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-photo"></i>Photo</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-video"></i>Video</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-sound"></i>Audio</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-page"></i>Document</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-earth"></i>Map</a>
										</div>
									</div>
								</div><!--.chat-area-bottom-->
							</div><!--.mail-box-letter-opened-->
						</div><!--.mail-box-work-area-cont-->
					</div><!--.main-box-work-area-in-->
				</section><!--.mail-box-work-area-->
			</section><!--.mail-box-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->
    
    <script src="{{ asset('build/js/lib/summernote/summernote.min.js') }}"></script>
    <script>
		$(document).ready(function() {
			$('.summernote').summernote();
		});
	</script>
@endsection
