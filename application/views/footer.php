		<div ng-controller="locationController" id="orderNowBox"class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-body">
                                    <div class="modal-content">

                                        <div class="modal-body">
					    <div class="row">
						<div class="col-md-12"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>
					    </div>
					    <div class="row">
						<div class="col-md-6">
						    <div class="requestLocationServe ">
							<h2>Locations we serve <i class="icon-truck"></i></h2>
							<div class="col-md-12 no-padding">
							    <h4 id="location"></h4>
							    <span ng-repeat="location in location">{{location.location}}, </span>
							</div>
							<a class="button button-3d button-rounded button-orange button-reveal  tright" href="<?php echo site_url('WashBox/washBoxOrder');?>" ><i class="icon-angle-right"></i><span >Proceed</span></a>
						    </div>
						</div>
						<div class="col-md-6">
						    <form class="requestLocation" ng-submit="placeForm()" role="form" method="post" name="place">
							<div class="form-group"><h2>Request your location <i class="icon-map-marker2"></i></h2></div>
							<div class="form-group"><input id="cityName" ng-model="cityName" placeholder="Enter Your City Name" class="required form-control input-block-level" type="text" style="color:red" value=""  googleplace >
							 <span ng-show="place.cityName.$error.required">Place is required.</span>
							</div>
							<div class="form-group"><input id="Email" ng-model="Email" placeholder="Enter Your Email" class="required form-control input-block-level" type="email" value="">
							<span ng-show="place.Email.$error.required">Email is required.</span>
							    <span ng-show="place.Email.$error.email">Invalid email address.</span>
							</div>
							<div class="form-group "><button  ng-disabled="place.cityName.$dirty || place.Email.$dirty && place.Email.$invalid" type="submit" class="button button-3d button-rounded button-lime button-reveal   tright"  href="#"><i class="icon-map-marker2"></i><span>Submit </span></button></div>
						    </form>
						</div>
					    </div>
					    
					</div>
                                    </div>
                                </div>
                            </div>
                        </div>
			<footer id="footer" class="dark">
				<div id="">
						<div class="container clearfix" style="margin-top: 1px;">
						<div class="col_five_sixth"  style="top: 4px">
						<div class="clearfix custom">
						<a href="<?php echo site_url('WashBox/businessServices');?>" class="padding">
						<span class="lineSpacing">Bussiness Services</span>
						</a>
						<a href="#" class="padding">
						Prices
						</a>
						<a href="<?php echo site_url('WashBox/faq');?>" class="padding">
						FAQ</span>
						</a>
						<a href="#" class="padding">
						<span class="lineSpacing">Refund Policy</span>
						</a>
						<a href="#" class="padding">
						<span class="lineSpacing">Cancellation Policy</span>
						</a>
						<a href="#" class="padding">
						<span class="lineSpacing">About Us</span>
						</a>
						</div>
						</div>
						
						<div class="col_one_five col_last tright">
						<div class="fright clearfix">
						<a href="#" class="social-icon si-small si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
						</a>
						
						<a href="#" class="social-icon si-small si-twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
						</a>
						
						<a href="#" class="social-icon si-small si-gplus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
						</a>
						
						</div>
						</div>
						</div>
						<hr style="margin-top: 0px;margin-bottom: 0px;">
						
						<div class="container">
						
						
						<!-- Footer Widgets
						============================================= -->
						<div class="footer-widgets-wrap clearfix">
						<div class="col-sm-12">
						<h4>WashBox Services</h4>
						<div class="col-sm-4">
						<div class="widget clearfix">
						<div class="widget widget_links clearfix">
						
						
						<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
						<ul>
						<li><a href="#">Dry Cleaning</a></li>
						<li><a href="#">Laundry App</a></li>
						<li><a href="#">Ironing Service</a></li>
						</ul>
						</div>
						
						</div>
						
						</div>
						
						</div>
  <div class="col-sm-4">
						<div class="widget clearfix">
						<div class="widget widget_links clearfix">
						<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
						<ul>
						<li><a href="#">Duvet &amp; Quilt Cleaning</a></li>
						<li><a href="#">Wash &amp; Fold Laundry Service</a></li>
						<li><a href="#">Laundromat Bangalore</a></li>
						</ul>
						</div>
						
						</div>
						
						</div>
						
						</div>
  <div class="col-sm-4">
						
						<div class="widget clearfix">
						<div class="widget widget_links clearfix">
						<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
						<ul>
						<li><a href="#">Saree Polishing</a></li>
						<li><a href="#">Saree Dry Cleaning</a></li>
						</ul>
						</div>
						
						</div>
						
						</div>
						
						</div>
				
						</div>
						
						<!--<div class="col-sm-8 col_last">
						
						<div class="widget clearfix">
						<h4>About Us</h4>
						
						<div id="post-list-footer">
						<div class="spost clearfixcol-sm-4">
						<div class="entry-c">
						<div class="entry-title">
						<p>
							TheWashBox.in is a user friendly Website that has been designed to address the growing need of online laundry service with  speed & efficient dry cleaning. Washbox (laundry bag) in every home normally consists of different kinds of garments and we are here to take care of all the laundry & dry cleaning needs considering the fabric type and the customer needs. We are here to address the laundry needs with the best quality standards.	
						</p>
						<p>
							You can just place your orders with a single touch on our user friendly website, this shall be complimented by free pickup and delivery services. Once the order gets placed, a washbox spartan  will arrive at your door as per the scheduled time (with prior appointment)to collect your clothes and drops in at our stores. Similarly clean washed cloths shall be delivered at your door step again as per the scheduled time with in 48 to 72 hrs of pick up. All the orders shall be captured online and tracked on TheWashBox.in.
						</p>
						<p>
							We are here to serve you with the best on the class services and address all your laundry needs. TheWashbox.in is a one stop shop for Online Laundry Service, Dry Cleaning Service, Only Dhobi, Washing Experts, polishing of Sarees and house-hold garments. We are currently covering most part of Bangalore (please vist our location page in the website) and we are coming close to you shortly.	
						</p>
						</div>
						<ul class="entry-meta">
						</ul>
						</div>
						</div>
						</div>
						</div>
						
						</div>-->
						
						</div>
						
						<div class="col_one_third col_last">
						
						</div>
						
						</div>
						
						</div>
						<hr style="margin-top: 0px;margin-bottom: 0px;">
						<!-- Copyrights ============================================= -->
						<div id="copyrights">
