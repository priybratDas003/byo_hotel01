<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>-->

<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />-->
<link rel="stylesheet" type="text/css" href="booking_form_star.css">
<script src="http://fasotrip.com/byo_hotel/assets/frontend/js/booking_form_star.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<link href="https://fonts.googleapis.com/css?family=Poppins:400" rel="stylesheet">
<!--===================================================================new css=========================================-->
<style>

.img-circle {
    border-radius: 50%;
}

.img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
    display: block;
    max-width: 100%;
    height: auto;
}

.thumbnail>img, .thumbnail a>img {
    margin-right: auto;
    margin-left: auto;
}
    #t-cards {
    margin-top: 80px;
    padding-bottom: 80px;
      background: #f9f9f9;
          position: unset;
}
.panel-header a{
   font-size: 16px! important;
    color: #676767! important;
    font-weight: 500;
}

small{
    font-size: 16px! important;
    color: #676767! important;
}
/********************************/
/*          Panel cards         */
/********************************/
.panel.panel-card {
    position: relative;
    height: 241px;
    border: none;
    overflow: hidden;
    border-radius: 10px;
}
.panel.panel-card .panel-heading {
    position: relative;
    z-index: 2;
    height: 150px;
    border-bottom-color: #fff;
    overflow: hidden;
    
    -webkit-transition: height 600ms ease-in-out;
            transition: height 600ms ease-in-out;
}
.panel.panel-card .panel-heading img {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    width: 120%;
    
    -webkit-transform: translate3d(-50%,-50%,0);
            transform: translate3d(-50%,-50%,0);
}
.panel.panel-card .panel-heading button {
    position: absolute;
    top: 10px;
    right: 15px;
    display:none;
    z-index: 3;
}
.panel.panel-card .panel-figure {
    position: absolute;
    top: auto;
    left: 50%;
    z-index: 3;
    width: 70px;
    height: 70px;
    background-color: #fff;
    border-radius: 50%;
    opacity: 1;
    -webkit-box-shadow: 0 0 0 3px #fff;
            box-shadow: 0 0 0 3px #fff;
    
    -webkit-transform: translate3d(-50%,-50%,0);
            transform: translate3d(-50%,-50%,0);
    
    -webkit-transition: opacity 400ms ease-in-out;
            transition: opacity 400ms ease-in-out;
}

.panel.panel-card .panel-body {
    padding-top: 40px;
    padding-bottom: 20px;
    background: #e9e9e959;
    box-shadow: 15px -2px 7px 3px #b7b7b7;
    -webkit-transition: padding 400ms ease-in-out;
            transition: padding 400ms ease-in-out;
} 

.panel.panel-card .panel-thumbnails {
    padding: 0 15px 20px;
    display: none;
}
.panel-thumbnails .thumbnail {
    width: 60px;
    max-width: 100%;
    margin: 0 auto;
    background-color: #fff;
} 


.panel.panel-card:hover .panel-heading {
    height: 55px;
    
    -webkit-transition: height 400ms ease-in-out;
            transition: height 400ms ease-in-out;
}
.panel.panel-card:hover .panel-figure {
    opacity: 0;
    
    -webkit-transition: opacity 400ms ease-in-out;
            transition: opacity 400ms ease-in-out;
}
.panel.panel-card:hover .panel-body {
    padding-top: 20px;
    
    -webkit-transition: padding 400ms ease-in-out;
            transition: padding 400ms ease-in-out;
}
</style>
<!--=========================================================new css ends here =========================================-->
<style>


.dark-header .add-list {
    /* box-shadow: 0px 0px 0px 7px rgba(255,255,255,0.2); */
    font-size: 13px;
}

section{
    padding: 40px 0;
}

.form-check{
    text-align: left;
    margin-top: 28px;
    font-size: 18px;
}
    .main-search-input-item{
        width:auto;
    }
    
    .main-search-button{
            width: 100px;
    }
    
    .main-search-input{
            padding: 0 95px 0 0;
    }
    .checkboxmain h2{
        margin-top:50px;
        color:#fff;
        font-size: 17px;
    }
    /*.overlay{*/
    /*    background: #5caad8;*/
        
    /*}*/
    
    section.hero-section{
padding: 110px 0 50px;
}
    
div.acmd.parent {
    position: absolute;
    z-index: 1000;
    background: white;
    border-radius: 5px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    padding: 10px;
    overflow: hidden;
     top: 285px! important;
    left: 900.5px! important;
    width: 300px;
}

div.acmd.category {
    padding: 20px;
}

.slick-dots{
    display:none! important;
}

.card-listing .listing-rating {
    float: left;
    width: 100%;
    margin-top: 0px;
    font-size: 17px;
}


</style>



<style>

.section {
	position: relative;
	height: 70vh;
}

.section .section-center {
	position: absolute;
	top: 60%;
	left: 0;
	right: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}
    #booking {
	font-family: 'Poppins', sans-serif;
	background-image: url('https://cdn.pixabay.com/photo/2017/01/20/00/30/maldives-1993704_1280.jpg');
	background-size: cover;
	background-position: center;
}

#booking::before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    background: rgba(255, 255, 255, 0.15);
}

.booking-form {
	background: #fff;
	border-radius: 45px;
}

.booking-form>form .row.no-margin {
	margin-right: 0px;
	margin-left: 0px;
}

.booking-form>form .row.no-margin>[class*="col-"] {
	padding-right: 0px;
	padding-left: 0px;
}

.booking-form .form-group {
	position: relative;
	padding: 5px;
	margin-bottom: 0px;
}

.booking-form .form-group:after {
	content: '';
	/*background: rgba(129, 131, 144, 0.15);*/
	background: rgb(219, 220, 225);
	position: absolute;
	top: 0px;
	bottom: 0;
	right: 0px;
	width: 1px;
	height: 90px;
}

.booking-form .form-control {
	background-color: transparent;
	border-radius: 0px;
	border: none;
	height: 40px;
	-webkit-box-shadow: none;
	box-shadow: none;
	font-size: 16px;
	color: #505050;
	font-family: inherit;
	font-weight: 600;
	padding: 0;
}

.booking-form .form-control::-webkit-input-placeholder {
	color: #505050;
}

.booking-form .form-control:-ms-input-placeholder {
	color: #505050;
}

.booking-form .form-control::placeholder {
	color: #505050;
}

.booking-form input[type="date"].form-control:invalid {
	color: #818390;
}

.booking-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 0px;
	bottom: 35px;
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: #818390;
	font-size: 14px;
}

