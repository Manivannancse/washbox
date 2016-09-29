<?php
if(count($result)>0){
    if($myWindowSize>768)
    {
?>
	<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
	    <tr>
		<th>Item</th>
		<th>Wash & Iron</th>
		<th>Dry Wash</th>
		<th>Iron</th>
	    </tr>
	</thead>
	<tbody>
	    <?php foreach($result as $row){?>
	    <tr>
		<td><?php echo $row['item_name']?></td>
		<td><?php echo $row['item_price_wash']?></td>
		<td><?php echo $row['item_price_dry']?></td>
		<td><?php echo $row['item_price_iron']?></td>
	    </tr>
	     <?php  } ?>
	</tbody>
	</table>
<?php
    }
    else
    {
	foreach($result as $row){
?>
    <script>
	$(document).ready(function(){
	$('.tab-container').addClass('col-xs-12');
	});
    </script>
  
    <table class="table table-striped table-bordered table-hover table-condensed" >

    <tbody>
    <tr>
	<th>Item</th>
	<td><?php echo $row['item_name']?></td>
    </tr>
    <tr>
	<th>Wash & Iron</th>
	<td><?php echo $row['item_price_wash']?></td>

    </tr>
    <tr>
	<th>Dry Wash</th>
	<td><?php echo $row['item_price_dry']?></td>

    </tr>
    <tr>
	<th>Iron</th>
	<td><?php echo $row['item_price_iron']?></td>

    </tr>
    
    </tbody>
    </table>


<?php
    }
    }
    }
?>
