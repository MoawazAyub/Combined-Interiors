<?php 

$upload_directory = "uploads";

// helper functions


function last_id(){

global $connection;

return mysqli_insert_id($connection);


}


function set_message($msg){

if(!empty($msg)) {

$_SESSION['message'] = $msg;

} else {

$msg = "";


    }


}


function display_message() {

    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }



}


function redirect($location){

return header("Location: $location ");


}



// function redirect($location, $sec=0)
// {
//     if (!headers_sent())
//     {
//         header( "refresh: $sec;url=$location" ); 
//     }
//     elseif (headers_sent())
//     {
//         echo '<noscript>';
//         echo '<meta http-equiv="refresh" content="'.$sec.';url='.$location.'" />';
//         echo '</noscript>';
//     }
//     else
//     {
//         echo '<script type="text/javascript">';
//         echo 'window.location.href="'.$location.'";';
//         echo '</script>';
//     }
// }



function query($sql) {

global $connection;

return mysqli_query($connection, $sql);


}


function confirm($result){

global $connection;

if(!$result) {

die("QUERY FAILED " . mysqli_error($connection));


	}


}


function escape_string($string){

global $connection;

return mysqli_real_escape_string($connection, $string);


}



function fetch_array($result){

return mysqli_fetch_array($result);


}


/****************************FRONT END FUNCTIONS************************/


// get products 


function get_products() {


$query = query(" SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER

<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}"><img src="../resources/{$product_image}" alt=""></a>
        <div class="caption">
            <h4 class="pull-right">&#36;{$row['product_price']}</h4>
            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
            </h4>
            <p>Most Expensive and good quality Stuff Garety.by admin</p>
             <a class="btn btn-primary" target="_blank" href="../resources/cart.php?add={$row['product_id']}">Add to cart</a>
        </div>


       
    </div>
</div>

DELIMETER;

echo $product;


		}


}

//----------------------------------------------------------------------------=========
//((((
function get_vproducts() {


$query = query(" SELECT * FROM vproducts");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER

<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}"><img src="../resources/{$product_image}" alt=""></a>
        <div class="caption">
            <h4 class="pull-right">&#36;{$row['product_price']}</h4>
            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
            </h4>
            <p>Most Expensive and good quality Stuff Garety.by Vendor</p>
             <a class="btn btn-primary" target="_blank" href="../resources/cart.php?add={$row['product_id']}">Add to cart</a>
        </div>


       
    </div>
</div>

DELIMETER;

echo $product;


		}


}


//===========================================

function get_categories(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_links = <<<DELIMETER

<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>


DELIMETER;

echo $categories_links;

     }



}








function get_products_in_cat_page() {


$query = query(" SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Most Expensive and good quality Stuff Garety. by Admin.</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


		}


}

//=========================================================

function get_vproducts_in_cat_page() {


$query = query(" SELECT * FROM vproducts WHERE product_category_id = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Most Expensive and good quality Stuff Garety. by Vendor.</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


		}


}


//=======================================================

function get_products_in_shop_page() {


$query = query(" SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Most Expensive and good quality Stuff Garety. by Admin</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


        }


}

//===============================================================

function get_vproducts_in_shop_page() {


$query = query(" SELECT * FROM vproducts");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Most Expensive and good quality Stuff Garety. by Vendor</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


        }


}


//==============================

function login_user(){

if(isset($_POST['submit'])){

$username = escape_string($_POST['username']);

$password = escape_string($_POST['password']);

$query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password }' ");
confirm($query);

if(mysqli_num_rows($query) == 0) {

set_message("Your Password or Username are wrong");
redirect("login.php");


} else {

$_SESSION['username'] = $username;
redirect("admin");

         }



    }



}

//------------------------------------------cuser common lofin


