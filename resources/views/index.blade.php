@include('include.header')


	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{route('post.show', ['slug' => $first_post->slug])}}"><img src="{{$first_post->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('category.show', ['id' => $first_post->category->id])}}">{{$first_post->category->name}}</a>
							</div>
							<h3 class="post-title title-lg"><a href="#">{{$first_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="#">{{$first_post->user->name}}</a></li>
								<li>{{$first_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
                    <a class="post-img" href="{{route('post.show',['slug'=>$second_post->slug])}}"><img src="{{$second_post->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('category.show', ['id' => $second_post->category->id])}}">{{$second_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="#">{{$second_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$second_post->user->name}}</a></li>
								<li>{{$second_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{route('post.show',['slug'=>$third_post->slug])}}"><img src="{{$third_post->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
                                    <a href="{{route('category.show', ['id' => $third_post->category->id])}}">{{$third_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="#">{{$third_post->title}}</a></h3>
							<ul class="post-meta">
							<li><a href="author.html">{{$third_post->user->name}}</a></li>
								<li>{{$third_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>
                        <!-- post -->
                         @foreach ($posts as $post)
                        <div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{route('post.show',['slug'=>$post->slug])}}"><img src="{{$post->featrued}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="{{route('category.show', ['id' => $post->category->id])}}">{{$post->category->name}}</a>
									</div>
									<h3 class="post-title"><a href="#">{{$post->title}}</a></h3>
									<ul class="post-meta">
									<li><a href="author.html">{{$post->user->name}}</a></li>
										<li>{{$post->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
                        </div>
                        <div class="clearfix visible-md visible-lg"></div>
                        @endforeach
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-8">
                            <div class="section-row loadmore text-center">
                                <a href="#" class="primary-button">Load More</a>
                            </div>
				        </div>
                    </div> --}}

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">{{$ruby_on_rails->name}}</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($ruby_on_rails->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
                        <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="{{route('post.show', ['slug' => $post->slug])}}"><img src="{{$post->featrued}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="{{route('category.show', ['id' => $post->category->id])}}">{{$post->category->name}}</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="#">{{$post->title}}</a></h3>
                                        <ul class="post-meta">
                                   {{--   --}}
                                      <li><a href="author.html">{{$post->user->name}}</a></li> 
                                            <li>{{$post->created_at->diffForHumans()}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
						<!-- /post -->




					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">{{$laravel->name}}</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($laravel->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
                        <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="{{route('post.show', ['slug' => $post->slug])}}"><img src="{{$post->featrued}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="{{route('category.show', ['id' => $post->category->id])}}">{{$post->category->name}}</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="#">{{$post->title}}</a></h3>
                                        <ul class="post-meta">
                                            {{--  --}}
                                            <li><a href="author.html">{{$post->user->name}}</a></li>
                                            <li>{{$post->created_at->diffForHumans()}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
						<!-- /post -->




					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">{{$django_python->name}}</h2>
							</div>
						</div>
                        <!-- post -->
                        @foreach ($django_python->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
                        <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="{{route('post.show', ['slug' => $post->slug])}}"><img src="{{$post->featrued}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">{{$post->category->name}}</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="#">{{$post->title}}</a></h3>
                                        <ul class="post-meta">
                                            {{--  --}}
                                            <li><a href="author.html">{{$post->user->name}}</a></li>
                                            <li>{{$post->created_at->diffForHumans()}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

						<!-- /post -->




					</div>
					<!-- /row -->
				</div>
				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
                                    @foreach ($categories as $category)
                                    <li><a href="{{route('category.show', ['id' => $category->id])}}">{{$category->name}} <span>{{$category->posts->count()}}</span></a></li>
                                    @endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Contact with us</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->

					<!-- post widget -->
					{{-- <div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>

					</div>
					<!-- /post widget --> --}}
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->


@include('include.footer')




</body>

</html>
