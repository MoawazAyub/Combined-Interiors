<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . "/header.php"); ?>
 <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   Accept Vendors Request

</h1>

<h4 class= "bg-success"><?php display_message(); ?></h4>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>Name</th>
           <th>Type</th>
           <th>Status</th>
           <th>Product</th>
           <th>Blood Group</th>
		   <th></th>
   
      </tr>
    </thead>
    <tbody>
        <tr>
		  <td>Hafiz</td>
           <td>Seller</td>
           <td>Rich</td>
           <td>Bricks</td>
           <td>A+</td>
		   <td><a class='btn btn-warning' href="#">Remove</a> 
<a class='btn btn-danger' href="#">Accept</a></td>    
		
		</tr>

    </tbody>
</table>
</div>