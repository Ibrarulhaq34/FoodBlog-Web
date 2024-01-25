@extends('layout.layout')

@section('container')
		<!--// SubHeader \\-->
        <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-contactus-full">
				<div class="container">
					<div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="sportsmagazine-fancy-title-two"><h2>Contact Us At <span></span></h2></div>
                            <div class="sportsmagazine-contactus-info">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <i class="fa fa-phone"></i>
                                        <div class="sportsmagazine-contact-text">
                                            <p> (+92) 123 45 678</p>
                                            <p> 987 65 432</p>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-map-marker"></i>
                                        <div class="sportsmagazine-contact-text">
                                            <p>9907 Salford road, east London</p>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-envelope"></i>
                                        <div class="sportsmagazine-contact-text">
                                            <a href="mailto:name@email.com">info@sports.com</a>
                                            <a href="mailto:name@email.com">abc@mail.com</a>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-fax"></i>
                                        <div class="sportsmagazine-contact-text">
                                            <p> (+92) 123 45 678</p>
                                            <p> 987 65 432</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12"><div class="sportsmagazine-fancy-title-two"><h2>Contact Form <span></span></h2></div></div>
                        <div class="col-md-9">
                            <div class="sportsmagazine-contact-form">
                               <form>
                                    <ul>
                                        <li>
                                            <label>Name:</label>
                                            <p>
                                                <input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" type="text">
                                                <span><i class="fa fa-user"></i></span>
                                            </p>
                                        </li>
                                        <li>
                                            <label>Email:</label>
                                            <p>
                                                <input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" type="text">
                                                <span><i class="fa fa-envelope"></i></span>
                                            </p>
                                        </li>
                                        <li class="full-input">
                                            <label>Message:</label>
                                            <p>
                                                <textarea name="u_msg" placeholder="Type here"></textarea>
                                                <span><i class="fa fa-comment"></i></span>
                                            </p>

                                        </li>
                                        <li>
                                            <p><label><input value="Submit" type="submit"></label></p>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <ul class="sportsmagazine-contact-us-text">
                                <li>
                                    <h4>Send Us Message !!!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Ut ac malesuada antes urabitur lacinia</p>
                                </li>
                                <li>
                                    <h4>Open Practices</h4>
                                    <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Ut ac malesuada antes urabitur lacinia</p>
                                    <time datetime="2008-02-14 20:00">Timings: <span>9:00am to 12:00pm</span></time>
                                </li>
                            </ul>
                        </div>

					</div>
				</div>
			</div>
			
		</div>
		<!--// Main Content \\-->

        @endsection