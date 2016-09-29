<!DOCTYPE html>
<style type="text/css">
select{
    font-size: 0.8em !important;
}	
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
    /*margin: 0 0 30px;
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
    /*border: 1px solid #e9e9e9;*/
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
h4{
   
    padding-bottom: 20px;
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
            <p style="text-align: center;">theWashBox is proud to work with some of the best dry cleaning companies across Bengaluru, both as partners and customers.</p>
            <p style="text-align: center;">Our network of dry cleaning partners are the backbone of our business and make sure we always collect, clean and deliver to the highest standards. We work closely with partners to ensure our door-to-door service is convenient, safe and affordable for all.</p>
            <p style="text-align: center;">Interested in growing your dry cleaning business by becoming a theWashBox partner? Simply, fill the form below or to work with us directly click here.</p>
        </div>
    </div>
    <div class="section formblock">
        <div class="container move fadeInUp">
            <h3 class="title subtitle">Contact us today</h3>
            <hr>
            <h4>Get new customers<h4>
            <div role="form" class="wpcf7" id="wpcf7-f14495-o2" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="<?php echo site_url('WashBox/businessServicesubmit');?>" method="post" class="wpcf7-form">
                    <div class="enquiryform">
                        <div class="inputblock">
                            <label>Name <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required/></span>
                        </div>
                        <div class="inputblock">
                            <label>Email <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required/></span>
                        </div>
                        <div class="inputblock">
                            <label>Telephone <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-telephone"><input type="text" name="your-telephone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required/></span>
                        </div>
                        <div class="selectblock">
                            <label>NATURE OF ENQUIRY <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-enquiry">
				<select name="your-enquiry" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" required>
			    <option value="Dry Cleaners">Dry Cleaners</option>
			    <option value="Airbnb">Hospitality</option><option value="Corporate">Corporate</option><option value="Residential">Residential</option></select></span>
                        </div>
                        <div class="textareablock">
                            <label>Message <span class="req">*</span></label><br />
                            <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" required></textarea></span>
                        </div>
                        <div class="submitblock">
                            <input type="submit"  value="Submit Enquiry" class="wpcf7-form-control wpcf7-submit" />
                        </div>
                        <div class="responseblock">
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="scrolldown floating"></div>
    </div>