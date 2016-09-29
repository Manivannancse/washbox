<style>
	    .subhead{
			font-size:"<?php echo $row[0]['size'];?>" !important;
			font-family:"<?php echo $row[0]['TextFont'];?>" !important;
			color:"<?php echo $row[0]['Color'];?>" !important;
	    }
.tcb-simple-carousel {
  margin-top: 50px;
}
.tcb-simple-carousel .carousel-control {
  background: #ddd;
  color: #999;
  padding: 4px 0;
  width: 26px;
  top: auto;
  left: auto;
  bottom: 0;
  opacity: 1;
  text-shadow: none;
}
.tcb-simple-carousel .carousel-control.right {
  right: 10px;
}
.tcb-simple-carousel .carousel-control.left {
  right: 40px;
}
</style>
<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="width: 100%">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <img src="<?php echo site_url('application/assests/images/sliderimage.png');?>" width="20%"><!--<h2 data-caption-animate="fadeInUp">WASHBOX<br/></h2>--><h2><span class="subhead" style="font-size:<?php echo $row[0]['size'];?> !important;font-family:<?php echo $row[0]['TextFont'];?> !important;color:<?php echo $row[0]['Color'];?> !important;text-shadow: 1px 1px 1px black !important"><?php echo $text[0]['banner_text'];?><br><?php echo $text[0]['banner_text2'];?> </span></h2>
				<div class="" data-caption-animate="fadeInUp">
				    <div class="row">
					<div>
					    <a class="btn btn1 " style="color: white !important; text-shadow: none !important;border-radius:6px !important;" data-toggle="modal" data-target=".bs-example-modal-lg" ><?php echo $text[0]['banner_btn'];?> </a>
					</div>
					<div class="">
					    
					</div>
				    </div>
				</div>
			    </div>
			</div>
                        <div class="video-wrap">
                            <!--<video poster="images/videos/explore-poster.jpg" preload="auto" loop autoplay muted>
                                <source src='<?php /*echo site_url();*/?>application/assests/images/videos/explore1.mp4' type='video/mp4' />
                                <source src='<?php/* echo site_url();*/?>application/assests/images/videos/explore1.webm' type='video/webm' />
                            </video>-->
                            <div class="video-overlay" style="background: url('<?php echo site_url();?>application/assests/images/bg3.jpg') no-repeat;background-size:100% 100%;"></div>
                        </div>
                    </div>
                 <!--   <div class="swiper-slide" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
                        <div class="container clearfix">
                            <div class="slider-caption">
                                <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!--<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>-->
            </div>

	    
	   
	    
	    
            <script>
		

		