function clogin_user(){

if(isset($_POST['submit'])){

$username = escape_string($_POST['username']);

$password = escape_string($_POST['password']);

$query = query("SELECT * FROM cusers WHERE Cusers_name = '{$username}' AND Cusers_password = '{$password }' ");
confirm($query);

if(mysqli_num_rows($query) == 0) {

set_message("Your Password or Username are wrong");
redirect("clogin.php");


} else {

$_SESSION['cusername'] = $username;
redirect("index.php");

         }



    }



}

function vlogin_user(){

if(isset($_POST['submit1'])){

$username = escape_string($_POST['username']);

$password = escape_string($_POST['password']);

$query = query("SELECT * FROM vendor WHERE vendor_name = '{$username}' AND vendor_password = '{$password }' ");
confirm($query);

if(mysqli_num_rows($query) == 0) {

set_message("Your Password or Username are wrong");
redirect("clogin.php");


} else {


while($row = fetch_array($query)) {
	$vid = $row['vendor_id'];
}

$_SESSION['vid'] = $vid;
$_SESSION['vusername'] = $username;
redirect("vendor");

         }



    }



}


function Register_cuser()
{
	if(isset($_POST['submit'])) {
	$username   = escape_string($_POST['username']);
$email      = escape_string($_POST['email']);
$password   = escape_string($_POST['password']);
// $user_photo = escape_string($_FILES['file']['name']);
// $photo_temp = escape_string($_FILES['file']['tmp_name']);


// move_uploaded_file($photo_temp, UPLOAD_DIRECTORY . DS . $user_photo);


$query = query("INSERT INTO cusers(Cusers_name,Cusers_email,Cusers_password) VALUES('{$username}','{$email}','{$password}')");
confirm($query);

set_message("USER CREATED");

redirect("index.php?users");
	}
}


//]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]

function Register_vuser()
{
	if(isset($_POST['submit1'])) {
	$username   = escape_string($_POST['username']);
$email      = escape_string($_POST['email']);
$password   = escape_string($_POST['password']);
$phone   = escape_string($_POST['phone']);
$addr   = escape_string($_POST['addr']);
// $user_photo = escape_string($_FILES['file']['name']);
// $photo_temp = escape_string($_FILES['file']['tmp_name']);


// move_uploaded_file($photo_temp, UPLOAD_DIRECTORY . DS . $user_photo);


$query = query("INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_email`, `vendor_password`, `vendor_phone`, `vendor_shop_addr`) VALUES (NULL, '{$username}', '{$email}', '{$password}', '{$phone}', '{$addr}')");
confirm($query);

set_message("Vendor CREATED");

//redirect("index.php?users");
	}
}

//-------------------------------------------------


function send_message() {

    if(isset($_POST['submit'])){ 

        $to          = "moawazayubmmm@gmail.com";
        $from_name   =   $_POST['name'];
        $subject     =   $_POST['subject'];
        $email       =   $_POST['email'];
        $message     =   $_POST['message'];


        $headers = "From: {$from_name} {$email}";


        $result = mail($to, $subject, $message,$headers);

        if(!$result) {

            set_message("Sorry we could not send your message");
            redirect("contact.php");
        } else {

            set_message("Your Message has been sent");
            redirect("contact.php");
        }




    }




}



/****************************BACK END FUNCTIONS************************/


function display_orders(){



$query = query("SELECT * FROM orders");
confirm($query);


while($row = fetch_array($query)) {


$orders = <<<DELIMETER

<tr>
    <td>{$row['order_id']}</td>
    <td>{$row['order_amount']}</td>
    <td>{$row['order_transaction']}</td>
    <td>{$row['order_currency']}</td>
    <td>{$row['order_status']}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_order.php?id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>




DELIMETER;

echo $orders;



    }



}




/************************ Admin Products Page ********************/

function display_image($picture) {

global $upload_directory;

return $upload_directory  . DS . $picture;



}





