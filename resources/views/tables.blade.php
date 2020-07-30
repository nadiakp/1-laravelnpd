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
			<section class="box-typical box-typical-max-280 scrollable">
				<header class="box-typical-header">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
							<h3>Bootstrap Table Examples</h3>
						</div>
					</div>
				</header>
				<div class="box-typical-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<tbody>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-1"/>
											<label for="tbl-check-1"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text</td>
									<td width="150">
										<div class="progress-with-amount">
											<progress class="progress progress-success progress-no-margin" value="25" max="100">25%</progress>
											<div class="progress-with-amount-number">25%</div>
										</div>
									</td>
									<td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-2"/>
											<label for="tbl-check-2"></label>
										</div>
									</td>
									<td><a href="#">Value</a></td>
									<td>Revene for last quarter in state America.</td>
									<td width="150">
										<div class="progress-with-amount">
											<progress class="progress progress-no-margin" value="50" max="100">50%</progress>
											<div class="progress-with-amount-number">50%</div>
										</div>
									</td>
									<td nowrap="nowrap">27.051<span class="caret caret-up color-green"></span></td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td colspan="2" width="40%">
										<div class="bar-chart-wrapper">
											<span class="bar-chart">2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,1</span>
											<div class="val left">0</div>
											<div class="val right">1,57 м</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-3"/>
											<label for="tbl-check-3"></label>
										</div>
									</td>
									<td><a href="#">Assignee</a></td>
									<td>Text</td>
									<td width="150">
										<div class="progress-with-amount">
											<progress class="progress progress-danger progress-no-margin" value="75" max="100">75%</progress>
											<div class="progress-with-amount-number">75%</div>
										</div>
									</td>
									<td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-4"/>
											<label for="tbl-check-4"></label>
										</div>
									</td>
									<td><a href="#">Data Create</a></td>
									<td>Revene for last quarter in state America.</td>
									<td width="150">
										<div class="progress-with-amount">
											<progress class="progress progress-info progress-no-margin" value="15" max="100">15%</progress>
											<div class="progress-with-amount-number">15%</div>
										</div>
									</td>
									<td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td colspan="2">
										<div class="bar-chart-wrapper">
											<span class="bar-chart">2,5,3,6,2,1,2,1,2,1,2,5,3,1,2,1,4,1,2,1,2,5,3,6,2,1,1,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,1,1,2,1,4,1,2,1,2,1,1,1,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,1</span>
											<div class="val left">0</div>
											<div class="val right">1,57 м</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-5"/>
											<label for="tbl-check-5"></label>
										</div>
									</td>
									<td><a href="#">In Progress</a></td>
									<td>Text</td>
									<td width="150">
										<div class="progress-with-amount">
											<progress class="progress progress-success progress-no-margin" value="25" max="100">25%</progress>
											<div class="progress-with-amount-number">25%</div>
										</div>
									</td>
									<td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
								<tr class="table-active">
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-6"/>
											<label for="tbl-check-6"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text</td>
									<td width="150">
										<div class="progress-with-amount">
											<progress class="progress progress-success progress-no-margin" value="25" max="100">25%</progress>
											<div class="progress-with-amount-number">25%</div>
										</div>
									</td>
									<td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
								<tr class="table-success">
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-7"/>
											<label for="tbl-check-7"></label>
										</div>
									</td>
									<td><a href="#">Value</a></td>
									<td>Revene for last quarter in state America.</td>
									<td width="150">
										<div class="progress-with-amount">
											<progress class="progress progress-success progress-no-margin" value="25" max="100">25%</progress>
											<div class="progress-with-amount-number">25%</div>
										</div>
									</td>
									<td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td colspan="2">
										<div class="bar-chart-wrapper">
											<span class="bar-chart">2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,1</span>
											<div class="val left">0</div>
											<div class="val right">1,57 м</div>
										</div>
									</td>
								</tr>
								<tr class="table-warning">
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-8"/>
											<label for="tbl-check-8"></label>
										</div>
									</td>
									<td><a href="#">Assignee</a></td>
									<td>Text</td>
									<td width="150">
										<div class="progress-with-amount">
											<progress class="progress progress-success progress-no-margin" value="25" max="100">25%</progress>
											<div class="progress-with-amount-number">25%</div>
										</div>
									</td>
									<td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
								<tr class="table-danger">
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-9"/>
											<label for="tbl-check-9"></label>
										</div>
									</td>
									<td><a href="#">Data Create</a></td>
									<td>Revene for last quarter in state America.</td>
									<td width="150">
										<div class="progress-with-amount">
											<progress class="progress progress-success progress-no-margin" value="25" max="100">25%</progress>
											<div class="progress-with-amount-number">25%</div>
										</div>
									</td>
									<td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td colspan="2">
										<div class="bar-chart-wrapper">
											<span class="bar-chart">2,5,3,6,2,1,2,1,2,1,2,5,3,1,2,1,4,1,2,1,2,5,3,6,2,1,1,6,2,1,2,5,3,6,2,1,4,6,2,1,2,5,1,1,2,1,4,1,2,1,2,1,1,1,2,1,4,6,2,1,2,5,3,6,2,1,4,6,2,1,2,1</span>
											<div class="val left">0</div>
											<div class="val right">1,57 м</div>
										</div>
									</td>
								</tr>
								<tr class="table-info">
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-10"/>
											<label for="tbl-check-10"></label>
										</div>
									</td>
									<td><a href="#">In Progress</a></td>
									<td>Text</td>
									<td width="150">
										<div class="progress-with-amount">
											<progress class="progress progress-success progress-no-margin" value="25" max="100">25%</progress>
											<div class="progress-with-amount-number">25%</div>
										</div>
									</td>
									<td nowrap="nowrap">12.423<span class="caret color-red"></span></td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!--.box-typical-body-->
			</section><!--.box-typical-->

			<section class="box-typical box-typical-max-280 scrollable">
				<header class="box-typical-header">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
							<h3>Bootstrap Table Examples</h3>
						</div>
					</div>
				</header>
				<div class="box-typical-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<tbody>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-2-1"/>
											<label for="tbl-check-2-1"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text example here lorem ipsum</td>
									<td nowrap="nowrap">
										<div class="progress-steps-block">
											<div class="progress-steps">
												<div class="progress-step active"></div>
												<div class="progress-step"></div>
												<div class="progress-step"></div>
											</div>
											<div class="progress-steps-caption">1/3 Steps Complete</div>
										</div>
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-2-2"/>
											<label for="tbl-check-2-2"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text example here lorem ipsum</td>
									<td nowrap="nowrap">
										<div class="progress-steps-block">
											<div class="progress-steps">
												<div class="progress-step active"></div>
												<div class="progress-step active"></div>
												<div class="progress-step"></div>
											</div>
											<div class="progress-steps-caption">2/3 Steps Complete</div>
										</div>
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-2-3"/>
											<label for="tbl-check-2-3"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text example here lorem ipsum</td>
									<td nowrap="nowrap">
										<div class="progress-steps-block">
											<div class="progress-steps">
												<div class="progress-step active"></div>
												<div class="progress-step active"></div>
												<div class="progress-step active"></div>
											</div>
											<div class="progress-steps-caption">3/3 Steps Complete</div>
										</div>
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-2-4"/>
											<label for="tbl-check-2-4"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text example here lorem ipsum</td>
									<td nowrap="nowrap">
										<div class="progress-steps-block">
											<div class="progress-steps">
												<div class="progress-step active"></div>
												<div class="progress-step"></div>
												<div class="progress-step"></div>
												<div class="progress-step"></div>
											</div>
											<div class="progress-steps-caption">1/4 Steps Complete</div>
										</div>
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-2-5"/>
											<label for="tbl-check-2-5"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text example here lorem ipsum</td>
									<td nowrap="nowrap">
										<div class="progress-steps-block">
											<div class="progress-steps">
												<div class="progress-step active"></div>
												<div class="progress-step active"></div>
												<div class="progress-step"></div>
											</div>
											<div class="progress-steps-caption">2/3 Steps Complete</div>
										</div>
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-2-6"/>
											<label for="tbl-check-2-6"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text example here lorem ipsum</td>
									<td nowrap="nowrap">
										<div class="progress-steps-block">
											<div class="progress-steps">
												<div class="progress-step active"></div>
												<div class="progress-step active"></div>
												<div class="progress-step active"></div>
											</div>
											<div class="progress-steps-caption">3/3 Steps Complete</div>
										</div>
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Most commons</div>
										Florida (13%)
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!--.box-typical-body-->
			</section><!--.box-typical-->

			<section class="box-typical">
				<header class="box-typical-header">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
							<h3>23 Reports</h3>
						</div>
						<div class="tbl-cell tbl-cell-action-bordered">
							<button type="button" class="action-btn"><i class="font-icon font-icon-pencil"></i></button>
						</div>
						<div class="tbl-cell tbl-cell-action-bordered">
							<button type="button" class="action-btn"><i class="font-icon font-icon-re"></i></button>
						</div>
						<div class="tbl-cell tbl-cell-action-bordered">
							<button type="button" class="action-btn"><i class="font-icon font-icon-trash"></i></button>
						</div>
					</div>
				</header>
				<div class="box-typical-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="table-check-head"/>
											<label for="table-check-head"></label>
										</div>
									</th>
									<th>Name</th>
									<th>Description</th>
									<th class="table-icon-cell">
										<i class="font-icon font-icon-heart"></i>
									</th>
									<th class="table-icon-cell">
										<i class="font-icon font-icon-comment"></i>
									</th>
									<th>Date Created</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="table-check-1"/>
											<label for="table-check-1"></label>
										</div>
									</td>
									<td>
										Last quarter revene
										<span class="hint-circle"
											  data-toggle="tooltip"
											  data-placement="top"
											  title="Help">?</span>
									</td>
									<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
									<td class="table-icon-cell">
										<i class="font-icon font-icon-heart"></i>
										5
									</td>
									<td class="table-icon-cell">
										<i class="font-icon font-icon-comment"></i>
										24
									</td>
									<td class="table-date">6 minets ago <i class="font-icon font-icon-clock"></i></td>
									<td class="table-photo">
										<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="table-check-2"/>
											<label for="table-check-2"></label>
										</div>
									</td>
									<td>
										Expenses in 2013
										<span class="hint-circle red"
											  data-toggle="tooltip"
											  data-placement="top"
											  title="Sample tips with long text into multiple lines. Sample tips with long text into multiple lines.">?</span>
									</td>
									<td class="color-blue-grey-lighter"></td>
									<td class="table-icon-cell">
										<i class="font-icon font-icon-heart"></i>
										5
									</td>
									<td class="table-icon-cell">
										<i class="font-icon font-icon-comment"></i>
										24
									</td>
									<td class="table-date">2 hours ago <i class="font-icon font-icon-clock"></i></td>
									<td class="table-photo">
										<img src="{{ asset('build/img/photo-64-2.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Todd<br/>Fox">
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="table-check-3"/>
											<label for="table-check-3"></label>
										</div>
									</td>
									<td>
										Accounting
										<span class="hint-circle green"
											  data-toggle="tooltip"
											  data-placement="top"
											  title="Help">?</span>
									</td>
									<td class="color-blue-grey-lighter">Lorem ipsum dolor sit amet</td>
									<td class="table-icon-cell">
										<i class="font-icon font-icon-heart"></i>
										5
									</td>
									<td class="table-icon-cell">
										<i class="font-icon font-icon-comment"></i>
										24
									</td>
									<td class="table-date">5 hour ago <i class="font-icon font-icon-clock"></i></td>
									<td class="table-photo">
										<img src="{{ asset('build/img/photo-64-3.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Raina<br/>Cabrera">
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="table-check-4"/>
											<label for="table-check-4"></label>
										</div>
									</td>
									<td>
										Srtarbucks orders
										<span class="hint-circle blue"
											  data-toggle="tooltip"
											  data-placement="top"
											  title="Help">?</span>
										<span class="hint-circle orange"
											  data-toggle="tooltip"
											  data-placement="top"
											  title="Help">?</span>
										<span class="hint-circle purple"
											  data-toggle="tooltip"
											  data-placement="top"
											  title="Help">?</span>
									</td>
									<td class="color-blue-grey-lighter">Ut euismod augue ut nulla aliquam? eu congue ipsum eusmod</td>
									<td class="table-icon-cell">
										<i class="font-icon font-icon-heart"></i>
										5
									</td>
									<td class="table-icon-cell">
										<i class="font-icon font-icon-comment"></i>
										24
									</td>
									<td class="table-date">12 hours ago <i class="font-icon font-icon-clock"></i></td>
									<td class="table-photo">
										<img src="{{ asset('build/img/photo-64-4.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Lilian<br/>Leon">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!--.box-typical-body-->
			</section><!--.box-typical-->

			<table id="table-edit" class="table table-bordered table-hover">
				<thead>
				<tr>
					<th width="1">
						#
					</th>
					<th>Name</th>
					<th>Description</th>
					<th class="table-icon-cell">
						<i class="font-icon font-icon-heart"></i>
					</th>
					<th class="table-icon-cell">
						<i class="font-icon font-icon-comment"></i>
					</th>
					<th width="120">Date Created</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Last quarter revene</td>
						<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minets ago</td>
						<td class="table-photo">
							<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Last quarter revene</td>
						<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minets ago</td>
						<td class="table-photo">
							<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Last quarter revene</td>
						<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minets ago</td>
						<td class="table-photo">
							<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Last quarter revene</td>
						<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minets ago</td>
						<td class="table-photo">
							<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Last quarter revene</td>
						<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minets ago</td>
						<td class="table-photo">
							<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Last quarter revene</td>
						<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minets ago</td>
						<td class="table-photo">
							<img src="{{ asset('build/img/photo-64-1.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Nicholas<br/>Barrett">
						</td>
					</tr>
				</tbody>
			</table>

			<br>
			<p>Example of mini table sizing using <code>.table-sm</code> class added to the <code>.table</code>.</p>
			<table id="table-sm" class="table table-bordered table-hover table-sm">
				<thead>
				<tr>
					<th width="1">
						#
					</th>
					<th>Name</th>
					<th>Description</th>
					<th class="table-icon-cell">
						<i class="font-icon font-icon-heart"></i>
					</th>
					<th class="table-icon-cell">
						<i class="font-icon font-icon-comment"></i>
					</th>
					<th width="120">Date Created</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Last quarter revene</td>
					<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
					<td class="table-icon-cell">5</td>
					<td class="table-icon-cell">24</td>
					<td>6 minets ago</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Last quarter revene</td>
					<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
					<td class="table-icon-cell">5</td>
					<td class="table-icon-cell">24</td>
					<td>6 minets ago</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Last quarter revene</td>
					<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
					<td class="table-icon-cell">5</td>
					<td class="table-icon-cell">24</td>
					<td>6 minets ago</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Last quarter revene</td>
					<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
					<td class="table-icon-cell">5</td>
					<td class="table-icon-cell">24</td>
					<td>6 minets ago</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Last quarter revene</td>
					<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
					<td class="table-icon-cell">5</td>
					<td class="table-icon-cell">24</td>
					<td>6 minets ago</td>
				</tr>
				</tbody>
			</table>

			<br>
			<p>Example of extra mini table sizing using <code>.table-xs</code> class added to the <code>.table</code>.</p>

			<table id="table-xs" class="table table-bordered table-hover table-xs">
				<thead>
				<tr>
					<th width="1">
						#
					</th>
					<th>Name</th>
					<th>Description</th>
					<th class="table-icon-cell">
						<i class="font-icon font-icon-heart"></i>
					</th>
					<th class="table-icon-cell">
						<i class="font-icon font-icon-comment"></i>
					</th>
					<th width="120">Date Created</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Last quarter revene</td>
					<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
					<td class="table-icon-cell">5</td>
					<td class="table-icon-cell">24</td>
					<td>6 minets ago</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Last quarter revene</td>
					<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
					<td class="table-icon-cell">5</td>
					<td class="table-icon-cell">24</td>
					<td>6 minets ago</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Last quarter revene</td>
					<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
					<td class="table-icon-cell">5</td>
					<td class="table-icon-cell">24</td>
					<td>6 minets ago</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Last quarter revene</td>
					<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
					<td class="table-icon-cell">5</td>
					<td class="table-icon-cell">24</td>
					<td>6 minets ago</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Last quarter revene</td>
					<td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013, whith...</td>
					<td class="table-icon-cell">5</td>
					<td class="table-icon-cell">24</td>
					<td>6 minets ago</td>
				</tr>
				</tbody>
			</table>
		</div><!--.container-fluid-->
    </div><!--.page-content-->
    
	<script src="{{ asset('build/js/lib/peity/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('build/js/lib/table-edit/jquery.tabledit.min.js') }}"></script>
	<script>
		$(function () {
			$(".bar-chart").peity("bar",{
				delimiter: ",",
				fill: ["#919fa9"],
				height: 16,
				max: null,
				min: 0,
				padding: 0.1,
				width: 384
			});

			$('#table-edit').Tabledit({
				url: 'example.php',
				columns: {
					identifier: [0, 'id'],
					editable: [[1, 'name'], [2, 'description']]
				}
			});
		});
	</script>
@endsection
