<style>
   .container {
    margin: 0 auto;
    padding: 0 18px;
}
.section
{
    padding: 50px 0 60px;
    position: relative;
    text-align: center;
    background-color:#ffffff;
    
}
.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
}
.img {
    height: auto;
    max-width: 100%;
    vertical-align: bottom;
}

.section.photocontent .image {
    float: left;
    text-align: center;
    width: 35%;
}
.section.photocontent.photoleft .copy {
    padding: 5px 0 0 5%;
}
.section.photocontent .copy {
    float: left;
    width: 60%;
}
.section.photocontent p {
    font-size: 1.2em;
    margin: 0 0 18px;
}
p {
    line-height: 1.4em;
     font-family: "Avenir W01";
     font-weight: 300;
}

b, strong {
    font-weight: 800;
}

.section h3.subtitle {
    color: #69737f;
    font-size: 2.4em;
    margin:0 0 39px;
    padding: 0 0 24px;
}
.enquiryform {
    margin: 0 auto;
    max-width: 480px;
    overflow: hidden;
}

.section.photocontent {
    border-bottom: 1px solid #dbdbdb;
}
.section {
    padding: 50px 0 60px;
    position: relative;
    text-align: center;
}
.enquiryform input.submit, .enquiryform input.wpcf7-submit {
    font-size: 1.4em;
    text-align: center;
}
input.submit, input.wpcf7-submit {
    background-color: #41a8de;
    border: 1px solid #41a8de;
    color: #ffffff;
    margin: 0;
    text-transform: uppercase;
}
.section.photocontent.photoleft .copy {
    padding: 5px 0 0 5%;
}
/*.section.photocontent .copy {
    float: left;
    width: 60%;
}*/

