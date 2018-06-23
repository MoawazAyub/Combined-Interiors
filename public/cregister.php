<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Registration</h1>
            <h2 class="text-center bg-warning"><?php display_message(); ?></h2>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
                    
                    <?php Register_cuser(); ?>

                <div class="form-group"><label for="">
                    enter username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    enter password<input type="password" name="password" class="form-control"></label>
                </div>
				
				 <div class="form-group"><label for="password">
                    enter email<input type="email" name="email" class="form-control"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>  

		
		

    </header>


        </div>
		
		
		 <div class="container">
<br><br><br><br><br><br><br><br><br><br><br>
      <header>
            <h1 class="text-center">Registration as Vendor</h1>
            <h2 class="text-center bg-warning"><?php display_message(); ?></h2>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
                    
                    <?php Register_vuser(); ?>

                <div class="form-group"><label for="">
                    enter username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    enter password<input type="password" name="password" class="form-control"></label>
                </div>
				
				 <div class="form-group"><label for="">
                    enter email<input type="email" name="email" class="form-control"></label>
                </div>
				
				<div class="form-group"><label for="">
                    enter phone number<input type="number" name="phone" class="form-control"></label>
                </div>
				
				<div class="form-group"><label for="">
                    enter Shop Address<input type="text" name="addr" class="form-control"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit1" class="btn btn-primary" >
                </div>
            </form>
        </div>  

		
		

    </header>


        </div>

   <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>