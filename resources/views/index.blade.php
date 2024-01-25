@extends('layout.layout')

@section('container')
		<!--// Main Banner \\-->
		<div class="sportsmagazine-banner">

            <!--// Slider \\-->
            <div class="sportsmagazine-banner-one">
                <div class="sportsmagazine-banner-one-layer">
                    <img src="{{url('files/extra-images/banner-1.jpg')}}" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1><strong>Welcome to the Food System</strong></h1>
                                        <p>Food system is an inspiring example of how individuals can transform the way we grow, distribute, and consume food. 
                                            It stands as a testament to the power of mindful choices 
                                            and serves as a beacon of hope for a healthier, more sustainable future.</p>
                                        <a href="#" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                    <div class="sportsmagazine-banner-thumb"> <img src="{{url('files/extra-images/banner-thumb-1.png')}}" alt=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                </div>
            </div>
            
        </div>
		
                        <div class="sportsmagazine-fancy-title"><h2>Latest Blogs</h2></div> 
                           
                            <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="/blogdetal"><img src="{{url('files/extra-images/latest-blog-1.jpg')}}" alt=""></a>
                                            <figcaption>
                                                <span><small>Zinger</small></span>
                                                <a href="/blogdetail" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="/blogdetail">In a bun, a handheld delight,
Burgers, a culinary pleasure, day or night.
Charred edges, a savory charade,
Accompanied by fries, a perfect upgrade. </h2>
<p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="/blogdetail" class="sportsmagazine-blog-grid-thumb"><img src="extra-images/blog-thumb-1.jpg" alt=""> Julia Martyn</a>
                                            <ul>
                                                <li><i class="fa fa-thumbs-o-up"></i> <a href="#">320</a></li>
                                                <li><i class="fa fa-eye"></i> <a href="#">840</a></li>
                                                <li><i class="fa fa-share-alt"></i> <a href="#">89</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-6 sportsmagazine-the-league">
                                        <figure>
                                            <a href="/blogdetail"><img src="{{url('files/extra-images/latest-blog-2.jpg')}}" alt=""></a>
                                            <figcaption>
                                                <span><small>Pizza</small></span>
                                                <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="/blogdetail">Shared at parties or enjoyed alone,
Pizza, a dish that has truly grown.
From Italy's streets to worldwide acclaim,
A timeless creation that forever remains.</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="/blogdetail" class="sportsmagazine-blog-grid-thumb"><img src="{{url('files/extra-images/blog-thumb-1.jpg')}}" alt=""> Julia Martyn</a>
                                            <ul>
                                                <li><i class="fa fa-thumbs-o-up"></i> <a href="#">320</a></li>
                                                <li><i class="fa fa-eye"></i> <a href="#">840</a></li>
                                                <li><i class="fa fa-share-alt"></i> <a href="#">89</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                           
                                <div class="col-md-6">
                                    <div class="sportsmagazine-blog sportsmagazine-blog-list">
                                        <ul class="row">
                                            <li class="col-md-12">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>Zinger</span>
                                                    <h6><a href="/blogdetail">Burgers, a symbol of comfort and delight,
An indulgence that satisfies with every bite.</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                            <li class="col-md-12 playoffs">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>Pizaa</span>
                                                    <h6><a href="/blogdetail">From Italy's streets to worldwide acclaim,
A timeless creation that forever remains.</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                            <li class="col-md-12 playoffs">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>Ice Creem</span>
                                                    <h6><a href="/blogdetail">From Italy's streets to worldwide acclaim,
A timeless creation that forever remains.</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--// Blog's \\-->
					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
        @endsection