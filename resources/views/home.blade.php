@extends('layouts.master')
@section('section-one')
<div class="col-md-5 col-sm-12">
	<div class="post-carousel owl-carousel">
		<div class="featured-post" style="background-image: url(img/slider-post-1.jpg);">
			<div class="post-info">
				<a href="#" class="cat-name tt-u">World</a>
				<h3 class="fw-6 fz-16"><a href="#" class="text-white">Michel Brown Talks About American People.</a></h3>
			</div>
		</div>
		<div class="featured-post" style="background-image: url(img/slider-post-1.jpg);">
			<div class="post-info">
				<a href="#" class="cat-name tt-u">World</a>
				<h3 class="fw-6 fz-16"><a href="#" class="text-white">Michel Brown Talks About American People.</a></h3>
			</div>
		</div>
	</div><!-- /.post-carousel -->
</div>
<div class="col-md-3 col-sm-6">
	<div class="post-carousel owl-carousel">
		<div class="featured-post" style="background-image: url(img/slider-post-2.jpg);">
			<div class="post-info">
				<a href="#" class="cat-name tt-u">Sports</a>
				<h3 class="fw-6 fz-16"><a href="#" class="text-white">Improve Your Health And Stamina With Cycling.</a></h3>
			</div>
		</div>
		<div class="featured-post" style="background-image: url(img/slider-post-2.jpg);">
			<div class="post-info">
				<a href="#" class="cat-name tt-u">Sports</a>
				<h3 class="fw-6 fz-16"><a href="#" class="text-white">Improve Your Health And Stamina With Cycling.</a></h3>
			</div>
		</div>
	</div><!-- /.post-carousel -->
</div>
<div class="col-md-4 col-sm-6">
	<div class="top-wrap mb-10">
		<div class="post-carousel owl-carousel">
			<div class="featured-post" style="background-image: url(img/slider-post-3.jpg);">
				<div class="post-info">
					<a href="#" class="cat-name tt-u">World</a>
					<h3 class="fw-6 fz-16"><a href="#" class="text-white">An Army or Ground Force is a Fighting Force That Fights Primarily On Land.</a></h3>
				</div>
			</div>
			<div class="featured-post" style="background-image: url(img/slider-post-3.jpg);">
				<div class="post-info">
					<a href="#" class="cat-name tt-u">World</a>
					<h3 class="fw-6 fz-16"><a href="#" class="text-white">An Army or Ground Force is a Fighting Force That Fights Primarily On Land.</a></h3>
				</div>
			</div>
		</div><!-- /.post-carousel -->
	</div>
	<div class="bottom-wrap">
		<div class="post-carousel owl-carousel">
			<div class="featured-post" style="background-image: url(img/slider-post-4.jpg);">
				<div class="post-info">
					<a href="#" class="cat-name tt-u">World</a>
					<h3 class="fw-6 fz-16"><a href="#" class="text-white">Alex Helis Confirms Mystery Pop Singer On New Music Album.</a></h3>
				</div>
			</div>
			<div class="featured-post" style="background-image: url(img/slider-post-4.jpg);">
				<div class="post-info">
					<a href="#" class="cat-name tt-u">World</a>
					<h3 class="fw-6 fz-16"><a href="#" class="text-white">Alex Helis Confirms Mystery Pop Singer On New Music Album.</a></h3>
				</div>
			</div>
		</div><!-- /.post-carousel -->
	</div>
