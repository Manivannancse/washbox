<!DOCTYPE html>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
.section {
    /*padding: 50px 0 60px;*/
    padding: 20px 0 0px;
    position: relative;
    text-align: center;
    margin: 20px 0;
}
.feature {
    float: left;
    padding: 0 3.5%;
    width: 25%;
}
a.btn {
    border: 1px solid #41a8de;
    border-radius: 6px !important;
    color: #41a8de;
    display: inline-block;
    font-size: 1.2em;
    line-height: 42px;
    margin: 0 4px 6px 0;
    padding: 0 18px;
    text-decoration: none;
    text-transform: uppercase;
}
/*.btn {
    border-radius: 6px !important;
}*/
a.btn:hover, a.btn:focus {
    background-color: #2091c4;
    border-color: #2091c4;
    color: #fff;
}
.enquiryform {
    margin: 0 auto;
    max-width: 480px;
    overflow: hidden;
}
.section h3.title {
    background-image: url("_images/common/bkgd-sectiontitle.svg");
    background-position: center bottom;
    background-repeat: no-repeat;
    color: #505050;
    font-size: 2em;
    font-weight: 100;
   /* margin: 0 0 30px;
    padding: 0 0 30px;*/
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
@media only screen and (max-width: 320px) {
    .feature {
        float: left;
        padding: 0 3.5%;
        width: 100%;
    }
}
@media only screen and (max-width: 768px) {
    .feature {
        float: left;
        padding: 0 3.5%;
        width: 100%;
    }
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
    <div class="section opencontent">
        <div class="container move fadeInUp">
            <p style="text-align: center;">TheWashBox is covering most part of Bengaluru in dry cleaning and laundry service, but did you know we also offer discounts and benefits to businesses across the Bengaluru? Our users include businesses of all types and sizes, all of whom benefit from a reliable laundry service that comes right to their door. It&#8217;s a great way to keep your staff looking good and feeling great!</p>
            <p style="text-align: center;">TheWashBox is currently covering most part of Bengaluru and we are coming close to you shortly, so get in touch today to find out how TheWashBox can work for you.</p>
        </div>
    </div>
    <div class="section features">
    <div class="marker" id="features"></div>
        <div class="container move fadeInUp">
        <h3 class="title">We Work With</h3>
            <div class="featuresgrid">
                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo site_url();?>application/assests/images/final/we-work-with_03.png" alt="" />
                    </div>
                    <p>Grow your business as a TheWashBox partner</p>
                    <a href="<?php echo site_url('WashBox/dryclean');?>" class="btn">Dry Cleaners</a>
                </div>
                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo site_url();?>application/assests/images/final/we-work-with_05.png" alt="" />
                    </div>
                    <p>Exclusive staff benefits for corporate partners</p>
                    <a href="<?php echo site_url('WashBox/corporate');?>" class="btn">Corporate</a>
                </div>
                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo site_url();?>application/assests/images/final/we-work-with_07.png" alt="" />
                    </div>
                    <p>Flexible solutions for appartement residance</p>
                    <a href="<?php echo site_url('WashBox/residential');?>" class="btn">Residential</a>
                </div>
                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo site_url();?>application/assests/images/final/we-work-with_09.png" alt="" />
                    </div>
                    <p>Flexible solutions for the hospitality sector</p>
                    <a href="<?php echo site_url('WashBox/airbnb');?>" class="btn">Hospitality</a>
                </div>
            </div>
        </div>
    <div class="scrolldown floating"></div>
    </div>
    <!--<div class="section formblock">
        <div class="container move fadeInUp">
            <h3 class="title subtitle">Contact us today</h3>
            <hr class="lines">
            <div role="form" class="wpcf7" id="wpcf7-f14495-o2" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="<?php echo site_url('WashBox/aboutus');?>" method="post" class="wpcf7-form" novalidate="novalidate">
                    <div class="enquiryform">
                        <div class="inputblock">
                            <label>Name <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span>
                        </div>
                        <div class="inputblock">
                            <label>Email <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span>
                        </div>
                        <div class="inputblock">
                            <label>Telephone <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-telephone"><input type="text" name="your-telephone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span>
                        </div>
                        <div class="selectblock">
                            <label>NATURE OF ENQUIRY <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-enquiry"><select name="your-enquiry" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Airbnb">Hospitality</option><option value="Corporate">Corporate</option><option value="Dry Cleaners">Dry Cleaners</option><option value="Residential">Residential</option></select></span>
                        </div>
                        <div class="textareablock">
                            <label>Message <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span>
                        </div>
                        <div class="submitblock">
                            <input type="submit" value="Submit Enquiry" class="wpcf7-form-control wpcf7-submit" />
                        </div>
                        <div class="responseblock">
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="scrolldown floating"></div>-->
   <!-- </div>-->
    <!--<div class="section downloads showmobile">
    <div class="marker" id="downloads"></div>
    <div class="container move fadeInUp">
      
      <div class="downloadoronline">
        <div class="downloadleft">
          <div class="wrap">
            <h3 class="title subtitle">Get the App</h3>
            <p>Enjoy laundry freedom with us. Download & order now.</p>
            <ul class="appbadges">
                                          <li><a href="http://app.adjust.io/9pw9jo" target="_blank"><img src="https://www.laundrapp.com/wp-content/themes/laundrapp/_images/common/icon-appstore-badge.svg" alt="App Store" width="136" height="40" /></a></li>                                          
                                          <li><a href="https://app.adjust.io/6k7s4w" target="_blank"><img src="https://www.laundrapp.com/wp-content/themes/laundrapp/_images/common/icon-googleplay-badge.svg" alt="Google Play" width="116" height="40" /></a></li>                            
                          </ul>
          </div>
        </div>    
      </div>
      
    </div>
  </div>-->
  
<!--  <div class="section orderonlinestrip hidemobile">
    <div class="container move fadeInUp">
    
      <p>Order online for on-demand collection and delivery</p> 
      <div class="startorderform">
        <div role="form" class="wpcf7" id="wpcf7-f24553-o3" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/business-services#wpcf7-f24553-o3" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="24553" />
<input type="hidden" name="_wpcf7_version" value="4.3" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f24553-o3" />
<input type="hidden" name="_wpnonce" value="52172439a1" />
</div>
<div class="smsform ordernowform">
<div class="inputblock"><span class="wpcf7-form-control-wrap postcode"><input type="text" name="postcode" value="" size="40" minlength="5" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="postcode" aria-required="true" aria-invalid="false" placeholder="Enter your full postcode" /></span><input type="submit" value="Order Now" class="wpcf7-form-control wpcf7-submit" id="check_postcode" />
</div>
<div class="responseblock">
<div class="submitting"></div>
<div class="wpcf7-response-output wpcf7-display-none"></div>
</div>
</div>
</form></div>      </div>
      
    </div>
  </div>
-->  