<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_BACKV . "/header.php"); ?>

<?php 

if(!isset($_SESSION['vusername'])) {


redirect("../../public");

}


 ?>

        <div id="page-wrapper">

            <div class="container-fluid">

             


                <?php 

                if($_SERVER['REQUEST_URI'] == "/ecom/public/vendor/" || $_SERVER['REQUEST_URI'] == "/ecom/public/vendor/index.php")  {


                    include(TEMPLATE_BACKV . "/admin_content.php");

                }


                

                

                 if(isset($_GET['products'])){


                    include(TEMPLATE_BACKV . "/products.php");


                }


                 if(isset($_GET['add_product'])){


                    include(TEMPLATE_BACKV . "/add_product.php");


                }


                 

               


                


                


                 
				





            





                 ?>

             

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include(TEMPLATE_BACKV . "/footer.php"); ?>