</div>
@endsection
@section('news-ticker-wrap')
@include('layouts.news-ticker-wrap')
@endsection
@section('section-two')
 <div class="news-block padding-15 bg-white bd-grey mb-40">
    <h2 class="block-heading mb-40">Trending News</h2>
    <div class="grid-posts">
        <div class="col-xs-6 padding-10">
            <div class="grid-post">
                <a href="#" class="mb-20"><img src="img/trending-1.jpg" alt="Tranding News"></a>
                <div class="post-info padding-15 ptb-20 bd-grey">
                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for business company.</a></h4>
                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                </div>
            </div>
        </div><!-- post -1 -->
        <div class="col-xs-6 padding-10">
            <div class="grid-post">
                <a href="#" class="mb-20"><img src="img/trending-2.jpg" alt="Tranding News"></a>
                <div class="post-info padding-15 ptb-20 bd-grey">
                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for business company.</a></h4>
                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                </div>
            </div>
        </div><!-- post -2 -->
        <div class="col-xs-6 padding-10">
            <div class="grid-post">
                <a href="#" class="mb-20"><img src="img/trending-3.jpg" alt="Tranding News"></a>
                <div class="post-info padding-15 ptb-20 bd-grey">
                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for business company.</a></h4>
                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                </div>
            </div>
        </div><!-- post -3 -->
        <div class="col-xs-6 padding-10">
            <div class="grid-post">
                <a href="#" class="mb-20"><img src="img/trending-4.jpg" alt="Tranding News"></a>
                <div class="post-info padding-15 ptb-20 bd-grey">
                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for business company.</a></h4>
                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                </div>
            </div>
        </div><!-- post -4 -->
    </div><!-- /.grid-posts -->
</div><!-- /.news-block -->

<div class="news-block padding-15 bg-white bd-grey mb-40">
    <h2 class="block-heading mb-40">World News</h2>
    <div class="two-col-posts">
        <div class="col-md-6 padding-10">
            <div class="post-item">
                <a href="#" class="mb-20"><img src="img/world-1.jpg" alt="World News"></a>
                <div class="post-info padding-15 ptb-20 bd-grey">
                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for business company.</a></h4>
                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 padding-10">
            <div class="small-posts">
                <div class="sm-post-item">
                    <img src="img/world-2.jpg" alt="World News">
                    <div class="sm-post-content bd-grey">
                       <h4 class="fz-14"><a href="#">William braynt went to visit.</a></h4>
                        <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
                    </div>
                </div>
                <div class="sm-post-item">
                    <img src="img/world-3.jpg" alt="World News">
                    <div class="sm-post-content bd-grey">
                       <h4 class="fz-14"><a href="#">White house press secretary Spicer briefs.</a></h4>
                        <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
                    </div>
                </div>
                <div class="sm-post-item">
                    <img src="img/world-4.jpg" alt="World News">
                    <div class="sm-post-content bd-grey">
                       <h4 class="fz-14"><a href="#">Expert tips on how to get a pay rise business.</a></h4>
                        <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .news-block -->

<div class="news-block padding-15 bg-white bd-grey mb-40">
    <h2 class="block-heading mb-40">Featured Videos</h2>
    <div class="side-tab">
        
        <div class="col-md-6 padding-10">
            <div class="tab-content">
                <div class="tab-pane v-player fade in active" id="video-1">
                    <iframe src="https://player.vimeo.com/video/39524612" allowfullscreen></iframe>
                </div> <!-- /#video-1 -->
                <div class="tab-pane v-player fade in" id="video-2">
                    <iframe src="https://player.vimeo.com/video/39524612" allowfullscreen></iframe>
                </div> <!-- /#video-2 -->
                <div class="tab-pane v-player fade in" id="video-3">
                    <iframe src="https://player.vimeo.com/video/39524612" allowfullscreen></iframe>
                </div> <!-- /#video-3 -->
                <div class="tab-pane v-player fade in" id="video-4">
                    <iframe src="https://player.vimeo.com/video/39524612" allowfullscreen></iframe>
                </div> <!-- /#video-4 -->
            </div>
        </div>
        <div class="col-md-6 padding-10">
            <ul class="video-thumbs">
                <li class="active">
                  <img src="img/video-1.jpg" alt="Featured Video">
                   <a href="#video-1" data-toggle="tab">
                       <div class="display-table">
                            <div class="table-cell">
                                <i class="ti-control-play"></i>
                            </div>
                       </div>
                    </a>
                </li>
                <li>
                   <img src="img/video-2.jpg" alt="Featured Video">
                   <a href="#video-2" data-toggle="tab">
                        <div class="display-table">
                            <div class="table-cell">
                                <i class="ti-control-play"></i>
                            </div>
                       </div>
                    </a>
                </li>
                <li>
                    <img src="img/video-3.jpg" alt="Featured Video">
                   <a href="#video-3" data-toggle="tab">
                        <div class="display-table">
                            <div class="table-cell">
                                <i class="ti-control-play"></i>
                            </div>
                       </div>
                    </a>
                </li>
                <li>
                    <img src="img/video-4.jpg" alt="Featured Video">
                   <a href="#video-4" data-toggle="tab">
                        <div class="display-table">
                            <div class="table-cell">
                                <i class="ti-control-play"></i>
                            </div>
                       </div>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