.booking-form select.form-control+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form .form-label {
	color: rgb(117, 118, 123);
	display: block;
	font-weight: 400;
	text-align: left;
	/*height: 25px;
	line-height: 25px;*/
	font-size: 14px;
}

.booking-form .form-btn {
	/*padding: 5px;*/
}

.booking-form .submit-btn {
	/*background: #18458b;*/
	background-image: linear-gradient(247deg, rgb(254, 227, 63), rgb(254, 221, 16));
	border: none;
	text-transform: capitalize;
	display: block;
	border-radius: 43px;
	width: 95%;
	float: right;
	height: 90px;
	font-size: 16px;
	font-weight: 700;
	color: rgb(16, 18, 23);
}
   .form-control
{
	height:50px;
	padding: 5px 10px 5px 30px;
	margin-top:0px;
	margin-bottom:0px;
	margin-left:0px;
	border: 1px solid #18458B;
}

.form-inline {
    /* box-shadow: 0px 0px 0px 10px rgba(255,255,255,0.3); */
    padding: 0px;
    /* border-radius: 4px; */
    /* margin-top: 50px; */
    /* background-color: white; */
    border: 4px solid #18458B;
}
.txtf1{
	min-width: 70%;
	/*float: left;*/
}
.txtf2{
	min-width: 25%;
	float: left;
}
.txtf3 {
    margin-right: 0px;
    float: left;
    width: 26%;
    line-height: 35px;
	text-align: left;
	background:#fff
}
.btn-boss {
    height: 50px;
    padding: 5px 10px;
    min-width: 121px;
    background: #F9B90F;
    border-radius: 0;
    color: #fff;
    border: 2px solid #18458B;
}
 
