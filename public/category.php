<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Combined Interiors</h1>
            <p>American Express: "We work hard every day to make Combined Interiors the world's most Awesome Website brand. (M. Moawaz Ayub)"</p>
            
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Product</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

         <?php get_products_in_cat_page(); ?>
		 <br>
		 <?php get_vproducts_in_cat_page(); ?>


        </div>
        <!-- /.row -->

      

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