</div><!-- /.news-block -->

<div class="banner-in-content padding-15 bg-white bd-grey ov-hidden mb-40">
    <a href="#"><img src="img/banner.jpg" alt="Banner AD"></a>
</div><!-- /.banner-in-content -->

<div class="news-block padding-15 bg-white bd-grey">
    <h2 class="block-heading mb-40">Sports News</h2>
    <div class="news-items">
        <div class="col-xs-12 padding-10">
            <div class="list-post-item">
                <a href="#" class="img-thumb"><img src="img/sports-1.jpg" alt="Sports News"></a>
                <div class="post-info padding-15 ptb-20 bd-grey">
                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for local business company.</a></h4>
                    <p class="fz-13">Stay focused and remember we design the best WordPress News and Magazine Themes. It’s the ones closest to you that want to…</p>
                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-6 padding-10">
            <a href="#"><img src="img/sports-2.jpg" class="img-full" alt="Sports News"></a>
        </div>
        <div class="col-md-3 col-xs-6 padding-10">
            <a href="#"><img src="img/sports-3.jpg" class="img-full" alt="Sports News"></a>
        </div>
        <div class="col-md-3 col-xs-6 padding-10">
            <a href="#"><img src="img/sports-4.jpg" class="img-full" alt="Sports News"></a>
        </div>
        <div class="col-md-3 col-xs-6 padding-10">
            <a href="#"><img src="img/sports-5.jpg" class="img-full" alt="Sports News"></a>
        </div>
    </div>