ul.drop{display:inline-block;}
ul.drop, ul.drop li { list-style: none; margin: 0; padding: 0; background: #ECF1F3; color: #28313F;  }
ul.drop li.hover, ul.drop li:hover { position: relative; z-index: 599; background: #1e7c9a;}

.stickyPanel {
  position: fixed;
  top: 0;
  width: 100%;
}


 .applyBtn 
  {
    display: none;
  }
  .cancelBtn 
  {
    display: none;
  }



</style>
<!--  wrapper  -->
<div id="wrapper no-padding">
    <!-- Content-->
    <div class="content" style="color:#000">
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container headerPanel" id="searchBarTop">
				<div class="row">
					<div class="booking-form" id="myHeader">
						<form action="<?php echo base_url('hotel/search') ?>" method="post">
							<div class="row no-margin">
								<div class="col-md-4 location-open">
									<div class="form-group" style="padding-top: 25px">
										<!-- <span class="form-label">Destination</span> -->
										<i class="fa fa-search" aria-hidden="true"></i>  &nbsp;&nbsp; &nbsp;<input type="text" autocomplete="off" onkeyup="searchCity(this.value)" name="destination" id="destination" placeholder="Search by city, hotel, or neighborhood" class="form-control txtf1" required />                             
										
									</div>
									<div class="location-show" style="display: none;">
										<!-- <ul class="location-data">
											<li><i class="fa fa-map-marker" aria-hidden="true"></i>Goa <span>India</span></li>
											<li><i class="fa fa-map-marker" aria-hidden="true"></i>Delhi <span>India</span></li>
											<li><i class="fa fa-map-marker" aria-hidden="true"></i>Mumbai <span>India</span></li>
											<li><i class="fa fa-map-marker" aria-hidden="true"></i>Chandigarh <span>India</span></li>
										</ul> -->
									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-12" style="padding: 0px;">
										<div class="row no-margin">
										<div class="col-md-4 getData" style="padding-left: 20px;">
											<div class="form-group" style="padding-left: 10px;">
												<span class="form-label">Check In</span>
												 <!-- <input type="text" class="form-control txtf2" id="checkincheckout"name="daterange" value="<?php echo date('m/d/Y'); ?> - <?php echo date('m/d/Y', strtotime(date('m/d/Y') . ' +1 day')); ?>" required /> -->

												 <input type="text" class="form-control txtf2" style="text-align: left" id="checkincheckout" name="daterange" value="<?php echo date('m/d/Y'); ?>" required />
            
											</div>
										</div>

										<div class="col-md-4" style="padding-left: 20px;">
											<div class="form-group" style="padding-left: 10px;">
												<span class="form-label"> Check Out</span>
												 <input type="text" class="form-control txtf2" style="text-align: left" id="checkincheckout" name="daterange" value="<?php echo date('m/d/Y'); ?>" required />
            
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="">
											<span class="form-label" style="padding-top: 5px;padding-left:30px;">Guests</span>
												
												<div class="guest-child form-control">
									<label class="xp__input">

										<span class="xp__guests__count">
											
											<!-- <span>
												&nbsp;·&nbsp;
												<span id="childSetCount">0</span>
												<span data-children-count="">Children</span>
											</span> -->
											<span>
												<!-- &nbsp;·&nbsp; -->
												<span id="totalRooms">1</span>
												<span data-room-count="">Room</span>
											</span>
											&#x2c;
											<span id="totalGuests">1</span>
											<span>Guests</span>
										</span>
								</label>
								</div>
								<div class="guest_container optionBox" style="width: 240px">
									<div class="adult-booking">
										<div>
        <table class="tab table-condensed" id="myContainer" border="1" cellpadding="15" style="border-collapse: separate;
    border-spacing: 0 1em;">
            <tr>
                <td class="booking-form form-control">Rooms</td>
                <td class="booking-form form-control">Guests</td>
            </tr>
            <tr>
                <td>Room 1</td>
                <td id="td1">
                    <button onclick="deleteGuest('td1')" style="padding: 2px 8px;background: #ffffff;
    border: 1px solid #585858;">-</button> <span class="totalguest">1</span> <button onclick="addGuest('td1')" style="padding: 2px 8px;background: #ffffff;
    border: 1px solid #585858;">+</button>
                </td>
            </tr>
            
        </table>
        <table class="tab" style="margin-top: 15px;">
            <tr>
                <td>
                    <button onclick="Geeks()" style="padding: 6px 6px;background: #ffffff;border: 2px solid #c7c5c5;border-radius: 9px;">Delete Room</button>
                </td>
                <td>
                    <button id="addRoom" style="padding: 6px 6px;background: #ffffff;border: 2px solid #c7c5c5;border-radius: 9px;">Add Room</button>
                </td>
            </tr>
        </table>
    </div>
    <!-- <div>
        <span id="totalRooms"></span> Rooms, <span id="totalGuests"></span> Guests
    </div> -->
										<!-- <div id="children" class="clear-divs"><span class="pull-left">Childrens</span>
											<div class="pull-right"><button type="button" id="sub2" class="sub plus-minus-btn">-</button>
											<input type="text" id="childCount" name="childCount" value="0" class="input-design"/>
											<button type="button" id="add2" class="add plus-minus-btn">+</button>
										</div>
										</div> -->
										<!-- <div class="col-sm-12" style="padding: 0px;">
											<div class="col-sm-3">Rooms</div>
											<div class="col-sm-9" style="text-align: center">Guest</div>
										</div>
										<div class="optionBox">
											<div class="col-sm-12 block" style="padding: 0px;margin-top: 10px;padding: 5px 5px;">
												<div class="col-sm-3" style="font-size: 20px;">1</div>
												<div class="col-sm-8 pull-right">
													 <button onclick="deleteGuest('td1')">-</button> <span class="totalguest">1</span> <button onclick="addGuest('td1')">+</button>
												</div>
											</div> -->

											<!-- <div class="col-sm-12" style="padding: 0px;margin-top: 10px;padding: 27px 5px;">
												<div class="col-sm-3" style="font-size: 20px;">1</div>
												<div class="col-sm-9 pull-right"><button type="button" id="sub" class="sub plus-minus-btn" disabled >-</button>
													<input type="text" id="adultCount" style="background-color: unset;" name="adultCount" value="1" class="input-design" disabled />
													<button type="button" id="add" class="add plus-minus-btn">+</button>
												</div>
											</div> -->
											<!-- <div class="col-sm-12" style="padding: 0px;">
												<div class="col-sm-6"><button onclick="getSub()" class="btn btn-primary remove" style="padding:5px 5px">Delete</button>   </div>
												<div class="col-sm-6"><button id="addRoom" class="btn btn-primary addNew" style="padding:5px 5px">Add</button></div>
											</div>
										</div>
 -->
										
										


										<!-- <div id="room" class="clear-divs"><span class="pull-left">Rooms</span>
											<div class="pull-right">	<button type="button" id="sub3" class="sub plus-minus-btn" disabled >-</button>
												<input type="text" id="roomCount" name="roomCount" value="1" class="input-design"/>
												<button type="button" id="add3" class="add plus-minus-btn">+</button>
											</div>
										</div>
										<div id="adult" class="clear-divs"><span class="pull-left">Guests</span>
											<div class="pull-right"><button type="button" id="sub" class="sub plus-minus-btn" disabled >-</button>
												<input type="text" id="adultCount" style="background-color: unset;" name="adultCount" value="1" class="input-design" disabled />
												<button type="button" id="add" class="add plus-minus-btn">+</button>
											</div>
										</div> -->
									</div>

									</div>
								
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-btn">
									<button type="submit" class="btn btn-info submit-btn">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                            		</div>
								</div>
							</div>
							<!--<div class="checkboxmain fl-wrap text-left">
                     
                       <h2 style="color:#333">
                           <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                               <label for="vehicle1">i want to book a cab</label><br>
                           </h2>
                    </div>-->
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
        <!--<section class="scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1" style="z-index:unset; overflow:visible">
            <div class="bg" data-bg="<?php echo base_url(); ?>" data-scrollax="properties: { translateY: '200px' }"></div>
            <div class="overlay"></div>
            <div class="hero-section-wrap fl-wrap">
                <div class="container">
                    
                    <div class="intro-item fl-wrap" style="margin-top: 100px;;margin-bottom: 65px;">
                        
                        <form action="<?php echo base_url('hotel/search') ?>" method="post">
                            <div class="form-inline mb-2">

                                <input type="text" name="destination" id="destination" placeholder="Where are you going?" class="form-control txtf1" />                                

				                           <input type="text" class="form-control txtf2" name="daterange" value="<?php echo date('m/d/Y'); ?> - <?php echo date('m/d/Y', strtotime(date('m/d/Y') . ' +1 day')); ?>" />
                                <div class="guest-child form-control txtf3">
									<label class="xp__input">

										<span class="xp__guests__count">
										<span>Adults</span>
										<span>
										&nbsp;·&nbsp;
										<span data-children-count="">Children</span>
										</span>
										<span>
										&nbsp;·&nbsp;
										<span data-room-count="">Room</span>
										</span>
										</span>
								</label>
								</div>
								<div class="guest_container">
									<div class="adult-booking">
									<div id="adult" class="clear-divs"><span class="pull-left">Adults</span>
										<div class="pull-right"><button type="button" id="sub" class="sub plus-minus-btn">-</button>
										<input type="text" id="1" value="1" class="input-design" />
										<button type="button" id="add" class="add plus-minus-btn">+</button>
									</div>
									</div>
									<div id="children" class="clear-divs"><span class="pull-left">Childrens</span>
										<div class="pull-right"><button type="button" id="sub2" class="sub plus-minus-btn">-</button>
										<input type="text" id="2" value="1" class="input-design"/>
										<button type="button" id="add2" class="add plus-minus-btn">+</button>
									</div>
									</div>
									<div id="room" class="clear-divs"><span class="pull-left">Rooms</span>
									<div class="pull-right">	<button type="button" id="sub3" class="sub plus-minus-btn">-</button>
										<input type="text" id="3" value="1" class="input-design"/>
										<button type="button" id="add3" class="add plus-minus-btn">+</button>
									</div>
									</div>
									</div>
									</div>
								
                                <button type="submit" class="btn btn-info btn-boss">Search</button>
                            </div>

                            <div id="cityListing" class="form-inline">
                                    

                            </div>
                           
                        </form>
                     </div>-->
                     
                     
                     
                     
                     
                     
                     
                     <!--======================================================================new form ===================================================-->
                     
                     
                   
                     
                     
                     
                   <!-- <form action="<?php echo base_url('hotel/search') ?>" method="post">
                    <div class="main-search-input-wrap">
                        <div class="main-search-input fl-wrap" style="display: flex;">
                            <div class="main-search-input-item">
                                <input type="text" placeholder="What are you looking for?" value=""/>
                            </div>
                            
                             <div class="main-search-input-item location" id="autocomplete-container">
                                <input type="text" name="location" placeholder="Location" id="autocomplete-input" value=""/>
                                <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                            </div>
                            
                            <div class="main-search-input-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="col-md-6">
                                     <input type="text" name="checkin_date" placeholder="Checkin date" class="datepicker" value="" data-large-mode="true" data-large-default="true"/>
                                 </div>
                                 <div class="col-md-6">
                                     <input type="text" name="checkout_date" placeholder="Checkout date" class="datepicker" value="" data-large-mode="true" data-large-default="true"/>
                                 </div>
                              </div>
                                                    <div class="quantity-item">
                                                       
                                                        <input class="form-control timepicker" type="text" name="checkin_time" value="8:00 AM" placeholder="checkin Time" autocomplete="off">
                                                    </div>
                            </div>
                            
                           
                            <div class="main-search-input-item">
                                <select name="adult" placeholder="Adults" class="chosen-select" >
                                    <option>Adults</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            
                            <div class="main-search-input-item">
                                <select name="children" data-placeholder="Children" class="chosen-select" >
                                    <option>Children</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            
                            <div class="main-search-input-item">
                                <select name="room" data-placeholder="Room" class="chosen-select" >
                                    <option>Rooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                            </div>
                           <button class="main-search-button" onclick="window.location.href='<?php echo base_url(); ?>'">Search</button>
                        </div>
                    <div class="checkboxmain fl-wrap">
                     
                       <h2>
                           <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                               <label for="vehicle1">i want to book a cab</label><br>
                           </h2>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="bubble-bg"> </div>
            <div class="header-sec-link">
                <div class="container"><a href="#sec2" class="custom-scroll-link">Let's Start</a></div>
            </div>
        </section>-->
        <!-- section end -->
        
        <section id="sec2" style="display: none;">
            <div class="container">
                <div class="section-title">
                    <h2>Featured Categories</h2>
                    <div class="section-subtitle">Catalog of Categories</div>
                    <span class="section-separator"></span>
                    <p>Explore some of the best tips from around the city from our partners and friends.</p>
                </div>
                <!-- portfolio start -->
                <div class="gallery-items fl-wrap mr-bot spad">
                    <!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
								<div class="bg"  data-bg="<?php echo base_url(); ?>assets/frontend/images/all/1.jpg"></div>
                                <div class="listing-counter"><span>10 </span> Locations</div>
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">Conference and Event</a></h3>
                                    <p>Constant care and attention to the patients makes good record</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item gallery-item-second">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
								<div class="bg"  data-bg="<?php echo base_url(); ?>assets/frontend/images/bg/19.jpg"></div>
                                <div class="listing-counter"><span>6 </span> Locations</div>
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">Cafe - Pub</a></h3>
                                    <p>Constant care and attention to the patients makes good record</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
                                <div class="bg"  data-bg="<?php echo base_url(); ?>assets/frontend/images/all/3.jpg"></div>
                                <div class="listing-counter"><span>21 </span> Locations</div>
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">Gym - Fitness</a></h3>
                                    <p>Constant care and attention to the patients makes good record</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
                                <div class="bg"  data-bg="<?php echo base_url(); ?>assets/frontend/images/all/22.jpg"></div>
                                <div class="listing-counter"><span>7 </span> Locations</div>
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">Hotels</a></h3>
                                    <p>Constant care and attention to the patients makes good record</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
                                <div class="bg"  data-bg="<?php echo base_url(); ?>assets/frontend/images/all/5.jpg"></div>
                                <div class="listing-counter"><span>15 </span> Locations</div>
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">Shop - Store</a></h3>
                                    <p>Constant care and attention to the patients makes good record</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                </div>
                <!-- portfolio end -->
                <a href="#" class="btn  big-btn circle-btn dec-btn  color-bg flat-btn">View All<i class="fa fa-eye"></i></a>
            </div>
        </section>
        <!-- section end -->
        
        
        <!--========================================================================new code for new design=============================================================-->
        
        <section id="t-cards">
            <div class="container">
                <div class="section-title">
                    <h2>Explore By Tourism </h2>
                
                    <span class="section-separator"></span>
                    <!--<p>Get the travel package instantly for famous tourism places.</p>-->
                </div>
            </div>
    <div class="container">
        <div class="row">
            <?php foreach($explore_by_location as $key => $location){ ?>
             <div class="col-sm-6 col-md-3">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        <img src="<?php echo $location['img'] ?>" />
                        <button class="btn btn-primary btn-sm" role="button">Follow</button>
                    </div>
                    <div class="panel-figure">
                        <img class="img-responsive img-circle" src="https://cdn.iconscout.com/icon/free/png-256/delhi-1-161357.png" />
                    </div>
                    <div class="panel-body text-center">
                        <h4 class="panel-header"><a href="<?php echo base_url('hotel/city/'.$location['id']) ?>"><?php echo $location['name'] ?></a></h4>
                        <small><?php echo $location['total_hotels'] ?> Hotels</small>
                    </div>
                </div>   
    		</div>
    		<?php } ?>
		    <!--<div class="col-sm-6 col-md-3">-->
      <!--  	    <div class="panel panel-default panel-card">-->
      <!--              <div class="panel-heading">-->
      <!--                  <img src="https://image.slidesharecdn.com/bandrabridge-090702185737-phpapp01/95/bandra-worli-bridge-1-728.jpg?cb=1246561131" />-->
      <!--                  <button class="btn btn-primary btn-sm" role="button">Follow</button>-->
      <!--              </div>-->
      <!--              <div class="panel-figure">-->
      <!--                  <img class="img-responsive img-circle" src="https://cdn.iconscout.com/icon/free/png-256/gatewayofindia-119678.png" />-->
      <!--              </div>-->
      <!--              <div class="panel-body text-center">-->
      <!--                  <h4 class="panel-header"><a href="#">MUMBAI</a></h4>-->
      <!--                  <small>30 Hotels</small>-->
      <!--              </div>-->
      <!--          </div>   -->
    		<!--</div>-->
      <!--      <div class="col-sm-6 col-md-3">-->
      <!--          <div class="panel panel-default panel-card">-->
      <!--              <div class="panel-heading">-->
      <!--                  <img src="https://www.holidify.com/images/bgImages/CHENNAI .jpg" />-->
      <!--                  <button class="btn btn-primary btn-sm" role="button">Follow</button>-->
      <!--              </div>-->
      <!--              <div class="panel-figure">-->
      <!--                  <img class="img-responsive img-circle" src="https://cdn.iconscout.com/icon/free/png-256/chennai-119687.png" />-->
      <!--              </div>-->
      <!--              <div class="panel-body text-center">-->
      <!--                  <h4 class="panel-header"><a href="#">CHENNAI</a></h4>-->
      <!--                  <small>30 Hotels</small>-->
      <!--              </div>-->
      <!--         	</div>   -->
    		<!--</div>-->
      <!--      <div class="col-sm-6 col-md-3">-->
      <!--          <div class="panel panel-default panel-card">-->
      <!--              <div class="panel-heading">-->
      <!--                  <img src="https://img.theculturetrip.com/1440x807/wp-content/uploads/2015/11/8389073_c629dbc3d9_z.jpg" />-->
      <!--                  <button class="btn btn-primary btn-sm" role="button">Follow</button>-->
      <!--              </div>-->
      <!--              <div class="panel-figure">-->
      <!--                  <img class="img-responsive img-circle" src="https://cdn.iconscout.com/icon/free/png-256/bara-119683.png" />-->
      <!--              </div>-->
      <!--              <div class="panel-body text-center">-->
      <!--                  <h4 class="panel-header"><a href="#">LUCKNOW</a></h4>-->
      <!--                  <small>30 Hotels</small>-->
      <!--              </div>-->
                   
      <!--      	</div>   -->
    		<!--</div>-->
	    </div>
    </div>
</section>



                <!--section -->
                    <section class="color-bg">
                        <div class="shapes-bg-big"></div>
                        <div class="container">
                            <div class=" single-facts fl-wrap">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <img class="counterimg" src="http://dev.ablore.com/byo/byo_hotel/assets/frontend/images/icons8-empty-bed-50.png">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="<?php echo $totalroom ?>"><?php echo $totalroom ?></div>
                                            </div>
                                        </div>
                                        <h6>TOTAL ROOMS</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                         <img class="counterimg" src="http://dev.ablore.com/byo/byo_hotel/assets/frontend/images/icons8-city-50.png">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="<?php echo $totalcity ?>"><?php echo $totalcity ?></div>
                                            </div>
                                        </div>
                                        <h6>TOTAL CITIES</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                         <img class="counterimg" src="http://dev.ablore.com/byo/byo_hotel/assets/frontend/images/icons8-hotel-50 (1).png">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="<?php echo $totalhotel ?>"><?php echo $totalhotel ?></div>
                                            </div>
                                        </div>
                                        <h6>TOTAL HOTELS</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                               
                                <!-- inline-facts end -->
                            </div>
                        </div>
                    </section>
                    <!-- section end -->


 <!--section -->
        <section class="gray-section">
            <div class="container">
                <div class="section-title">
                    <h2>Explore By Cities</h2>
                
                    <span class="section-separator"></span>
                    <!--<p>Get the travel package instantly for famous tourism places.</p>-->
                </div>
            </div>
            <!-- carousel -->
            <div class="list-carousel fl-wrap card-listing ">
                <!--listing-carousel-->
                <div class="listing-carousel fl-wrap">
                    
                    <?php foreach($explore_by_city as $key => $city){ ?>
                    <!--slick-slide-item-->
                     <div class="slick-slide-item">
                        <!-- listing-item -->
                         <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="<?php echo $city['img'] ?>" alt="" style="max-height: 173px;">
                                    <!--<div class="overlay"></div>-->
                                    <div class="list-post-counter"><span>0</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap" style="padding: 0px 20px 10px;">
                                     <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis">
                                            <!--<span>(3 reviews)</span>-->
                                        <div class="geodir-category-location" style="margin-top: 0px;"><a href="<?php echo base_url('hotel/city/'.$city['id']) ?>"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;<?php echo $city['name'] ?></a></div>
                                        </div>
                                        
                                    </div>
                                </div>
                             </article>
                        </div>
                        
                        <!-- listing-item end-->
                    </div>
                    <!--slick-slide-item end-->
                    <?php } ?>
                    
                    <!--   <div class="slick-slide-item">-->
                        <!-- listing-item -->
                    <!--     <div class="listing-item">-->
                    <!--        <article class="geodir-category-listing fl-wrap">-->
                    <!--            <div class="geodir-category-img">-->
                    <!--                <img src="https://travelandleisureindia.in/wp-content/uploads/2019/07/Hyderabad-feature.jpg" alt="">-->
                                    <!--<div class="overlay"></div>-->
                    <!--                <div class="list-post-counter"><span>0</span><i class="fa fa-heart"></i></div>-->
                    <!--            </div>-->
                    <!--            <div class="geodir-category-content fl-wrap" style="padding: 0px 20px 10px;">-->
                    <!--                 <div class="geodir-category-options fl-wrap">-->
                    <!--                    <div class="listing-rating card-popup-rainingvis">-->
                                            <!--<span>(3 reviews)</span>-->
                    <!--                    <div class="geodir-category-location" style="margin-top: 0px;"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;Hyderabad</a></div>-->
                    <!--                    </div>-->
                                        
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--         </article>-->
                    <!--    </div>-->
                        
                        <!-- listing-item end-->
                    <!--</div>-->
                    
                    <!--   <div class="slick-slide-item">-->
                        <!-- listing-item -->
                    <!--     <div class="listing-item">-->
                    <!--        <article class="geodir-category-listing fl-wrap">-->
                    <!--            <div class="geodir-category-img">-->
                    <!--                <img src="https://img.theculturetrip.com/1440x807/wp-content/uploads/2018/08/shutterstock_734109598.jpg" alt="">-->
                                    <!--<div class="overlay"></div>-->
                    <!--                <div class="list-post-counter"><span>0</span><i class="fa fa-heart"></i></div>-->
                    <!--            </div>-->
                    <!--            <div class="geodir-category-content fl-wrap" style="padding: 0px 20px 10px;">-->
                    <!--                 <div class="geodir-category-options fl-wrap">-->
                    <!--                    <div class="listing-rating card-popup-rainingvis">-->
                                            <!--<span>(3 reviews)</span>-->
                    <!--                    <div class="geodir-category-location" style="margin-top: 0px;"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;Pune</a></div>-->
                    <!--                    </div>-->
                                        
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--         </article>-->
                    <!--    </div>-->
                        
                        <!-- listing-item end-->
                    <!--</div>-->
                    
                    <!--<div class="slick-slide-item">-->
                        <!-- listing-item -->
                    <!--     <div class="listing-item">-->
                    <!--        <article class="geodir-category-listing fl-wrap">-->
                    <!--            <div class="geodir-category-img">-->
                    <!--                <img src="https://5.imimg.com/data5/OY/QG/GLADMIN-50973411/jaipur-city-tour-500x500.png" alt="">-->
                                    <!--<div class="overlay"></div>-->
                    <!--                <div class="list-post-counter"><span>0</span><i class="fa fa-heart"></i></div>-->
                    <!--            </div>-->
                    <!--            <div class="geodir-category-content fl-wrap" style="padding: 0px 20px 10px;">-->
                    <!--                 <div class="geodir-category-options fl-wrap">-->
                    <!--                    <div class="listing-rating card-popup-rainingvis">-->
                                            <!--<span>(3 reviews)</span>-->
                    <!--                    <div class="geodir-category-location" style="margin-top: 0px;"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;Jaipur</a></div>-->
                    <!--                    </div>-->
                                        
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--         </article>-->
                    <!--    </div>-->
                        
                        <!-- listing-item end-->
                    <!--</div>-->
                </div>
                <!--listing-carousel end-->
                <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
            </div>
            <!--  carousel end-->
        </section>
        <!-- section end -->
        
          <!--========================================================================new code end here===================================================================-->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        <!--section -->
        <!--<section class="gray-section">-->
        <!--    <div class="container">-->
        <!--        <div class="section-title">-->
        <!--            <h2>Explore By Cities</h2>-->
                
        <!--            <span class="section-separator"></span>-->
                    <!--<p>Get the travel package instantly for famous tourism places.</p>-->
        <!--        </div>-->
        <!--    </div>-->
            <!-- carousel -->
        <!--    <div class="list-carousel fl-wrap card-listing ">-->
                <!--listing-carousel-->
        <!--        <div class="listing-carousel fl-wrap">-->
                    <!--slick-slide-item-->
        <!--            <?php if(isset($destnations)){ foreach($destnations as $key => $city){ ?>-->
        <!--            <div class="slick-slide-item">-->
                        <!-- listing-item -->
                        
        <!--                <div class="listing-item">-->
        <!--                    <article class="geodir-category-listing fl-wrap">-->
        <!--                        <div class="geodir-category-img">-->
        <!--                            <img src="<?php echo (!empty($item->image_mid)) ? base_url().$item->image_mid : base_url().'assets/backend/dist/img/img_bg_mid.jpg';?>" alt="">-->
        <!--                            <div class="overlay"></div>-->
                                   <!-- <div class="list-post-counter"><span>0</span><i class="fa fa-heart"></i></div>-->
        <!--                        </div>-->
        <!--                        <div class="geodir-category-content fl-wrap">-->
        <!--                            <a class="listing-geodir-category" onclick="destination_city('<?php echo $city['name']; ?>')"><?php echo $city['name']; ?></a>-->
        <!--                            <div class="geodir-category-options fl-wrap">-->
        <!--                         <div class="geodir-category-location"><a href="#"><?php echo html_escape($city['total_hotels']); ?> hotels</a></div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </article>-->
        <!--                </div>-->
                        
                        <!-- listing-item end-->
        <!--            </div>-->
        <!--            <?php } } ?>-->
                    <!--slick-slide-item end-->
        <!--        </div>-->
                <!--listing-carousel end-->
        <!--        <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>-->
        <!--        <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>-->
        <!--    </div>-->
            <!--  carousel end-->
        <!--</section>-->
        <!-- section end -->
        
         <section class="gray-section">
            <div class="container">
                <div class="section-title">
                    <h2>In Demand Hotels By Rating</h2>
                    <!--<div class="section-subtitle">Best Hotel Listings</div>-->
                    <span class="section-separator"></span>
                    <!--<p>Travel around the world without worries.Get the best hotel from our list now.</p>-->
                </div>
            </div>
            <!-- carousel -->
            <div class="list-carousel fl-wrap card-listing ">
                <!--listing-carousel-->
                <div class="listing-carousel fl-wrap">
                    <!--slick-slide-item-->
                    <?php if(isset($hotels)){ foreach($hotels_by_rating as $key => $rating){ ?>
                    <div class="slick-slide-item">
                        <!-- listing-item -->
                        
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="<?php echo (!empty($rating['img'])) ? base_url().$rating['img'] : base_url().'assets/backend/dist/img/img_bg_mid.jpg';?>" alt="">
                                    <div class="overlay"></div>
                                   <!-- <div class="list-post-counter"><span>0</span><i class="fa fa-heart"></i></div>-->
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <!--<a class="listing-geodir-category" href="<?php echo base_url(); ?>hotel-booking"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo html_escape($item->hotel_location); ?></a>-->
                                   
                                   
                                <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="<?php echo $rating['rating'] ?>">
                                            <!--<span>(3 reviews)</span>-->
                                        <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo html_escape($rating['hotel_location']); ?></a></div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </article>
                        </div>
                        
                        <!-- listing-item end-->
                    </div>
                    <?php } } ?>
                    <!--slick-slide-item end-->
                </div>
                <!--listing-carousel end-->
                <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
            </div>
            <!--  carousel end-->
        </section>
        <!-- section end -->
        
          <!--section -->
        <section class="gray-section">
            <div class="container">
                <div class="section-title">
                    <h2>Browse Our All Hotels</h2>
                    <!--<div class="section-subtitle">Best Hotel Listings</div>-->
                    <span class="section-separator"></span>
                    <!--<p>Travel around the world without worries.Get the best hotel from our list now.</p>-->
                </div>
            </div>
            <!-- carousel -->
            <div class="list-carousel fl-wrap card-listing ">
                <!--listing-carousel-->
                <div class="listing-carousel fl-wrap">
                    <!--slick-slide-item-->
                    <?php if(isset($hotels)){ foreach($hotels as $key => $item){ ?>
                    <div class="slick-slide-item">
                        <!-- listing-item -->
                        
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="<?php echo (!empty($item['img'])) ? base_url().$item['img'] : base_url().'assets/backend/dist/img/img_bg_mid.jpg';?>" alt="">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>0</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="<?php echo base_url('hotel') ?>/book/<?php echo html_escape($item['hotel_slug']); ?>/<?php echo html_escape($item['room_type_slug']); ?>"><?php echo html_escape($item['room_type']); ?></a>
                                    <h3><a href="<?php echo base_url('hotel') ?>/book/<?php echo html_escape($item['hotel_slug']); ?>/<?php echo html_escape($item['room_type_slug']); ?>"><?php echo html_escape($item['name']); ?></a></h3>
                                    <p><?php echo html_escape($item['hotel_contact_information']); ?></p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="<?php echo $item['rating']; ?>">
                                            <span>(0 reviews)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo html_escape($item['hotel_location']); ?></a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        
                        <!-- listing-item end-->
                    </div>
                    <?php } } ?>
                    <!--slick-slide-item end-->
                </div>
                <!--listing-carousel end-->
                <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
            </div>
            <!--  carousel end-->
        </section>
        <!-- section end -->

        <!--section -->
        <section class="gray-section">
            <div class="container">
                <div class="section-title">
                    <h2>Browse Our All Cabs</h2>
                    <!--<div class="section-subtitle">Best Cab Listings</div>-->
                    <span class="section-separator"></span>
                    <p>Travel around the world without worries.Get the best deals on taxi from our list now.</p>
                </div>
            </div>
            <!-- carousel -->
            <div class="list-carousel fl-wrap card-listing ">
                <!--listing-carousel-->
                <div class="listing-carousel fl-wrap">
                    <!--slick-slide-item-->
                    <?php if(isset($cabs)){ foreach($cabs as $key => $item){ ?>
                    <div class="slick-slide-item">
                        <!-- listing-item -->
                        
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="<?php echo (!empty($item->image_mid)) ? base_url().$item->image_mid : base_url().'assets/backend/dist/img/img_bg_mid.jpg';?>" alt="">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>0</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="<?php echo base_url(); ?>cab-booking"><?php echo html_escape($item->vehicle_types); ?></a>
                                    <h3><a href="#"><?php echo html_escape($item->vehicle_name); ?></a></h3>
                                    <p><?php echo html_escape($item->contact_information); ?></p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <span>(0 reviews)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo html_escape($item->vehicle_location); ?></a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        
                        <!-- listing-item end-->
                    </div>
                    <?php } } ?>
                    <!--slick-slide-item end-->
                </div>
                <!--listing-carousel end-->
                <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
            </div>
            <!--  carousel end-->
        </section>
        <!-- section end -->
        
        <!--section -->
        <section class="">
             <div class="container">
                <div class="section-title">
                    <h2>Explore by Interest</h2>
                    <!--<div class="section-subtitle">Best Cab Listings</div>-->
                    <span class="section-separator"></span>
                    <p>Travel around the world without worries.Get the best deals on taxi from our list now.</p>
                </div>
            </div>
              <div class="pricing-wrap fl-wrap">
                                <!-- price-item-->
                                <div class="price-item">
                                    <div class="price-head op1">
                                        <h3>Hotel Booking</h3>
                                    </div>
                                    <div class="price-content fl-wrap">
                                        <div class="price-num fl-wrap">
                                            <img src="http://dev.ablore.com/byo/byo_hotel/assets/frontend/images/OnlineHotelBookingServicesbyBYOHotel.png">
                                           <!--<span class="price-num-item"><i class="fa fa-hotel"></i></span> -->
                                        </div>
                                        <div class="price-desc fl-wrap">
                                            <ul>
                                                <li>Comfortable, economical hotels</li>
                                                <li>Top reviewed hotels</li>
                                                <li>Centrally located</li>
                                              </ul>
                                            <a href="#" class="price-link">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- price-item end-->
                                <!-- price-item-->
                                <div class="price-item best-price">
                                    <div class="price-head op2">
                                        <h3>Travel Package</h3>
                                    </div>
                                    <div class="price-content fl-wrap">
                                        <div class="price-num fl-wrap">
                                             <span class="price-num-item"><img src="http://dev.ablore.com/byo/byo_hotel/assets/frontend/images/OnlineHotelBookingServicesbyBYOHotel.png"></span> 
                                               <span class="curen">+</span>
                                           <span class="price-num-item"><img src="http://dev.ablore.com/byo/byo_hotel/assets/frontend/images/OnlineCabBookingCompanyBYOHotels.png"></span> 
                                          </div>
                                        <div class="price-desc fl-wrap">
                                            <ul>
                                                <ul>
                                                <li>Premium amenities, top quality service</li>
                                                <li>Courteous, highly trained staff</li>
                                                <li>Well-equipped rooms</li>
                                              </ul>
                                                
                                            </ul>
                                            <a href="#" class="price-link">Book Now</a>
                                            <div class="recomm-price">
                                                <!--<img src="http://dev.ablore.com/byo/byo_hotel/assets/frontend/images/OnlineCabBookingCompanyBYOHotels.png">-->
                                                <span class="clearfix"></span>
                                                Recommended
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- price-item end-->
                                <!-- price-item-->
                                <div class="price-item">
                                    <div class="price-head">
                                        <h3>Cab Booking</h3>
                                    </div>
                                    <div class="price-content fl-wrap">
                                        <div class="price-num fl-wrap">
                                         <img src="http://dev.ablore.com/byo/byo_hotel/assets/frontend/images/OnlineCabBookingCompanyBYOHotels.png">
                                           <!--<span class="price-num-item"><i class="fa fa-car"></i></span>-->
                                            
                                        </div>
                                        <div class="price-desc fl-wrap">
                                            <ul>
                                               <ul>
                                                <li>Super low prices</li>
                                                <li>Compact, hygienic</li>
                                                <li>Free Wi-Fi</li>
                                              </ul>
                                            </ul>
                                            <a href="#" class="price-link">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- price-item end-->                                                    
                            </div>
        </section>
        <!-- section end -->
    </div>
    <!-- Content end -->
</div>
<!-- wrapper end -->
<script>

// $('.add').click(function () {
// function getAdd() {
// 	var currentElement = $(this);
// 	var roomAdultChild = $(this).closest(".pull-right").find("input").attr("id");
// 	var roomAdultChildCount = $("#"+roomAdultChild).val();
// 	if(roomAdultChildCount < 4){
// 		var setRoomAdultChildCount = parseInt(roomAdultChildCount) + 1;
// 	}
// 	else{
// 		$(".add").attr("disabled", true);
// 		var setRoomAdultChildCount = 4;
// 	}
// 	$("#"+roomAdultChild).val(setRoomAdultChildCount);

// 	if(roomAdultChild == "adultCount"){
// 		$("#adultSetCount").text(setRoomAdultChildCount);
// 	}else if(roomAdultChild == "childCount"){
// 		$("#childSetCount").text(setRoomAdultChildCount);
// 	}else{
// 		$("#roomSetCount").text(setRoomAdultChildCount);
// 	}
	

// 	if(setRoomAdultChildCount > 1 && (roomAdultChild == "roomCount" || roomAdultChild == "adultCount")){
// 		$(this).closest(".pull-right").find("button.sub").prop('disabled', false);
// 	}else if(setRoomAdultChildCount > 0 && roomAdultChild != "roomCount" && roomAdultChild != "adultCount"){
// 		$(this).closest(".pull-right").find("button.sub").prop('disabled', false);
// 	}
// // });
// }

// // $('.sub').click(function () {
// function getSub() {
// 	$(".add").attr("disabled", false);
// 	var roomAdultChild = $(this).closest(".pull-right").find("input").attr("id");
// 	var roomAdultChildCount = $("#"+roomAdultChild).val();
// 	var setRoomAdultChildCount = parseInt(roomAdultChildCount) - 1;
// 	$("#"+roomAdultChild).val(setRoomAdultChildCount);

// 	if(roomAdultChild == "adultCount"){
// 		$("#adultSetCount").text(setRoomAdultChildCount);
// 	}else if(roomAdultChild == "childCount"){
// 		$("#childSetCount").text(setRoomAdultChildCount);
// 	}else{
// 		$("#roomSetCount").text(setRoomAdultChildCount);
// 	}

// 	if(setRoomAdultChildCount <= 0 && roomAdultChild != "roomCount" && roomAdultChild != "adultCount"){
// 		$(this).prop('disabled', true);
// 	}else if(setRoomAdultChildCount <= 1 && (roomAdultChild == "roomCount" || roomAdultChild == "adultCount")){
// 		$(this).prop('disabled', true);
// 	}else{
// 		$(this).prop('disabled', false);
// 	}
// }	
// });  

$('body').on('click','.selectCity',function(){
    var selectedCity = $(this).first().contents().eq(1).text();
    $("#destination").val(selectedCity);
    $(".location-show").hide();
});


$(document).ready(function() {
  $('.guest-child').click(function() {
    $('.guest_container').slideToggle("slow");
	  });
	$('.location-open').click(function() {
    //$('.location-show').slideToggle("slow");
    // Alternative animation for example
    // slideToggle("fast");
  });

	

    // $('#destination').keyup(function (e) {

    // 	e.preventDefault();    	

    //     $.ajax({
    //        url: base_url + 'hotel/get_cities',
    //        type: 'POST',
    //        data: {city: $(this).val()},
    //        error: function() {
    //           alert('Something is wrong');
    //        },
    //        success: function(data) {                

    //        		$(".location-show").show();
    //             $(".location-show").html(data); 
    //        }
    //     });
    // });   

});
     
</script>

<script>

		var delayTimer;
	    function searchCity(text){

	    	clearTimeout(delayTimer);
		    delayTimer = setTimeout(function() {
		        $.ajax({
		           url: base_url + 'hotel/get_cities',
		           type: 'POST',
		           data: {city: text},
		           error: function() {
		              alert('Something is wrong');
		           },
		           success: function(data) {                

		           		$(".location-show").show();
		                $(".location-show").html(data); 
		           }
		        });
		    }, 1000); // Will do the ajax stuff after 1000 ms, or 1 s
	    }
    
        $("input[name='acmd']").acmd({
			categoryNames: ["Adults", "Children", "Rooms"],
            callback: function (values) {
                console.log(values);
            }
        });
    </script>
    <script>
$(function() {
	var today = new Date();
  $('input[name="daterange"]').daterangepicker({
    opens: 'left',
    minDate:today,
    autoClose: true,
	singleDate : true,
	autoApply: true,
    singleDatePicker: true,
    showButtonPanel: false,
    singleMonth: true
  }
  // , function(start, end, label) {
  //   console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  // }
  );
});
</script>

<!-- <script>
window.onscroll = function() {myFunction()};

var headerPanel = document.getElementById("searchBarTop");
var sticky = headerPanel.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    headerPanel.classList.add("stickyPanel");
  } else {
    headerPanel.classList.remove("stickyPanel");
  }
}
</script> -->