function get_products_in_admin(){


$query = query(" SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)) {

$category = show_product_category_title($row['product_category_id']);

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER

        <tr>
            <td>{$row['product_id']}</td>
            <td>{$row['product_title']}<br>
        <a href="index.php?edit_product&id={$row['product_id']}"><img width='100' src="../../resources/{$product_image}" alt=""></a>
            </td>
            <td>{$category}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
             <td><a class="btn btn-danger" href="../../resources/templates/back/delete_product.php?id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $product;


        }





}


//---------------------------------------------------------------------------------get products in vendor

function get_products_in_vendor(){

$temp = $_SESSION['vid'];
$query = query("SELECT * FROM vproducts WHERE vendor_id = $temp");
confirm($query);

while($row = fetch_array($query)) {

$category = show_product_category_title($row['product_category_id']);

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER

        <tr>
            <td>{$row['product_id']}</td>
            <td>{$row['product_title']}<br>
        <a href="index.php?edit_product&id={$row['product_id']}"><img width='100' src="../../resources/{$product_image}" alt=""></a>
            </td>
            <td>{$category}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
             <td><a class="btn btn-danger" href="../../resources/templates/backv/delete_product.php?id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $product;


        }





}

//------------------------------------------------------------------------------------//displaying vendor in admin

function get_users_in_vendor(){


$query = query(" SELECT * FROM vendor");
confirm($query);

while($row = fetch_array($query)) {





$product = <<<DELIMETER

        <tr>
            <td>{$row['vendor_id']}</td>
            <td>{$row['vendor_name']}</td>
            <td>{$row['vendor_email']}</td>
            <td>{$row['vendor_phone']}</td>
            <td>{$row['vendor_shop_addr']}</td>
             <td><a class="btn btn-danger" href="../../resources/templates/back/delete_vendor.php?id={$row['vendor_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $product;


        }





}


//-----------------------------------------------------------------------------------


function show_product_category_title($product_category_id){


$category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");
confirm($category_query);

while($category_row = fetch_array($category_query)) {

return $category_row['cat_title'];

}



}






/***************************Add Products in admin************---------------********/


function add_product() {


if(isset($_POST['publish'])) {


$product_title          = escape_string($_POST['product_title']);
$product_category_id    = escape_string($_POST['product_category_id']);
$product_price          = escape_string($_POST['product_price']);
$product_description    = escape_string($_POST['product_description']);
$short_desc             = escape_string($_POST['short_desc']);
$product_quantity       = escape_string($_POST['product_quantity']);
$product_image          = escape_string($_FILES['file']['name']);
$image_temp_location    = escape_string($_FILES['file']['tmp_name']);

move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);


$query = query("INSERT INTO products(product_title, product_category_id, product_price, product_description, short_desc, product_quantity, product_image) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$short_desc}', '{$product_quantity}', '{$product_image}')");
$last_id = last_id();
confirm($query);
set_message("New Product with id {$last_id} was Added");
redirect("index.php?products");


        }


}

//--------------------------------------------------------product add in vendor

function add_vproduct() {


if(isset($_POST['publish'])) {


$product_title          = escape_string($_POST['product_title']);
$product_category_id    = escape_string($_POST['product_category_id']);
$product_price          = escape_string($_POST['product_price']);
$product_description    = escape_string($_POST['product_description']);
$short_desc             = escape_string($_POST['short_desc']);
$product_quantity       = escape_string($_POST['product_quantity']);
$product_image          = escape_string($_FILES['file']['name']);
$image_temp_location    = escape_string($_FILES['file']['tmp_name']);

move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);

$temp = $_SESSION['vid'];
$query = query("INSERT INTO vproducts(product_title, product_category_id, product_price, product_description, short_desc, product_quantity, product_image, vendor_id) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$short_desc}', '{$product_quantity}', '{$product_image}', $temp)");
$last_id = last_id();
confirm($query);
set_message("New Product with id {$last_id} was Added");
//redirect("index.php?products");


        }


}



//---------------------------------------------------------------

