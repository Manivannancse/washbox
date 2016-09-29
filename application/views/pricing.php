 <style>
    @media (max-width: 768px)
    {
        .tabs ul{
            width: 100% !important;
            min-height: 1px !important;
            padding-left: 15px !important;
            padding-right: 15px !important;
            position: relative !important;
            text-align: center !important;
        }
        
         #main-background{
            padding: 0px ;
         }
        
      
    }
    .otherOptions{
        background: none !important;
        cursor: pointer !important;
    }
    thead {
        background: #38A5DA;
        color: white;
    }
    table{
      box-shadow: 0 7px 9px -2px grey;
    }
    ul.tab-nav.tab-nav2 li a
    {
       border-radius: 31px;
    }
ul.tab-nav li a {
    
    text-align: center;
}
    @media (min-width: 769px)
    {
      #main-background{
         padding:43px ;
      }
    }
 </style>

 <section id="main-background"style="background: #F2F2F2; ">
    <div class="container"  style=" background:white;padding: 43px ;box-shadow:2px 2px 17px -2px grey ">
        <div class="tabs side-tabs nobottommargin clearfix"     id="tab-6">
            <ul class="tab-nav tab-nav2 clearfix col-xs-12 ">
                <?php $i=0; foreach($result as $row){ ?>
                <li id="tabId-<?php echo $row['id']; ?>"class="hidden-phone  <?php if($i==0){ echo 'ui-state-active ';} else  {echo 'hidden-xs ';}?>"><a class="tabsCategeory" href="#tabs" onclick="selectOptions(this);getPricing($(this),<?php echo $row['id'];?>);"><?php echo $row['category']?></a>
                </li>
                <?php $i++; } ?>
                <li>
                    <a class="otherOptions hidden-sm hidden-lg hidden-md " onclick="showOptions()">Other Options <i class="fa fa-caret-down"></i></a>
                </li>
            </ul>
            <div class="tab-container">
                <div class="tab-content clearfix" id="tabsItem">
                    

                </div>
            </div>
        </div>
    </div>
    </div>
</section>   
    <script>
    var myWindowSize=$(window).width() ;
    
    $.ajax({
        type: "POST",
        url: "<?=site_url('WashBox/getItemTable')?>",
        data:{tabValues:<?php echo $result[0]['id'] ?>,myWindowSize:myWindowSize},
        success: function (response){
        $('#tabsItem').html(response);
        },
    });
    function getPricing($this,thisValue) {
        var tabValues = thisValue;
        var tempId;
        var matchId;
        $.ajax({
            type: "POST",
            url: "<?=site_url('WashBox/getItemTable')?>",
            data:{tabValues:tabValues,myWindowSize:myWindowSize},
            success: function (response){
                if (response!="") {
                $('#tabsItem').html(response);
                }
                else{
                $('#tabsItem').html("<h4>No Items in this Category</h4>");

                }
                
            },
        });
        $(".tabs li").each(function(){
            tempId=$(this).attr('id');
            matchId="tabId-"+thisValue;

            if (tempId!=matchId)
            {
              $(this).removeClass('ui-state-active');  
            }
            else
            {
                $(this).addClass('ui-state-active');
            }
        });
    }
    function showOptions(){
        $(".tabs li").each(function(){
            if(($(this).hasClass("hidden-xs"))==true)
            {
              $(this).removeClass('hidden-xs');  
            }
        });
        $(".otherOptions").parent.hide();
    }
 
    function selectOptions($this){

        if (myWindowSize<768) {
            var $select=$($this).parent().attr('id');
            $(".tabs li").each(function(){
                if(($(this).attr('id'))!=$select)
                {
                    $(this).addClass('hidden-xs');  
                }
                else{
                    if(($(this).hasClass("hidden-xs"))==true)
                    {
                      $(this).removeClass('hidden-xs');  
                    }
                }
            });
            $(".otherOptions").parent().show();
            $(".otherOptions").parent().removeClass('hidden-xs'); 
        }
        
    }
    
    </script>