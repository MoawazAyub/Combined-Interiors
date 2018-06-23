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
           <th>Vendor Id</th>
           <th>Vendor Name</th>
           <th>Vendor email</th>
           <th>Vendor phone</th>
           <th>Blood Shop Address</th>
		   <th></th>
   
      </tr>
    </thead>
    <tbody>
        
		<?php get_users_in_vendor(); ?>

    </tbody>
</table>
</div>