function show_categories_add_product_page(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_options = <<<DELIMETER

 <option value="{$row['cat_id']}">{$row['cat_title']}</option>


DELIMETER;

echo $categories_options;

     }



}



/***************************updating product code ***********************/

function update_product() {


if(isset($_POST['update'])) {


$product_title          = escape_string($_POST['product_title']);
$product_category_id    = escape_string($_POST['product_category_id']);
$product_price          = escape_string($_POST['product_price']);
$product_description    = escape_string($_POST['product_description']);
$short_desc             = escape_string($_POST['short_desc']);
$product_quantity       = escape_string($_POST['product_quantity']);
$product_image          = escape_string($_FILES['file']['name']);
$image_temp_location    = escape_string($_FILES['file']['tmp_name']);


if(empty($product_image)) {

$get_pic = query("SELECT product_image FROM products WHERE product_id =" .escape_string($_GET['id']). " ");
confirm($get_pic);

while($pic = fetch_array($get_pic)) {

$product_image = $pic['product_image'];

    }

}



move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);


$query = "UPDATE products SET ";
$query .= "product_title            = '{$product_title}'        , ";
$query .= "product_category_id      = '{$product_category_id}'  , ";
$query .= "product_price            = '{$product_price}'        , ";
$query .= "product_description      = '{$product_description}'  , ";
$query .= "short_desc               = '{$short_desc}'           , ";
$query .= "product_quantity         = '{$product_quantity}'     , ";
$query .= "product_image            = '{$product_image}'          ";
$query .= "WHERE product_id=" . escape_string($_GET['id']);





$send_update_query = query($query);
confirm($send_update_query);
set_message("Product has been updated");
redirect("index.php?products");


        }


}

/*************************Categories in admin ********************/


function show_categories_in_admin() {


$category_query = query("SELECT * FROM categories");
confirm($category_query);


while($row = fetch_array($category_query)) {

$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];


$category = <<<DELIMETER


<tr>
    <td>{$cat_id}</td>
    <td>{$cat_title}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_category.php?id={$row['cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>



DELIMETER;

echo $category;



    }



}


function add_category() {

if(isset($_POST['add_category'])) {
$cat_title = escape_string($_POST['cat_title']);

if(empty($cat_title) || $cat_title == " ") {

echo "<p class='bg-danger'>THIS CANNOT BE EMPTY</p>";


} else {


$insert_cat = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}') ");
confirm($insert_cat);
set_message("Category Created");



    }


    }




}

 /************************admin users***********************/



function display_users() {


$category_query = query("SELECT * FROM users");
confirm($category_query);


while($row = fetch_array($category_query)) {

$user_id = $row['user_id'];
$username = $row['username'];
$email = $row['email'];
$password = $row['password'];

$user = <<<DELIMETER


<tr>
    <td>{$user_id}</td>
    <td>{$username}</td>
     <td>{$email}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_user.php?id={$row['user_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>



DELIMETER;

echo $user;



    }



}


function add_user() {


if(isset($_POST['add_user'])) {


$username   = escape_string($_POST['username']);
$email      = escape_string($_POST['email']);
$password   = escape_string($_POST['password']);
// $user_photo = escape_string($_FILES['file']['name']);
// $photo_temp = escape_string($_FILES['file']['tmp_name']);


// move_uploaded_file($photo_temp, UPLOAD_DIRECTORY . DS . $user_photo);


$query = query("INSERT INTO users(username,email,password) VALUES('{$username}','{$email}','{$password}')");
confirm($query);

set_message("USER CREATED");

redirect("index.php?users");



}



}





function get_reports(){


$query = query(" SELECT * FROM reports");
confirm($query);

while($row = fetch_array($query)) {


$report = <<<DELIMETER

        <tr>
             <td>{$row['report_id']}</td>
            <td>{$row['product_id']}</td>
            <td>{$row['order_id']}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_title']}
            <td>{$row['product_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_report.php?id={$row['report_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $report;


        }





}












 ?>