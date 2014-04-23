<?php
//the admin is able to add new products so thaat they can b showen on the product_list.php for the users
require("scripts/add_product.class.php");
$obj=new add_product();

session_start();
if(!isset($_SESSION['manager']))
{
	header("Location: login.php");	
	session_destroy();
	exit;	
}

if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	echo "Do you want to delete the following product with an id of '$id'? "."<a href='Product.inventory.php?yes=$id'>yes</a>"." || "."<a href='Product_inventory.php?no=$id'>No</a>";
	exit;

}
	if(isset($_GET['yes']))
	{
		$id_del=$_GET['yes'];
		$obj->del($id_del);	
	}

if($_SERVER['REQUEST_METHOD']=="POST")
{
$number=$_POST['ProdNumber'];	
$name=$_POST['proName'];
$price=$_POST['price'];
$descrip=$_POST['proDetails'];
$category=$_POST['Category'];
$subcategory=$_POST['subcategory'];
//$file=$_POST['fileField'];



$id =$obj->add($name,$price,$descrip,$category,$subcategory);
$newname="$id.jpg";
move_uploaded_file($_FILES["fileField"]["tmp_name"],"proImages/$newname");
}
$out=$obj->all();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product_inventory </title>
<link rel="stylesheet" href="../../Documents/Van Rooyen/11111/vanrooyen/styles/sytle.css" type="text/css" media="screen">
</head>

<body>

<div align="center" id="main">
<?php include_once("header.php"); ?>

<div id="content">
<br />
  <div align="left" style="margin:-left:24px;"><h1></h1>

      <div align="left" style="margin-left:24px">
      <h2>Inventory List</h2>
	<?php echo $out;?>
      </div>
  </div>
<form action="../../Documents/Van Rooyen/11111/vanrooyen/Product_inventory.php" method="post" enctype="multipart/form-data">        

<table width="369" border="0">
<tr>
    <td width="98">Product Number</td>
    <td width="261"> <input type="text" name="ProdNumber" /></td>
  </tr>
  <tr>
    <td width="98">Product Name</td>
    <td width="261"> <input type="text" name="proName" /></td>
  </tr>
  <tr>
    <td>Product Type</td>
    <td><select name="Product Type">
	<option value></option>
    <option value="music">Office Chair</option>
    <option value="games">Camping Chair</option>
    <option value="movies">Study Chair</option>
	<option value="Party Chair">Party Chair</option>
	<option value="Kiddies Chairs">Kiddies Chairs</option>
	<option value="Picnic Chairs">Picnic Chairs</option>
	<option value="Kitchen Chairs">Kitchen Chairs</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price" /></td>
  </tr>
  <tr>
    <td>Product Details</td>
    <td><textarea name="proDetails" cols="16" rows="5"></textarea></td>
  </tr>
   </tr>
  <tr>
    <td>Product Image</td>
    <td><p>
      <input type="file" name="fileField" />
    </p>
   </td>
  </tr>
  <tr>
    <td width="98">Stock available</td>
    <td width="261"> <input type="text" name="Stock availabaility" /></td>
  </tr>
    <tr>
    <td><p>&nbsp;
      </p>
      <p>
        <input type="submit" value="Save Product" />
      </p></td>
  </tr>
</table>
  </form> 
  <br/>
<a href="../../Documents/Van Rooyen/11111/vanrooyen/index_admin.php">Back</a>
<br/>
<br/>
</div>


<?php include_once("footer.php"); ?>
</div>
	

</body>
</html>