<!--							<div class="container clearfix">
								<div class="clear"></div>
								<i class="icon-envelope2"></i> washbox@gmail.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-97-4240-8889
							</div>-->
							<div class="container clearfix">
								<span style="float: left">&copy 2015 WashBox Ltd</span>
								<span style="text-align:  center;"><i class="icon-envelope2"></i> washbox@gmail.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-97-4240-8889</span>
								<a href="<?php echo site_url('WashBox/businessServices');?>" class="padding">
								<span style="float: right">Terms & Conditions</span>
								</a>
							</div>
						</div>

				</div><!-- #copyrights end -->
			
			</footer><!-- #footer end -->
		
		</div><!-- #wrapper end -->
		
		<!-- Go To Top		============================================= -->
		<div id="gotoTop" class="icon-angle-up"  style=" background-color: rgb(254, 135, 49);"></div>
		
		<!-- Footer Scripts============================================= -->
		<script type="text/javascript" src="<?php echo site_url();?>application/assests/js/functions.js"></script>
<script>
//MOving Objects starts
    var margin=0;
    var marginLocation=0;
    function moveVan() {
	
	if (margin>70) {
	    margin=0;
	    
	}

	temp=margin+"px";

	$(".requestLocationServe h2 i").css("padding-left", temp);
	
	margin=margin+2;
    }
    //setInterval(moveVan, 200);
    function locationIcon() {
	if (marginLocation==0) {
	    marginLocation=-1;
	}
	else{
	    marginLocation=0;

	}
	tempLocation=marginLocation+"px";

	$(".requestLocation h2 i").css("margin-top", tempLocation);
    }
    setInterval(locationIcon, 200);
//Moving Objects ends
</script>
<script>
	app.controller('locationController', function($scope, $http,$filter) {
		$scope.placeForm= function()
				{
				    var city=$scope.cityName.split(",");
				    alert(city[0]);
				$http({
				    url: "<?php echo site_url();?>WashBox/placeForm",
				    method: "POST",
				    data: {cityName:city[0],Email:$scope.Email}
				  }).success(function(data, status, headers, config) {
					SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> New Location has been added '));
					$.loader('close');
					$('#orderNowBox').modal('hide');
				  });
				}
			$scope.location = <?php echo json_encode($data); ?>;

		})
	    .directive('googleplace', function() {
			return {
			    require: 'ngModel',
			    link: function(scope, element, attrs, model) {
			 var options = {
			     types: [],
			     componentRestrictions: {}
			 };
			 scope.gPlace = new google.maps.places.Autocomplete(element[0], options);
			   
			 google.maps.event.addListener(scope.gPlace, 'place_changed', function() {
			     scope.$apply(function() {
			  model.$setViewValue(element.val());
			  
			     });
			 });
			    }
			};
	    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh7ZIyc1vbF3wNRpwKkoJ1-mj3UWuqUso&libraries=places&callback=initAutocomplete"
        async defer></script>
    
	</body>
</html>
<style>
	#footer.dark, .dark #footer {
		background-color: #1B222A !important;
		border-top-color: rgba(0, 0, 0, 0.2);
		color: #ccc;
	    }
	.dark #copyrights {
		background-color: #1B222A !important;
		text-align: center;
		color: rgba(255, 255, 255, 0.25);
		text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
	    }
	.custom{
		font-size: 16px;
		word-spacing: 20px;
	}
	.lineSpacing{
		word-spacing: normal !important;
	}
	.footer-widgets-wrap h4{
		color: #33AFFF !important;
	}
	.footer-widgets-wrap p{
		text-align: justify;
	}
	.pac-logo {
	    z-index: 999999 !important;
	}
</style>

 <div id="success" data-notify-type="success" data-notify-msg="hi"></div>
 <div id="error" data-notify-type="error" data-notify-msg="hi"></div>
 