.enquiryform label {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    float: left;
    margin: 0;
    min-width: inherit;
    padding: 0 2%;
    text-align: left;
    width: 96%;
}
label {
    color: #29333d;
    display: inline-block;
    line-height: 30px;
    text-transform: uppercase;
}
input {
    height: 40px;
    line-height: 38px;
}
input, select, textarea {
    background-color: #f4f4f4;
    border: -1px solid #f4f4f4 !impotrant;
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

.req {
    color: #ea1b2a;
}

.section h3.subtitle {
    color: #69737f;
    font-size: 2.4em;
    margin: 0 0 24px;
    padding: 0 0 24px;
}

input:focus, select:focus, textarea:focus {
    background-color: #e9e9e9;
    border: 1px solid #41a8de;
}
h4 {
    font-size: 1.4em;
}
    /*.addfont {
    color: #505050 !important;
    font-family: "Avenir W01",Helvetica,Arial,sans-serif !important;
    font-weight: 300 !important;
}*/
@media only screen and (max-width: 768px) {
    .section.photocontent .copy {
    float: left;
    width: 100%;
    }
    .section.photocontent .image {
    /*float: left;
    text-align: center;*/
    width: 100%;
}
/*@media only screen and (max-width: 768px) {
    .section.photocontent .copy {
    float: left;
    width: 100%;
    }
    .section.photocontent .image {
    float: left;
    text-align: center;
    width: 100%;
   }
}
*/      </style>


<div class="section photocontent photoleft">
    <div class="container fadeInUp moveit animated" style="visibility: visible; animation-name: fadeInUp;">
        <div class="image">
            <center><img alt="image" src="<?php echo site_url();?>application/assests/images/quality-badge.png"></center>
        </div>  
        <div class="copy">
            <p></p>
               <p align="justify">At Laundrapp, we're serious about making sure your clothes are cleaned to the highest possible standard. Unlike other dry cleaners we have strict guidelines and make sure we regularly check every item we clean. It's just one of the many things that makes Laundrapp the UK's most popular dry cleaning and laundry app!</p>
               <h4 style="text-align: center;">We'll re-clean if you're not satisfied</h4>
               <p align="justify">
                    We're so confident in the quality of our cleaning we even offer the Laundrapp Quality Guarantee. That means if you're ever unsatisfied with the quality of our cleaning, just let us know within 24 hours and we'll
                    <strong>re-clean your items for free</strong>
                    .No ifs, no buts  all you have to do is let us know and send us a photo.
              </p>
        </div>
    </div>
</div>

<div class="section formblock">
        <div class="container move fadeInUp">
             <h3 class="title subtitle">Send us your re-clean request</h3>
             <div id="wpcf7-f18465-o2" class="wpcf7" lang="en-US" dir="ltr" role="form">
                    <div class="screen-reader-response"></div>
                        <form class="wpcf7-form" novalidate="novalidate" enctype="multipart/form-data" method="POST" action="<?php echo site_url('WashBox/qualityguarantee');?>">
                             <div style="display: none;">
                                    <input type="hidden" value="18465" name="_wpcf7">
                                    <input type="hidden" value="4.3" name="_wpcf7_version">
                                    <input type="hidden" value="en_US" name="_wpcf7_locale">
                                    <input type="hidden" value="wpcf7-f18465-o2" name="_wpcf7_unit_tag">
                                    <input type="hidden" value="6895638823" name="_wpnonce">
                             </div>
                             <div class="enquiryform">
                                     <div class="inputblock">
                                         <label>
                                             Name
                                             <span class="req">*</span>
                                         </label>
                                           <br>
                                          <span class="wpcf7-form-control-wrap your-name">
                                                <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" type="text" aria-invalid="false" aria-required="true" size="40" value="" name="name">
                                         </span>
                                     </div>
                                     <div class="inputblock">
                                            <label>
                                                 Email
                                                 <span class="req">*</span>
                                            </label>
                                            <br>
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" type="email" aria-invalid="false" aria-required="true" size="40" value="" name="your-email">
                                            </span>
                                     </div>
                                    <div class="inputblock">
                                         <label>
                                               Order number (you can find this in the order list)
                                               <span class="req">*</span>
                                        </label>
                                          <br>
                                            <span class="wpcf7-form-control-wrap order-number">
                                                <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" type="text" aria-invalid="false" aria-required="true" size="40" value="" name="order-number">
                                            </span>
                                    </div>
                                    <div class="textareablock">
                                         <label>
                                             Message
                                             <span class="req">*</span>
                                        </label>
                                          <br>
                                         <span class="wpcf7-form-control-wrap your-message">
                                               <textarea class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-invalid="false" aria-required="true" rows="10" cols="40" name="your-message"></textarea>
                                         </span>
                                    </div>
                                    <div class="textareablock">
                                        <label>
                                            Please attach any photos, so we can follow-up shortly.
                                            <span class="req">*</span>
                                      </label>
                                          <br>
                                          <span class="wpcf7-form-control-wrap photo-reclean">
                                              <input class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" type="file" aria-invalid="false" aria-required="true" size="40" name="image1">
                                         </span>
                                    </div>
                                    <div class="textareablock">
                                         <label>Please feel free to attach more photos. </label>
                                          <br>
                                         <span class="wpcf7-form-control-wrap photo-reclean-2">
                                             <input class="wpcf7-form-control wpcf7-file" type="file" aria-invalid="false" size="40" name="image2">
                                        </span>
                                          <br>
                                        <span class="wpcf7-form-control-wrap photo-reclean-3">
                                             <input class="wpcf7-form-control wpcf7-file" type="file" aria-invalid="false" size="40" name="image3">
                                        </span>
                                        <br>
                                        <span class="wpcf7-form-control-wrap photo-reclean-4">
                                             <input class="wpcf7-form-control wpcf7-file" type="file" aria-invalid="false" size="40" name="image4">
                                                
                                        </span>
                                    </div>
                                    <br>
                                    <br>
                                        <div class="submitblock">
                                            <input class="wpcf7-form-control wpcf7-submit" name="save" type="submit" value="Submit Request">
                                                
                                        </div>
                                        <div class="responseblock">
                                             <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </div>
                             </div>
                     </form>
             </div>
      </div>
</div
      </body>
 