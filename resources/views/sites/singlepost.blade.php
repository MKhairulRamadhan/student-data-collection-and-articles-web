@extends('layout.frontMaster')

@section('content')
    <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog Details Page				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Blog </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Blog Details Page</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<div class="user-details row">
                                        <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{ $post->user->name }}</a> <span class="lnr lnr-user"></span></p>
                                        <!--$post->created_at->format('d M Y')-->
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{ $post->created_at->diffForHumans() }}</a> <span class="lnr lnr-calendar-full"></span></p>
										<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
										<p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span></p>
										<ul class="social-links col-lg-12 col-md-12 col-6">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-github"></i></a></li>
											<li><a href="#"><i class="fa fa-behance"></i></a></li>
										</ul>																				
									</div>
								</div>
								<div class="col-lg-9 col-md-9">
									<h3 class="mt-20 mb-20">{{ $post->title }}</h3>
									<p class="excert">
                                        {{ $post->content }}
                                    </p>
								</div>
							</div>

							<div class="navigation-area">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="thumb">
											<a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
										</div>
										<div class="arrow">
											<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
										</div>
										<div class="detials">
											<p>Prev Post</p>
											<a href="#"><h4>Space The Final Frontier</h4></a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Post</p>
											<a href="#"><h4>Telescopes 101</h4></a>
										</div>
										<div class="arrow">
											<a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
										</div>
										<div class="thumb">
											<a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
										</div>										
									</div>									
								</div>
							</div>
							
							<div class="comments-area">
								<h4>05 Comments</h4>
								<div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="img/blog/c1.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">Emilly Blunt</a></h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                               <a href="" class="btn-reply text-uppercase">reply</a> 
                                        </div>
                                    </div>
                                </div>	
								<div class="comment-list left-padding">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="img/blog/c2.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">Elsie Cunningham</a></h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                               <a href="" class="btn-reply text-uppercase">reply</a> 
                                        </div>
                                    </div>
                                </div>	
								<div class="comment-list left-padding">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="img/blog/c3.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">Annie Stephens</a></h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                               <a href="" class="btn-reply text-uppercase">reply</a> 
                                        </div>
                                    </div>
                                </div>	
								<div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="img/blog/c4.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">Maria Luna</a></h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                               <a href="" class="btn-reply text-uppercase">reply</a> 
                                        </div>
                                    </div>
                                </div>	
								<div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="img/blog/c5.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">Ina Hayes</a></h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                               <a href="" class="btn-reply text-uppercase">reply</a> 
                                        </div>
                                    </div>
                                </div>	                                             				
							</div>
							<div class="comment-form">
								<h4>Leave a Comment</h4>
								<form>
									<div class="form-group form-inline">
									  <div class="form-group col-lg-6 col-md-12 name">
									    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
									  </div>
									  <div class="form-group col-lg-6 col-md-12 email">
									    <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
									  </div>										
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									</div>
									<a href="#" class="primary-btn text-uppercase">Post Comment</a>	
								</form>
							</div>
						</div>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" action="#">
			                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
								<div class="single-sidebar-widget user-info-widget">
									<img src="img/blog/user-info.png" alt="">
									<a href="#"><h4>{{ $post->user->name }}</h4></a>
									<p>
										{{ $post->user->role }}
									</p>
									<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-github"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
									<p>
										Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.
									</p>
								</div>
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Popular Posts</h4>
									<div class="popular-post-list">
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp1.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp2.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>The Amazing Hubble</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp3.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Astronomy Or Astrology</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp4.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Asteroids telescope</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>															
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
								</div>
								<div class="single-sidebar-widget post-category-widget">
									<h4 class="category-title">Post Catgories</h4>
									<ul class="cat-list">
										<li>
											<a href="#" class="d-flex justify-content-between">
												<p>Technology</p>
												<p>37</p>
											</a>
										</li>
										<li>
											<a href="#" class="d-flex justify-content-between">
												<p>Lifestyle</p>
												<p>24</p>
											</a>
										</li>
										<li>
											<a href="#" class="d-flex justify-content-between">
												<p>Fashion</p>
												<p>59</p>
											</a>
										</li>
										<li>
											<a href="#" class="d-flex justify-content-between">
												<p>Art</p>
												<p>29</p>
											</a>
										</li>
										<li>
											<a href="#" class="d-flex justify-content-between">
												<p>Food</p>
												<p>15</p>
											</a>
										</li>
										<li>
											<a href="#" class="d-flex justify-content-between">
												<p>Architecture</p>
												<p>09</p>
											</a>
										</li>
										<li>
											<a href="#" class="d-flex justify-content-between">
												<p>Adventure</p>
												<p>44</p>
											</a>
										</li>															
									</ul>
								</div>					
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
@endsection