@extends('layout.layout')

@section('container')
		<!--// SubHeader \\-->
        <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-blogmodren-full">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12">
                            <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                <ul class="row">
                                    @foreach($blogs as $blog)
                                    <li class="col-md-4">
                                        
                                        <section>
                                            <h2>{{ $blog->title }}</h2>
                                            <p>{{ $blog->content }}</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                           
                                            <ul>
                                                <li><i class="fa fa-calendar"></i> {{ $blog->date }}</li>
                                            
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                           
                        </div>


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

@endsection