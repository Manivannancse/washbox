<html>
        <head>
	   <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
	   <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	   <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
        </head>
        
        <body>
        <script type="text/javascript" >
                   $(document).ready(function() {
	           $('#datatable').DataTable();
		      } );
        </script>
                

<table id="datatable" class="display" cellpadding="1" cellspacing="1"  width="100%">
<thead>
<tr>
    <th>ITEM</th>
    <th>WASH & IRON</th>
    <th>DRY WASH</th>
    <th>IRON</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
</thead>
<tbody>
    <?php
             while ($row=mysql_fetch_array($result))
             {
             $id=$row['id'];
             $name=$row['name'];
             $date=$row['date'];
             $age=$row['age'];
             $email=$row['email'];
             $contactno=$row['contactno'];
             $address=$row['address'];
             $city=$row['city'];
             $pincode=$row['pincode'];
             ?>
         
         <tr>
             <td><?php echo $id;?></td>
             <td><?php echo $name;?></td>
             <td><?php echo $date;?></td>
             <td><?php echo $age;?></td>
             <td><?php echo $email?></td>
             <td><?php echo $contactno;?></td>
             <td><?php echo $address;?></td>
             <td><?php echo $city;?></td>
             <td><?php echo $pincode;?></td>
             
         </tr>



             <?php
                     }
             ?>
</tbody>
<tfoot>
<tr>
    <th>ITEM</th>
    <th>WASH & IRON</th>
    <th>DRY WASH</th>
    <th>IRON</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
</tfoot>
</table>
        </body>
</html>