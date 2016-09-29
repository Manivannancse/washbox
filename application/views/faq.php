
<style>
    .fa
    {
    color:#000;
    }
.tabs-bordered .tab-container{
    background: #fff;
}
</style>

<div style="background:#f2f2f2">
        <div class="container" >
            <div class="col-md-12">
                 <div class="row">
                        <div id="faq" class="page-header">
			<h2>FAQ</h2>
                        <br>
			<p>Got an idea about how we can improve? Let us know at
			<a href="#">suggestions@thewashbox.in</a></p>
			<p>If you have a question about an existing order, please email
			 <a href="#">customercare@thewashbox.in</a></p>
		      </div>
                </div>
                <div class="row">
                    <div class="tabs tabs-bordered clearfix" id="tabs">
	               <ul class="tab-nav clearfix">
			<?php $count=1; foreach($faq as $row){?>
                            <li><a href="#tab-<?php echo $count;?>"><?php echo $row['faq_title']?></a></li>
			<?php $count++; }?>
                      </ul>
		    <div class="tab-container">
			<?php $count1=1; foreach($faq as $row){?>
			<div class="tab-content clearfix" id="tab-<?php echo $count1;?>">
			    <div class="panel panel-default panel-faq">
				<?php $count2=1;
				$subtitles=$this->Wash_Model->getfaqlist($row['id']);
				foreach($subtitles as $subtitle){?>
				<div class="panel-heading">
				    <a href="#faq-cat-<?php echo $count1;?>-sub-<?php echo $count2;?>" data-parent="#accordion-cat-<?php echo $count1;?>" data-toggle="collapse" class="collapsed" aria-expanded="false">
					 <h4 class="panel-title">
					   <?php echo $subtitle['faq_Subtitle'];?>
					   <span class="pull-right">
						<i class="fa fa-fw fa-plus-square"></i>
					    </span>
					 </h4>
				    </a>
				</div>
				<div id="faq-cat-<?php echo $count1;?>-sub-<?php echo $count2;?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
				    <div class="panel-body">
				     <?php echo $subtitle['faq_description'];?>
				    </div>
				</div>
				<?php $count2++; }?>
			    </div>
			</div>
			<?php $count1++; }?>
		    </div>
		</div>
	    </div>
    </div>
</div>
	
	</div>
	<script>
	    
	</script>