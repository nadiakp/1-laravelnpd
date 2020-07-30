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
    <div class="container-fluid messenger">
        <div class="box-typical chat-container">
            <section class="chat-list">
                <div class="chat-list-search chat-list-settings-header">
                    <div class="row">
                        <div class="col-sm-2 col-lg-2 action">
                            <a href="#"><span class="font-icon font-icon-cogwheel"></span></a>
                        </div>
                        <div class="col-sm-8 col-lg-8 text-center description">
                            Messenger
                        </div>
                        <div class="col-sm-2 col-lg-2 text-right action">
                            <a href="#"><span class="font-icon fa fa-pencil"></span></a>
                        </div>
                    </div>
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
                            <div class="chat-list-item-txt">no</div>
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
                        </div>
                    </div>
                    <div class="chat-list-item">
                        <div class="chat-list-item-photo">
                            <img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="">
                        </div>
                        <div class="chat-list-item-header">
                            <div class="chat-list-item-name">
                                <span class="name">Matt McGill</span>
                            </div>
                            <div class="chat-list-item-date">16:59</div>
                        </div>
                        <div class="chat-list-item-cont">
                            <div class="chat-list-item-txt">Anything that's easy or has no difficulty; something that is a certainty</div>
                        </div>
                    </div>
                    <div class="chat-list-item">
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
                            <div class="chat-list-item-txt">no</div>
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
                            <div class="chat-list-item-txt">Anything that's easy or has no difficulty; something that is a certaint</div>
                        </div>
                    </div>
                    <div class="chat-list-item">
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
                            <div class="chat-list-item-txt">no</div>
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
                                <span class="name">Matt McGill</span>
                            </div>
                            <div class="chat-list-item-date">05 Aug</div>
                        </div>
                        <div class="chat-list-item-cont">
                            <div class="chat-list-item-txt writing">Yes</div>
                            <div class="chat-list-item-dot"></div>
                        </div>
                    </div>
                </div><!--.chat-list-in-->
            </section><!--.chat-list-->

            <section class="chat-list-info">
                <div class="chat-list-search chat-list-settings-header">
                    <a href="#"><span class="fa fa-phone"></span></a>
                    <a href="#"><span class="fa fa-video-camera"></span></a>
                    <a href="#"><span class="fa fa-info-circle"></span></a>
                </div><!--.chat-list-search-->
                <div class="chat-list-in">
                    <section class="chat-user-info chat-list-item online">
                        <div class="chat-list-item-photo">
                            <img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="">
                        </div>
                        <div class="chat-list-item-header">
                            <div class="chat-list-item-name">
                                <span class="name">Matt McGill</span>
                            </div>
                        </div>
                        <div class="chat-list-item-cont">
                            <div class="chat-list-item-txt writing">
                                Matt McGill typing a message
                            </div>
                        </div>
                    </section>
                    <section class="chat-settings">
                        <div class="item">
                            <a href="#">
                                <span class="font-icon font-icon-pencil"></span>
                                Edit name
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <span class="font-icon fa fa-eyedropper"></span>
                                Change color
                            </a>
                        </div>
                        <div class="item change-bg-color">
                            <div class="checkbox-bird green">
                                <input name="color" type="radio" id="color-green"/>
                                <label for="color-green" data-color="green"></label>
                            </div>
                            <div class="checkbox-bird yellow">
                                <input name="color" type="radio" id="color-yellow"/>
                                <label for="color-yellow" data-color="yellow"></label>
                            </div>
                            <div class="checkbox-bird blue">
                                <input name="color" type="radio" id="color-blue" checked/>
                                <label for="color-blue" data-color="blue"></label>
                            </div>
                            <div class="checkbox-bird red">
                                <input name="color" type="radio" id="color-red"/>
                                <label for="color-red" data-color="red"></label>
                            </div>
                            <div class="checkbox-bird pink">
                                <input name="color" type="radio" id="color-pink"/>
                                <label for="color-pink" data-color="pink"></label>
                            </div>
                            <div class="checkbox-bird blue-light">
                                <input name="color" type="radio" id="color-blue-light"/>
                                <label for="color-blue-light" data-color="blue-light"></label>
                            </div>
                            <div class="checkbox-bird purple-light">
                                <input name="color" type="radio" id="color-purple-light"/>
                                <label for="color-purple-light" data-color="purple-light"></label>
                            </div>
                            <div class="checkbox-bird lime">
                                <input name="color" type="radio" id="color-lime"/>
                                <label for="color-lime" data-color="lime"></label>
                            </div>
                            <div class="checkbox-bird orange">
                                <input name="color" type="radio" id="color-orange"/>
                                <label for="color-orange" data-color="orange"></label>
                            </div>
                            <div class="checkbox-bird pink-dark">
                                <input name="color" type="radio" id="color-pink-dark"/>
                                <label for="color-pink-dark" data-color="pink-dark"></label>
                            </div>
                            <div class="checkbox-bird purple">
                                <input name="color" type="radio" id="color-purple"/>
                                <label for="color-purple" data-color="purple"></label>
                            </div>
                        </div>
                        <div class="checkbox-toggle">
                            <input type="checkbox" id="check-toggle-2" checked="">
                            <label for="check-toggle-2">Disable notifications</label>
                        </div>
                    </section>
                    <section class="chat-profiles">
                        <header>Profile on facebook</header>
                        <a href="#">http://facebook.com/startui</a>
                    </section>
                </div>
            </section>

            <section class="chat-area">
                <div class="chat-area-in">
                    <div class="chat-area-header">
                        <div class="chat-list-item online">
                            <div class="chat-list-item-name">
                                <span class="name">Thomas Bryan</span>
                            </div>
                            <div class="chat-list-item-txt writing">Last seen 05 aug 2015 at 18:04</div>
                        </div>
                    </div><!--.chat-area-header-->

                    <div class="chat-dialog-area scrollable-block">
                        <div class="messenger-dialog-area">
                            <div class="messenger-message-container">
                                <div class="avatar">
                                    <img src="{{ asset('build/img/avatar-1-32.png') }}">
                                </div>
                                <div class="messages">
                                    <ul>
                                        <li>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </div>
                                            </div>
                                            <div class="time-ago">1:26</div>
                                        </li>
                                        <li>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text...
                                                </div>
                                            </div>
                                            <div class="time-ago">1:26</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="messenger-message-container from bg-blue">
                                <div class="messages">
                                    <ul>
                                        <li>
                                            <div class="time-ago">1:26</div>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-ago">1:26</div>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text...
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="avatar chat-list-item-photo">
                                    <img src="{{ asset('build/img/photo-64-1.jpg') }}">
                                </div>
                            </div>
                            <div class="messenger-message-container">
                                <div class="avatar">
                                    <img src="{{ asset('build/img/avatar-1-32.png') }}">
                                </div>
                                <div class="messages">
                                    <ul>
                                        <li>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </div>
                                            </div>
                                            <div class="time-ago">1:26</div>
                                        </li>
                                        <li>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text...
                                                </div>
                                            </div>
                                            <div class="time-ago">1:26</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="messenger-message-container from bg-blue">
                                <div class="messages">
                                    <ul>
                                        <li>
                                            <div class="time-ago">1:26</div>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-ago">1:26</div>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text...
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="avatar chat-list-item-photo">
                                    <img src="{{ asset('build/img/photo-64-1.jpg') }}">
                                </div>
                            </div>
                            <div class="messenger-message-container">
                                <div class="avatar">
                                    <img src="{{ asset('build/img/avatar-1-32.png') }}">
                                </div>
                                <div class="messages">
                                    <ul>
                                        <li>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </div>
                                            </div>
                                            <div class="time-ago">1:26</div>
                                        </li>
                                        <li>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text...
                                                </div>
                                            </div>
                                            <div class="time-ago">1:26</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="messenger-message-container from bg-blue">
                                <div class="messages">
                                    <ul>
                                        <li>
                                            <div class="time-ago">1:26</div>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-ago">1:26</div>
                                            <div class="message">
                                                <div>
                                                    Lorem Ipsum is simply dummy text...
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="avatar chat-list-item-photo">
                                    <img src="{{ asset('build/img/photo-64-1.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chat-area-bottom">
                        <form class="write-message">
                            <div class="form-group">
                                <textarea rows="1" class="form-control" placeholder="Type a message"></textarea>
                                <div class="dropdown dropdown-typical dropup attach">
                                    <a class="dropdown-toggle dropdown-toggle-txt"
                                       id="dd-chat-attach"
                                       data-target="#"
                                       data-toggle="dropdown"
                                       aria-haspopup="true"
                                       aria-expanded="false">
                                        <span class="font-icon fa fa-file-o"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-chat-attach">
                                        <a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-photo"></i>Photo</a>
                                        <a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-video"></i>Video</a>
                                        <a class="dropdown-item" href="#"><i class="font-icon font-icon-sound"></i>Audio</a>
                                        <a class="dropdown-item" href="#"><i class="font-icon font-icon-page"></i>Document</a>
                                        <a class="dropdown-item" href="#"><i class="font-icon font-icon-earth"></i>Map</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--.chat-area-bottom-->
                </div><!--.chat-area-in-->
            </section><!--.chat-area-->
        </div><!--.chat-container-->

    </div><!--.container-fluid-->
</div><!--.page-content-->

<script>
    $(function() {
        $('.chat-settings .change-bg-color label').on('click', function() {
            var color = $(this).data('color');

            $('.messenger-message-container.from').each(function() {
                $(this).removeClass(function (index, css) {
                    return (css.match (/(^|\s)bg-\S+/g) || []).join(' ');
                });

                $(this).addClass('bg-' + color);
            });
        });
    });
</script>
@endsection