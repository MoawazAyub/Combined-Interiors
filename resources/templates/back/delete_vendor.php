<?php require_once("../../config.php");


if(isset($_GET['id'])) {


$query = query("DELETE FROM vendor WHERE vendor_id = " . escape_string($_GET['id']) . " ");
confirm($query);


set_message("Vendor Deleted");
redirect("../../../public/admin/index.php?products");


} else {

redirect("../../../public/admin/index.php?products");


}






 ?>