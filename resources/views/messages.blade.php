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
			<div class="box-typical chat-container">
				<section class="chat-list">
					<div class="chat-list-search">
						<input type="text" class="form-control form-control-rounded" placeholder="Search"/>
					</div><!--.chat-list-search-->
					<div class="chat-list-in scrollable-block">
						<div class="chat-list-item online">
							<div class="chat-list-item-photo">
								<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
							</div>
							<div class="chat-list-item-header">
								<div class="chat-list-item-name">
									<span class="name">Matt McGill</span>
								</div>
								<div class="chat-list-item-date">16:59</div>
							</div>
							<div class="chat-list-item-cont">
								<div class="chat-list-item-txt writing">
									<div class="icon">
										<i class="font-icon font-icon-pencil-thin"></i>
									</div>
									Matt McGill typing a message
								</div>
								<div class="chat-list-item-count">3</div>
							</div>
						</div>
						<div class="chat-list-item">
							<div class="chat-list-item-photo">
								<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
							</div>
							<div class="chat-list-item-header">
								<div class="chat-list-item-name">
									<span class="name">Matthew Heath</span>
								</div>
								<div class="chat-list-item-date">16:59</div>
							</div>
							<div class="chat-list-item-cont">
								<div class="chat-list-item-txt">Anything that's easy or has no difficulty; something that is a certainty</div>
								<div class="chat-list-item-count">100</div>
							</div>
						</div>
						<div class="chat-list-item selected">
							<div class="chat-list-item-photo">
								<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
							</div>
							<div class="chat-list-item-header">
								<div class="chat-list-item-name">
									<span class="name">Vasilisa</span>
								</div>
								<div class="chat-list-item-date">05 Aug</div>
							</div>
							<div class="chat-list-item-cont">
								<div class="chat-list-item-txt">No</div>
								<div class="chat-list-item-dot"></div>
							</div>
						</div>
						<div class="chat-list-item online">
							<div class="chat-list-item-photo">
								<img src="{{ asset('build/img/photo-64-4.jpg') }}" alt="">
							</div>
							<div class="chat-list-item-header">
								<div class="chat-list-item-name">
									<span class="name">Administration</span>
								</div>
								<div class="chat-list-item-date">05 Aug</div>
							</div>
							<div class="chat-list-item-cont">
								<div class="chat-list-item-txt">You can run!</div>
							</div>
						</div>
						<div class="chat-list-item">
							<div class="chat-list-item-photo">
								<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
							</div>
							<div class="chat-list-item-header">
								<div class="chat-list-item-name">
									<span class="name">Monica Parrish</span>
								</div>
								<div class="chat-list-item-date">05 Aug</div>
							</div>
							<div class="chat-list-item-cont">
								<div class="chat-list-item-txt writing">Monica Parrish changes the image on the page</div>
								<div class="chat-list-item-dot"></div>
							</div>
						</div>
					</div><!--.chat-list-in-->
				</section><!--.chat-list-->

				<section class="chat-area">
					<div class="chat-area-in">
						<div class="chat-area-header">
							<div class="chat-list-item online">
								<div class="chat-list-item-photo">
									<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
								</div>
								<div class="chat-list-item-name">
									<span class="name">Thomas Bryan</span>
								</div>
								<div class="chat-list-item-txt writing">Last seen 05 aug 2015 at 18:04</div>
							</div>
							<div class="chat-area-header-action">
								<div class="dropdown dropdown-typical">
									<a class="dropdown-toggle dropdown-toggle-txt" id="dd-chat-action" data-target="#" href data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="lbl">Actions</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-chat-action">
										<a class="dropdown-item no-nowrap" href="#">Delete&nbsp;conversation</a>
										<a class="dropdown-item no-nowrap" href="#">Report spam</a>
									</div>
								</div>
							</div>
						</div><!--.chat-area-header-->

						<div class="chat-dialog-area scrollable-block">
							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-1"/>
									<label for="mess-1"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Felix Lane</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Yes, I will alter it</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message selected">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-2" checked/>
									<label for="mess-2"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Felix Lane</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">All did not get to that</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message selected">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-3" checked/>
									<label for="mess-3"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Vasilisa</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">yeeeeees!</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-4"/>
									<label for="mess-4"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Vasilisa</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">yes it would be nice to have the cursor just stood there</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-5"/>
									<label for="mess-5"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Vasilisa</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">I just realized</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-6"/>
									<label for="mess-6"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Thomas Bryan</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">I talked about it</div>
									<div class="chat-message quote">
										<div class="chat-message-photo">
											<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
										</div>
										<div class="chat-message-header">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Thomas Bryan</div>
												<div class="tbl-cell tbl-cell-date">04.07.15</div>
											</div>
										</div>
										<div class="chat-message-content">
											<div class="chat-message-txt">It is necessary that when you open a chat <br/> cursor was already in the input field</div>
										</div>
									</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-7"/>
									<label for="mess-7"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Charles Adams</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Refresh the page has already been done</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-8"/>
									<label for="mess-8"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Vasilisa</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">
										Lorem ipsum dolor sit amet, oblique omittantur eu vel, mucius recteque ex pro. Melius facilis similique sea ex, sit eu ignota suscipit senserit, in vide scaevola vim. Omnesque luptatum sed eu. Eu meis iudico pri, ea qui meliore facilis, eu facer quaeque urbanitas sed.
									</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-9"/>
									<label for="mess-9"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Vasilisa</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Yes of course</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-10"/>
									<label for="mess-10"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Charles Adams</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">No</div>
									<div class="chat-message quote">
										<div class="chat-message-photo">
											<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
										</div>
										<div class="chat-message-header">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Charles Adams</div>
												<div class="tbl-cell tbl-cell-date">04.07.15</div>
											</div>
										</div>
										<div class="chat-message-content">
											<div class="chat-message-txt">It is necessary that when you open a chat <br/> cursor was already in the input field</div>
										</div>
									</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-11"/>
									<label for="mess-11"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Charles Adams</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Refresh the page has already been done</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-12"/>
									<label for="mess-12"></label>
								</div>
								<div class="chat-message-photo">
									<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Vasilisa</div>
										<div class="tbl-cell tbl-cell-date">04.07.15</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.
										Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. </div>
								</div>
							</div><!--.chat-message-->
						</div><!--.chat-dialog-area-->

						<div class="chat-area-bottom">
							<p class="caption">Selected <strong>2</strong> messages:</p>
							<button type="button" class="btn btn-rounded">Delete</button>
							<button type="button" class="btn btn-rounded">Resend</button>
							<button type="button" class="btn btn-rounded btn-default">Cancel</button>
							<button type="button" class="btn btn-rounded btn-default">This is spam</button>
						</div><!--.chat-area-bottom-->
					</div><!--.chat-area-in-->
				</section><!--.chat-area-->
			</div><!--.chat-container-->

		</div><!--.container-fluid-->
    </div><!--.page-content-->
@endsection