
<style type="text/css">


.enquiryform {
    margin: 0 auto;
    max-width: 480px;
    overflow: hidden;
}

.enquiryform label {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    float: left;
    margin: 0;
    min-width: inherit;
    padding: 0 2%;
    text-align: left;
    width: 96%;
}
input, select, textarea {
    background-color: #f4f4f4;
    border: 1px solid #f4f4f4;
    border-radius: 4px;
    box-sizing: border-box;
    color: #4c5352;
    font-family: "Avenir W01","Open Sans",Helvetica,Arial,sans-serif;
    font-size: 1em;
    margin: 0;
    outline: medium none;
    padding: 0 10px;
    width: 100%;
}
input {
    height: 38px;
    line-height: 38px;
}
input:hover, select:hover, textarea:hover {
    background-color: #e9e9e9;
    border: 1px solid #e9e9e9;
    border: 1px solid #41a8de;
}
input.wpcf7-submit {
    font-size: 1.4em;
    text-align: center;
}
input.submit, input.wpcf7-submit {
    background-color: #41a8de;
    border: 1px solid #41a8de;
    color: #fff;
    margin: 0;
    text-align: center;
    text-transform: uppercase;
}

hr
{
    border-top: 1px solid #E3E3E3;
    width: 100px;;
}
.req {
    color: #ea1b2a;
}
select {
    height: 38px;
    line-height: 18px;
    padding: 10px;
}





</style>
<div class="widget clearfix">
<h4><center>About Us</center></h4>
<div id="post-list-footer">
<div class="spost clearfix col-sm-4 col-md-12">
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
<div class="container ">
<div class="row">
<div class="col-md-6 col-xs-12 col-sm-12">           
         
            <h3 class="title subtitle">Contact us today</h3>
            <hr class="lines">
            <div role="form" class="wpcf7" id="wpcf7-f14495-o2" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="/" method="post" class="wpcf7-form" ng-controller="validateCtrl" name="myForm" novalidate>
                    <div class="enquiryform">
                        <div class="inputblock">
                            <label>First Name <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-name">
                                  <input type="text" name="firstname" ng-model="firstname" required>
                                 <span style="color:red" ng-show="myForm.firstname.$dirty && myForm.firstname.$invalid">
                                 <span ng-show="myForm.firstname.$error.required">firstname is required.</span>
                                 </span>
                        </div>
                        <div class="inputblock">
                            <label>Last Name <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-name">
                                 <input type="text" name="lastname" ng-model="lastname" required>
                                 <span style="color:red" ng-show="myForm.lastname.$dirty && myForm.lastname.$invalid">
                                 <span ng-show="myForm.lastname.$error.required">lastname is required.</span>
                                 </span>
                                
                        </div>
                        <div class="inputblock">
                            <label>Email Address <span class="req">*</span></label><br />
                            <input type="email" name="email" ng-model="email" required>
                                 <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
                                 <span ng-show="myForm.email.$error.required">Email is required.</span>
                                 <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                                 </span>
                        </div>
                        <div class="inputblock">
                            <label>Telephone <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-telephone">
                                 <input type="text" name="telephone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  ng-model="telephone" required /></span>
                             <span style="color:red" ng-show="myForm.telephone.$dirty && myForm.telephone.$invalid">
                                 <span ng-show="myForm.telephone.$error.required">telephone is required.</span>
                                 </span>
                        </div>
                        <div class="selectblock">
                            <label>NATURE OF ENQUIRY <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-enquiry"><select name="enquiry" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Airbnb">Hospitality</option><option value="Corporate">Corporate</option><option value="Dry Cleaners">Dry Cleaners</option><option value="Residential">Residential</option></select></span>
                        </div>
                        <div class="textareablock">
                            <label>Message <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-message"><textarea ng-model="message"name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"></textarea></span>
                            <span style="color:red" ng-show="myForm.message.$dirty && myForm.message.$invalid">
                                 <span ng-show="myForm.message.$error.required">message is required.</span>
                                 </span>
                        </div>
                        <div class="submitblock">
                            <input type="button" ng-click="contactform()"  class="wpcf7-form-control wpcf7-submit" ng-disabled="myForm.firstname.$dirty && myForm.firstname.$invalid || myForm.lastname.$dirty && myForm.lastname.$invalid||myForm.email.$dirty && myForm.email.$invalid || myForm.telephone.$dirty && myForm.telephone.$invalid||myForm.message.$dirty && myForm.message.$invalid" value="Submit" />
                        </div>
                        <div class="responseblock">
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </div>
                    </div>
                </form>
                </div>
          
</div>
<div class="col-md-6 col-xs-12 col-sm-12">
           <h4>Location</h4>
         <div id="Map" style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden;width:100%;height:600px"></div>
</div>
</div>
        <!-- Add Google Maps -->
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyARSzTL0jkwSGCQJidZoQ9tdGNkBXUNRSg"></script>
     <script>
      var myCenter = new google.maps.LatLng(13.198173, 77.705370);
           
           function initialize() {
           var mapProp = {
           center:myCenter,
           zoom:12,
           scrollwheel:true,
           draggable:true,
           mapTypeId:google.maps.MapTypeId.ROADMAP
           };
           
           var map = new google.maps.Map(document.getElementById("Map"),mapProp);
           
           var marker = new google.maps.Marker({
           position:myCenter,
           });
           
           marker.setMap(map);
           }
           
           google.maps.event.addDomListener(window, 'load', initialize);
                      
           </script>
     <script>
app.controller('validateCtrl', function($scope,$http) {
    $scope.firstname = '';
    $scope.lastname = '';
    $scope.email = '';
    $scope.telephone = '';
    $scope.message = '';
     $scope.contactform= function()
    {
      $http({
        url: "<?php echo site_url();?>WashBox/contactus",
        method: "POST",
        data: {firstname:$scope.firstname,lastname:$scope.lastname,email:$scope.email,telephone:$scope.telephone,message:$scope.message}
      
        }).success(function(data, status, headers, config) {
         
           //console.log(data);
           
        $scope.data=data;
        //$scope.authentication();
      });
    }
});
</script>
           </div>
</div>
       

