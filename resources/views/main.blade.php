@extends('layout')
@section('content')
        <!--================Home Banner Area =================-->
        <section class="home_banner_area" id="home">
            <div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="home_left_img">
								<img src="img/banner/banner-left-1.png" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="banner_content">
								<h5>This is me</h5>
								<h2>Jandel Lopez</h2>
								<p>Always learning. Always building. Bringing ideas to life on the web.</p>
								<a class="banner_btn" href="#" id="contactBtn1">Contact Me</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Welcome Area =================-->
        <section class="welcome_area p_120" id="about">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4>About Myself</h4>
        					<p>Web development is my passion because it allows me to combine creativity with technical skills to build functional, user-friendly, and visually appealing websites. I thrive on the challenge of transforming ideas into reality, whether it’s through crafting clean and efficient code, designing intuitive user interfaces, or optimizing performance for a seamless user experience.</p>
        					<div class="row">
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-database"></i>
        								<h4>₱50.00</h4>
        								<p>Total Donation</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h4>5</h4>
        								<p>Total Projects</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4>5</h4>
        								<p>Total Volunteers</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="tools_expert">
        					<h3>Tools Expertness</h3>
        					<div class="skill_main">
								<div class="skill_item">
									<h4>Laravel Filament <span class="counter">75</span>%</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="skill_item">
									<h4>Photoshop <span class="counter">85</span>%</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="skill_item">
									<h4>HTML <span class="counter">70</span>%</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="skill_item">
									<h4>CSS <span class="counter">50</span>%</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="skill_item">
									<h4>PHP <span class="counter">50</span>%</h4>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->

        <!--================Feature Area =================-->
        <section class="feature_area p_120" id="services">
        	<div class="container">
        		<div class="main_title">
        			<h2>Services</h2>
        			<p>Turning ideas into functional, responsive, and user-friendly websites.</p>
        		</div>
        		<div class="feature_inner row">
                    @foreach ($services as $service )
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					{{-- <i class="flaticon-city"></i> --}}
        				<h4>{{ $service->name }}</h4>
        					<p>{{ $service->description }}</p>
        				</div>
        			</div>
                    @endforeach
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->

        <!--================Projects Area =================-->
        <section class="projects_area p_120" id="projects">
        	<div class="container">
        		<div class="main_title">
					<h2>My Recent Completed Projects</h2>
					<p>Turning complex workflows into simple, one solution at a time.</p>
				</div>
				<div class="projects_inner row">
                    @foreach ($projects as $project)
					<div class="col-lg-4 col-sm-6 brand web">
						<div class="projects_item">
							<img class="img-fluid h-64 object-cover rounded-lg shadow" src={{ $project->image }} alt="" >
							<div class="projects_text">
								<a href={{ $project->link }} target="_blank"><h4 style="color: white">{{ $project->name }}</h4></a>
								<p>{{ $project->description }}</p>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
        	</div>
        </section>
        <!--================End Projects Area =================-->

        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120" id="testimonials">
        	<div class="container">
        		<div class="main_title">
        			<h2>Testimonials</h2>
        			<p>Trusted by clients. Appreciated for quality. Here's some feedback I’ve received.</p>
        		</div>
        		<div class="testi_inner">
					<div class="testi_slider owl-carousel">
                        @foreach ($testimonials as $testimonial)
						<div class="item">
                            <div class="testi_item text-center">
                                <div class="container d-flex justify-content-center mb-3">
                                    <img src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}" style="width: 100px; height: 100px; object-fit: cover; border-radius: 100%;">
                                </div>
                                <p>{{ $testimonial->testimonial }}</p>
                                <h4>{{ $testimonial->name }}</h4>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                        @endforeach

					</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->

        <!--================Latest Blog Area =================-->
        <section class="latest_blog_area p_120" id="blogs">
        	<div class="container">
        		<div class="main_title">
        			<h2>Latest Posts from Blog</h2>
        			<p>Welcome to my blog! Here, I share insights, tips, and updates about web development, design, and the projects I’m working on.</p>
        		</div>
        		<div class="row latest_blog_inner">
                    @foreach ($blogs as $blog )
        			<div class="col-lg-4">
        				<div class="l_blog_item">
        					<div class="l_blog_img">
        						<img class="img-fluid" src={{ $blog->featured_image }} alt="">
        					</div>
        					<div class="l_blog_text">
        						<div class="date">
        							<a href="#">{{ $blog->created_at->format('F j, Y') }}   |  By {{ $blog->author }}</a>
        						</div>
        						<a href="javascript:void(0);" onclick="openModal({{ $blog->id }})" ><h4>{{ $blog->title }}</h4></a>
        						<p>{{ Str::of($blog->content)->matchAll('/[^.!?]+[.!?]/')->take(2)->implode(' ') }}</p>
        					</div>
        				</div>
        			</div>
                    <div id="modal-{{ $blog->id }}" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
                        background-color: rgba(0, 0, 0, 0.5); z-index: 9999; justify-content: center; align-items: center;">
                       <div style="background-color: #fff; padding: 24px; border-radius: 8px; width: 90%; max-width: 600px; position: relative;">
                           <button onclick="closeModal({{ $blog->id }})"
                                   style="position: absolute; top: 12px; right: 12px; background: none; border: none; font-size: 24px; cursor: pointer;">
                               &times;
                           </button>
                           <h2 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 8px;">{{ $blog->title }}</h2>
                           <p style="font-size: 0.875rem; color: #6b7280; margin-bottom: 16px;">
                               Published on {{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}
                           </p>
                           <div style="color: #1f2937; line-height: 1.6; max-height: 300px; overflow-y: auto; padding-right: 8px;">
                            {!! nl2br(e($blog->content)) !!}
                        </div>

                       </div>
                   </div>
                      <!-- Modal Script -->
            <script>
                function openModal(id) {
                    document.getElementById('modal-' + id).style.display = 'flex';
                }

                function closeModal(id) {
                    document.getElementById('modal-' + id).style.display = 'none';
                }

                // Optional: Close modal on outside click
                window.addEventListener('click', function(event) {
                    const modals = document.querySelectorAll('.modal');
                    modals.forEach(modal => {
                        if (event.target === modal) {
                            modal.style.display = 'none';
                        }
                    });
                });

            </script>
                    @endforeach
        		</div>
        	</div>
        </section>
        <!--================End Latest Blog Area =================-->
@endsection