</div><!-- /.news-block -->
@endsection
@section('section-three')
<div class="sidebar-wrap">
	<div class="single-sidebar bd-grey bg-white">
	    <a href="#"><img src="img/banner-2.jpg" alt="Sidebar Ad" class="img-w1"></a>
	</div><!-- /.single-sidebar -->

	<div class="single-sidebar no-padding">
	    <a href="https://www.accuweather.com/en/us/new-york-ny/10007/weather-forecast/349727" class="aw-widget-legal">
	    <!--
	    By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
	    -->
	    </a><div id="awcc1499974479079" class="aw-widget-current"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1499974479079"></div><script type="text/javascript" src="../../../oap.accuweather.com/launch.js"></script>
	</div><!-- /.single-sidebar -->

	<div class="single-sidebar no-padding">
	    <div class="side-tab">
	        <ul class="tab-menu mb-15">
	            <li class="active"><a href="#recent" data-toggle="tab">Recent</a></li>
	            <li><a href="#popular" data-toggle="tab">Popular</a></li>
	            <li><a href="#comments" data-toggle="tab">Comments</a></li>
	        </ul>
	        <div class="tab-content bd-grey padding-15">
	            <div class="tab-pane fade in active" id="recent">
	              
	               <ul class="list-post-items">
	                   <li>
	                       <img src="img/tab-1.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">William Braynt went to visit the US.</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	                   <li>
	                       <img src="img/tab-2.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">Style icon angelina goes to take oscar.</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	                   <li>
	                       <img src="img/tab-3.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">How to become a wildlife photographer?</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	                   <li>
	                       <img src="img/tab-4.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">linin park singer is no more. he is top in the world.</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	               </ul>
	                
	            </div> <!-- /#recent -->
	            <div class="tab-pane fade in" id="popular">
	               
	                <ul class="list-post-items">
	                   <li>
	                       <img src="img/tab-1.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">William Braynt went to visit the grabl</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	                   <li>
	                       <img src="img/tab-2.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">William Braynt went to visit the grabl</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	                   <li>
	                       <img src="img/tab-3.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">William Braynt went to visit the grabl</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	                   <li>
	                       <img src="img/tab-4.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">William Braynt went to visit the grabl</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	               </ul>
	               
	            </div> <!-- /#popular -->
	            <div class="tab-pane fade in" id="comments">
	               
	                <ul class="list-post-items">
	                   <li>
	                       <img src="img/tab-1.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">William Braynt went to visit the grabl</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	                   <li>
	                       <img src="img/tab-2.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">William Braynt went to visit the grabl</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	                   <li>
	                       <img src="img/tab-3.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">William Braynt went to visit the grabl</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	                   <li>
	                       <img src="img/tab-4.jpg" alt="Image">
	                        <div class="list-post-content bd-grey">
	                           <h4 class="fz-14"><a href="#">William Braynt went to visit the grabl</a></h4>
	                           
	                            <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
	                        </div>
	                   </li>
	               </ul>
	               
	            </div> <!-- /#comments -->
	        </div>
	    </div>
	</div><!-- /.single-sidebar -->

	<div class="single-sidebar">
	    <h3 class="fw-8 fz-18 tt-u mb-30">News Category</h3>
	    <ul class="cat-list">
	        <li><a href="#">World</a></li>
	        <li><a href="#">Travel</a></li>
	        <li><a href="#">Foods</a></li>
	        <li><a href="#">Creative</a></li>
	        <li><a href="#">Sports</a></li>
	        <li><a href="#">Racing</a></li>
	        <li><a href="#">Technology</a></li>
	    </ul>
	</div><!-- /.single-sidebar -->

	<div class="single-sidebar">
	    <h3 class="fw-8 fz-18 tt-u mb-30">Subscribe News24</h3>
	    <form action="#" class="subscribe-form">
	        <input type="email" name="email" placeholder="Enter Your Email">
	        <input type="submit" value="Subscribe">
	    </form>
	</div><!-- /.single-sidebar -->

	<div class="single-sidebar">
	    <div id="calendar_wrap" class="calendar_wrap">
	        <table id="wp-calendar">
	            <caption>July 2017</caption>
	            <thead>
	                <tr>
	                    <th scope="col" title="Monday">M</th>
	                    <th scope="col" title="Tuesday">T</th>
	                    <th scope="col" title="Wednesday">W</th>
	                    <th scope="col" title="Thursday">T</th>
	                    <th scope="col" title="Friday">F</th>
	                    <th scope="col" title="Saturday">S</th>
	                    <th scope="col" title="Sunday">S</th>
	                </tr>
	            </thead>

	            <tr>
	                <td colspan="3" id="prev" class="pad">&nbsp;</td>
	                <td class="pad">&nbsp;</td>
	                <td colspan="3" id="next" class="pad">&nbsp;</td>
	            </tr>

	            <tbody>
	                <tr>
	                    <td colspan="5" class="pad">&nbsp;</td><td>1</td><td>2</td>
	                </tr>
	                <tr>
	                    <td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td><a href="http://cracktheme.com/codehube/2017/07/08/" aria-label="Posts published on July 8, 2017">8</a></td><td>9</td>
	                </tr>
	                <tr>
	                    <td>10</td><td>11</td><td><a href="http://cracktheme.com/codehube/2017/07/12/" aria-label="Posts published on July 12, 2017">12</a></td><td><a href="http://cracktheme.com/codehube/2017/07/13/" aria-label="Posts published on July 13, 2017">13</a></td><td>14</td><td>15</td><td>16</td>
	                </tr>
	                <tr>
	                  <td>17</td><td>18</td><td>19</td><td id="today">20</td><td>21</td><td>22</td><td>23</td>    
	                </tr>
	                <tr>
	                 <td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td>
	                </tr>
	                <tr>
	                    <td>31</td>
	                    <td class="pad" colspan="6">&nbsp;</td>
	                </tr>
	            </tbody>
	        </table>
	    </div>
	</div><!-- /.single-sidebar -->
</div><!-- /.sidebar-wrap -->                       
@endsection