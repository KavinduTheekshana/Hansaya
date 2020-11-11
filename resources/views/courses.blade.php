@extends('layouts.front')
   
@section('content')

		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>අපගේ පඨමාලා</h1>
				<ul class="page-depth">
					<li><a href="index.html">සිංහල හංසයා</a></li>
					<li><a href="teachers.html">අපගේ පඨමාලා</a></li>
				</ul>
			</div>
		</section>
		<!-- End page-banner-section -->

		<!-- portfolio-section 
			================================================== -->
            <section class="portfolio-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<div class="sidebar">
							<div class="filter-widget widget">
								<h2>Filter Controls</h2>
								<ul class="filter">
									<li><a class="active" href="#" data-filter="*">All</a></li>
									<li><a href="#" data-filter=".campus">Campus Images</a></li>
									<li><a href="#" data-filter=".university">Nature of University</a></li>
									<li><a href="#" data-filter=".students">Students Learning</a></li>
									<li><a href="#" data-filter=".travelling">Travelling with Teachers</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-8">
						<div class="portfolio-box iso-call" style="padding-top: 15px;">



                        <div class="events-post students">
								<div class="event-inner-content">
									<div class="top-part">
										<div class="date-holder">
											<div class="date">
                                            <i class="fa fa-calendar fa-10x" style="font-size: 1.5em;"></i>
											</div>
										</div>
										<div class="content">
											<div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 6:00 am - 12:00 pm
												</span>
												<span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
											</div>
											<h2 class="title"><a href="#">Summer High School Journalism Camp Registration Form</a></h2>
										</div>
									</div>
								</div>
							</div>

							

							


						</div>
					</div>
				</div>
					
			</div>
		</section>
		<!-- End portfolio section -->

        @endsection