//                jQuery(document).ready(function($){
//		    var swiperSlider = new Swiper('.swiper-parent',{
//                        paginationClickable: false,
//                        slidesPerView: 1,
//                        grabCursor: true,
//                        loop: true,
//                        onSwiperCreated: function(swiper){
//                            $('[data-caption-animate]').each(function(){
//                                var $toAnimateElement = $(this);
//                                var toAnimateDelay = $(this).attr('data-caption-delay');
//                                var toAnimateDelayTime = 0;
//                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
//                                if( !$toAnimateElement.hasClass('animated') ) {
//                                    $toAnimateElement.addClass('not-animated');
//                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
//                                    setTimeout(function() {
//                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
//                                    }, toAnimateDelayTime);
//                                }
//                            });
//                            SEMICOLON.slider.swiperSliderMenu();
//                        },
//                        onSlideChangeStart: function(swiper){
//                            $('[data-caption-animate]').each(function(){
//                                var $toAnimateElement = $(this);
//                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
//                                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
//                            });
//                            SEMICOLON.slider.swiperSliderMenu();
//                        },
//                        onSlideChangeEnd: function(swiper){
//                            $('#slider').find('.swiper-slide').each(function(){
//                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
//                                if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
//                            });
//                            $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
//                                if($(this).find('video').length > 0) {
//                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
//                                }
//                                if($(this).find('.yt-bg-player').length > 0) {
//                                    $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
//                                }
//                            });
//                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
//                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }
//
//                            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
//                                var $toAnimateElement = $(this);
//                                var toAnimateDelay = $(this).attr('data-caption-delay');
//                                var toAnimateDelayTime = 0;
//                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
//                                if( !$toAnimateElement.hasClass('animated') ) {
//                                    $toAnimateElement.addClass('not-animated');
//                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
//                                    setTimeout(function() {
//                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
//                                    }, toAnimateDelayTime);
//                                }
//                            });
//                        }
//                    });
//
//                    $('#slider-arrow-left').on('click', function(e){
//                        e.preventDefault();
//                        swiperSlider.swipePrev();
//                    });
//
//                    $('#slider-arrow-right').on('click', function(e){
//                        e.preventDefault();
//                        swiperSlider.swipeNext();
//                    });
//                });
            </script>

        </section>

        <!-- Content============================================= -->
        <section id="content" class="section-4">

            <div class="content-wrap">

		<div class="row clearfix bottommargin-lg " style="background:#0D8ECD;border-top:2px solid white; ">

		    <div class="col-md-4"><img style="height: 330px"class="col-md-9 col-md-offset-3" src="<?php echo site_url();?>application/assests/images/final/REMOTE-CONTROL_03.png"></div>
		    <div class="col-md-7">
			<h1 class="title">Leave Your Dust To Us</h1>
			<div class="col-md-1">&nbsp;
			</div>
			<div class="col-md-5">
			<ul class="iconlist">
			    <li>Door-to-Door Service <span class="icon-ok">&nbsp;</span></li>
			    <li>Professional Quality <span class="icon-ok">&nbsp;</span></li>
			</ul>
			</div>
			<div class="col-md-5">
			<ul class="iconlist iconlist-right">
			    <li>Prices from just &#8377 200 <span class="icon-ok">&nbsp;</span></li>
			    <li>Professional Quality <span class="icon-ok">&nbsp;</span></li>
			</ul>
			</div>
			<div class="col-md-12 image">
			    <a href="<?php echo site_url('WashBox/quality_guarantee');?>"><img src="<?php echo site_url();?>application/assests/images/final/qualityguarantee_03.png"></a>
			</div>


		    </div>

		</div>
		 
	     <!--MODAL START-->
	      <!-- Large modal -->
                 

                        
			<!--MODAL ENDS-->

                <div class="container clearfix colpadd">

		    <div class="row">
                        <div class="center col-md-12" data-animate="fadeIn">
			    <h1>Affrodable Prices</h1>
			    <h5>All orders come with FREE collection & delivery</h5>
			    
                        </div>
                    </div>
		    	<div class="row center">
			    <div class="col-md-4" data-animate="fadeIn">
				<a href="#" class=" price-button button button-border button-dark button-rounded button-large noleftmargin">&#8377; <?php echo $result[0]['cost_price'];?> <br><span class="pricesmall">Shirt Shirt Service</span></a>
			    </div>
			    <div class="col-md-4" data-animate="fadeIn">
				<a href="#" class="price-button button button-border button-dark button-rounded button-large noleftmargin affortablefont">From &#8377; <?php echo $result[0]['cost_start'];?><br><span class="pricesmall">Dry Cleaning</span></a>
			    </div>
			    <div class="col-md-4" data-animate="fadeIn">
				<a href="#" class="price-button button button-border button-dark button-rounded button-large noleftmargin">&#8377; <?php echo $result[0]['kg'];?>kg<br><span class="pricesmall">Laundry Services</span></a>
			    </div>
			</div>
		    <div class="row center" data-animate="fadeIn" style="margin-top:20px; ">
                        <div class="col-md-12" data-animate="fadeIn" data-delay="800">
			    <a href="<?php echo site_url('WashBox/pricing');?>" class="button btn-warning button-3d button-rounded button-dirtygreen">See Full Price List</a>
                            <!--<a href="#" class="button1 button-border1 button-dark button-rounded button-large">See Full Price List</a>-->
			</div>
                    </div>

		    <div class="clear"></div>

		    <div class="clear"></div>

                </div>

           

                <div class="clear"></div>
	</section><!-- #content end -->
	