<script>
  $(window).scroll(function(){
    if ($(window).scrollTop() >= 0) {
        $('headerPanel').addClass('stickyPanel');
        // $('nav div').addClass('visible-title');
    }
    else {
        $('headerPanel').removeClass('stickyPanel');
        // $('nav div').removeClass('visible-title');
    }
});


</script>  

<!-- <script>
	  $('.addNew').click(function() {
	  	var options = document.getElementsByClassName("optionBox");
	  	console.log(options);
    $('.block:last').after('<div class="col-sm-12 block" style="padding: 0px;margin-top: 10px;padding: 5px 5px;"><div class="col-sm-3" style="font-size: 20px;">1</div><div class="col-sm-8 pull-right" style="float: left !important;"><button type="button"  class="sub plus-minus-btn" disabled >-</button><input type="text" id="adultCount" style="background-color: unset;" name="adultCount" value="1" class="input-design" disabled /><button type="button" class="add plus-minus-btn">+</button></div><i class="fa fa-trash remove" aria-hidden="true"></i></div>');
    array.push(1);
});
$('.optionBox').on('click','.remove',function() {
 	$(this).parent().remove();
});

</script> -->
<script>
        $(document).ready(function(){
            $("#totalRooms").html(1);
            $("#totalGuests").html(1);
            $("#addRoom").click(function(){
                rowCount = $('#myContainer tr').length;
                if(rowCount<5){
                	$('#myContainer').append(`<tr id = "row`+rowCount+`"><td>Room `+rowCount+`</td><td id="td`+rowCount+`"><button onclick="deleteGuest('td`+rowCount+`')" style="padding: 2px 8px;background: #ffffff;border: 1px solid #585858;">-</button> <span class="totalguest">1</span> <button onclick="addGuest('td`+rowCount+`')" style="padding: 2px 8px;background: #ffffff;border: 1px solid #585858;">+</button></td></tr>`);
	                $("#totalRooms").html(rowCount);

	                let sumGuests = 0;
	                $('.totalguest').each(function(){
	                    sumGuests += parseFloat($(this).text());
	                });
	                $("#totalGuests").html(sumGuests);
                }
            });
        });

        function addGuest(idVal){
            let curr = parseInt($("#"+idVal+" span").html());
              if(curr < 4){
              	  $("#"+idVal+" span").html(curr + 1);

	            let sumGuests = 0;
	            $('.totalguest').each(function(){
	                sumGuests += parseFloat($(this).text());
	            });
	            $("#totalGuests").html(sumGuests);
              }
        }

        function deleteGuest(idVal){
            let curr = parseInt($("#"+idVal+" span").html());
            if(curr > 1){
                $("#"+idVal+" span").html(curr - 1);

                let sumGuests = 0;
                $('.totalguest').each(function(){
                    sumGuests += parseFloat($(this).text());
                });
                $("#totalGuests").html(sumGuests);
            }
        }


        function Geeks() { 
                $('#row' + rowCount).remove();
                rowCount = $('#myContainer tr').length-1;
                $("#totalRooms").html(rowCount);
                // $("#totalRooms").html(rowCount-1);
                // console.log(rowCount-1);
                let sumGuests = 0;
                $('.totalguest').each(function(){
                    sumGuests += parseFloat($(this).text());
                });
                $("#totalGuests").html(sumGuests);
        } 

        
    </script>
            	
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
