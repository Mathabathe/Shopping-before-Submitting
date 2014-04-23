
<?php
require("PHP Phase B/cart.php");
session_start();
//displays the products that the customer selected and stored them on a shopping cart 
if(isset($_GET['add']))
{
	
	$_SESSION['cart_'.$_GET['add']]+=1;
}

if(isset($_GET['sub']))
{
	
	$_SESSION['cart_'.$_GET['sub']]--;
}

if(isset($_GET['remov']))
{
	
	$_SESSION['cart_'.$_GET['remov']]=0;
}

$obj=new shopping_cart();
$output=$obj->cart($_SESSION);
$total=$obj->total_cost_to_pay();

if(isset($_GET['clear'])&&isset($_GET['clear'])=="empty")
{
	session_destroy();
	header("Location: index.php");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> view Shopping Cart</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="NOINDEX, FOLLOW" />
<meta name="google-site-verification" content="-z6PKU5_vIPy8pqMpeGPlp7Pqk5CfoWbzsEpBfZ3EEU" />
<link rel="icon" href="http://www.moagichairs.co.za/media/favicon/default/logo.jpg" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.moagichairs.co.za/media/favicon/default/logo.jpg" type="image/x-icon" /><style type="text/css">
<!--
body,td,th {
	color: #0000FF;
}
body {
	background-color: #FFFF99;
}
-->
</style>

//]]>

<div class="header-container header-bg-gray-vl header-skin-l user-menu-skin-default">
<div class="header-container2">
<div class="header-col-left">
<div class="header-col-right">
    <div class="header">

    	<div class="header-top">
            
          </div>
        
    	        <a href="http://www.houseandhome.co.za/index.php/" title="House and Home" class="logo"><strong>Moagi Chairs</strong><img src="Pictures/logo.jpg" alt="" width="540" height="106" longdesc="Pictures/logo.jpg" /></a>
       <div align="center" id="main">
  <div id="content">
<br />
<div style="margin:24px text-align:left">
<table width="98%" border="1" cellpadding="6" cellspacing="0">
<tr>
<td width="15%" bgcolor="#FFCC99"><strong>Product</strong></td>
<td width="22%" bgcolor="#FFCC99"><strong>Description</strong></td>
<td width="11%" bgcolor="#FFCC99"><strong>Price</strong></td>
<td width="11%" bgcolor="#FFCC99"><strong>Categoty</strong></td>
<td width="14%" bgcolor="#FFCC99"><strong>Sub-Category</strong></td>
<td width="10%" bgcolor="#FFCC99"><strong>Quantity</strong></td>
<td width="17%" bgcolor="#FFCC99"><strong>add/sub/remove</strong></td>


</tr>
</table>
    </div>
  </div>
                    
</div>
		<div class="header-left">
          </div> <!-- end: header-left -->
        
		<div class="header-right">
        	<div class="header-right-secondary">
        		<p class="welcome-msg">Welcome, Escorcia mello! </p>
   			</div>
            <div class="user-menu">

				                
                <ul class="links">
                    	            <li class="item-1 first" ><a href="http://www.houseandhome.co.za/index.php/customer/account/" title="My Account" >My Account</a></li>
                                        <li ><a href="http://www.houseandhome.co.za/index.php/wishlist/" title="My Wishlist" >My Wishlist</a></li>
                                    	            <li class="item-3" ><a href="http://www.moagichairs.co.za/index.php/findastore.html" title="Our Stores" >Our Stores</a></li>
                                    	            <li class="item-4 last" ><a href="http://www.moagichair.co.za/index.php/customer/account/logout/" title="Log Out" >Log Out</a></li>
              </ul>

				                
                <ul>
                	<li id="mini-cart" class="user-menu-item user-menu-cart">
						<div class="block block-cart">
        <div class="block-title">
    	<div class="block-title-inner">
    	<a class="heading" href="http://www.moagichairs.co.za/index.php/checkout/cart/" title="View contents of your shopping cart">My Home</a>
        
                	<div class="summary">
            
            	<a href="http://www.moagichaire.co.za/index.php/checkout/cart/" title="View contents of your shopping cart">
                    <p class="amount">Cart<span>(1)</span></p>
                    <p class="subtotal" >
                                                    <span class="price">R1,899.00</span>                                                                        </p>
                </a>
                
				                    <div class="to-checkout">
                    	                        <a href="http://www.moagichair.co.za/index.php/checkout/onepage/" title="Proceed to Checkout">Checkout<span class="icon"></span></a>                    </div>
			</div>
		        </div> 
    </div> 
               
            	<div class="block-content">
        
			        
            <p class="block-subtitle">Recently added item(s)</p>
            	</div>
					  </div>
                	</li>
                    <li class="user-menu-item user-menu-cart">
                      <div class="block block-cart">
                        <div class="block-content"><img src="Pictures/visit1.jpg" alt="" width="72" height="96" longdesc="Pictures/visit1.jpg" />
                          <ol id="cart-sidebar" class="mini-products-list">
                            <li class="item">
                              <a href="http://www.houseandhome.co.za/index.php/casanova-tub-chair-leathermate-black-b.html" title="CASANOVA VISITORS CHAIR OSTRICH BLACK     *B*" class="product-image"></a>
                              <div class="product-details">
                                <a href="http://www.moagichair.co.za/index.php/checkout/cart/delete/id/66662/uenc/aHR0cDovL3d3dy5ob3VzZWFuZGhvbWUuY28uemEvaW5kZXgucGhwL2NoZWNrb3V0L2NhcnQv/" title="Remove This Item" onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');" class="btn-remove">Remove This Item</a>
                                <a href="http://www.moagichair.co.za/index.php/checkout/cart/configure/id/66662/" title="Edit item" class="btn-edit">Edit item</a>
                                <p class="product-name"><a href="http://www.moagichair.co.za/index.php/casanova-tub-chair-leathermate-black-b.html">CASANOVA VISITORS CHAIR OSTRICH BLACK     *B*</a></p>
              <strong>1</strong> x
                                
                                
                                <span class="price">R1,899.00</span>                              </div>
      </li>
                          </ol>
                          
                          
                          <div class="actions">
                            <button type="button" title="View contents of your shopping cart" class="button btn-inline" onclick="setLocation('http://www.moagichairs.co.za/index.php/checkout/cart/')"><span><span>View shopping cart</span></span></button>
   	                      </div>
                        </div>
                      </div>
                    </li>
                </ul>
		
		<div class="header-top-search-wrapper">
            	<form id="search_mini_form" action="http://www.houseandhome.co.za/cart.php/catalogsearch/result/" method="get">
    <div class="form-search">
        <label for="search">Search:</label>
        <input id="search" type="text" name="q" value="" class="input-text" />
        <button type="submit" title="Search" class="button"><span><span>Search</span></span></button>
        <div id="search_autocomplete" class="search-autocomplete"></div>
     </div>
</form>
		                         	<div class="header-top-links-wrapper"><div style="float: right; margin-right: 5px;"><a title="Join us on Facebook" href="http://www.facebook.com/houseandhomeSA"> <img src="http://www.houseandhome.co.za/media/wysiwyg/facebook_1.jpg" alt="facebook" /> </a>&nbsp;&nbsp; <a title="Follow us on Twitter" href="http://twitter.com/houseandhomeSA"> <img src="http://www.houseandhome.co.za/media/wysiwyg/twitter_1.jpg" alt="twitter" /> </a>&nbsp;</div></div>
              </div>
            </div>
	    
        </div> <!-- end: header-right -->
    </div> <!-- end: header -->
    
    
    </div> <!-- end: header-col-right -->
    </div> <!-- end: header-col-left -->
</div> <!-- end: header-container2 -->

<div class="nav-container navbar-green-pea-d level1-link-color-white level2-link-gray-l-gray level2-col6">
<div class="nav">
	<div class="navbar-bg navbar-left"></div>
	<span>Other Chair Types</span></a>
<ul class="level1">
<li class="level2 nav-2-8-31 first">
<a href="http://www.moagichair.co.za/index.php/audio-visual/gaming-accessories/ps2.html">
<span>Office Chairs</span></a></li><li class="level2 nav-2-8-32">
<a href="http://www.moagichair.co.za/index.php/audio-visual/gaming-accessories/ps3.html">
<span>Camping Chairs</span></a>
</li><li class="level2 nav-2-8-33">
<a href="http://www.moagichair.co.za/index.php/audio-visual/gaming-accessories/ps4.html">
<span>Kiddies Chairs</span></a>
</li><li class="level2 nav-2-8-34">
<a href="http://www.moagichair.co.za/index.php/audio-visual/gaming-accessories/psp.html">
<span>Kitchen Chairs</span></a></li>
</ul>
</li>
      </ul>
    </div>
	<div class="navbar-bg navbar-right"></div>

</div>
</div>
</div> <!-- end: header-container -->
	



        <div class="main-container col1-layout">
                        <div class="header-col-left">
<div class="header-col-right">
            <div class="main">
                                <div class="col-main">
                                        <div class="cart">
    <div class="page-title title-buttons">
        <h1>Shopping Cart</h1>
            </div>
            <form action="http://www.houseandhome.co.za/index.php/checkout/cart/updatePost/" method="post">
        <fieldset>
        	<div class="cart-table-wrapper">
            <table id="shopping-cart-table" class="data-table cart-table">
                <col width="1" />
                <col />
                <col width="1" />
                            <col width="1" />
                                        <col width="1" />
                                        <col width="1" />
                            <col width="1" />
                                        <col width="1" />

                            <thead>
                    <tr>
                        <th rowspan="1">&nbsp;</th>
                        <th rowspan="1"><span class="nobr">Product Name</span></th>
                        <th rowspan="1"></th>
                                                <th rowspan="1" class="a-center"><span class="nobr">Move to Wishlist</span></th>
                                                <th class="a-center" colspan="1"><span class="nobr">Unit Price</span></th>
                        <th rowspan="1" class="a-center">Qty</th>
                        <th class="a-center" colspan="1">Subtotal</th>
                        <th rowspan="1" class="a-center last">&nbsp;</th>
                    </tr>
                  </thead>
                <tfoot>
                    <tr>
                        <td colspan="50" class="a-right">
                                                        	<a class="btn-continue" href="http://www.houseandhome.co.za/index.php/" title="Continue Shopping">Continue Shopping</a>
                                                        <button type="submit" title="Update Shopping Cart" class="btn-update"><a class="btn-update">Update Shopping Cart</a></button>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                                    <tr>
    <td><a href="http://www.houseandhome.co.za/index.php/casanova-tub-chair-leathermate-black-b.html" title="CASANOVA TUB CHAIR OSTRICH BLACK     *B*" class="user-menu-skin-w3b"></a><img src="Pictures/visit1.jpg" alt="" width="72" height="96" longdesc="Pictures/visit1.jpg" /></td>
    <td>
        <h2 class="product-name">
                    <a href="http://www.houseandhome.co.za/index.php/casanova-tub-chair-leathermate-black-b.html">CASANOVA TUB CHAIR OSTRICH BLACK     *B*</a>
                </h2>
                                      </td>
    <td class="a-center">
                <a href="http://www.houseandhome.co.za/index.php/checkout/cart/configure/id/66662/" title="Edit item parameters">Edit</a>
            </td>
        <td class="a-center">
                <input type="checkbox" value="1" name="cart[66662][wishlist]" title="Move to Wishlist" class="checkbox" />
            </td>
    
    
                <td class="a-right">
                            <span class="cart-price">
                                                <span class="price">R1,899.00</span>                
            </span>


                    </td>
                        <td class="a-center">
        <input name="cart[66662][qty]" value="1" size="4" title="Qty" class="input-text qty" maxlength="12" />
    </td>
        <td class="a-right">
                    <span class="cart-price">
        
                                                <span class="price">R1,899.00</span>                            
        </span>
            </td>
            <td class="a-center"><a href="http://www.moagichair.co.za/index.php/checkout/cart/delete/id/66662/uenc/aHR0cDovL3d3dy5ob3VzZWFuZGhvbWUuY28uemEvaW5kZXgucGhwL2NoZWNrb3V0L2NhcnQv/" title="Remove item" class="btn-remove btn-remove2">Remove item</a></td>
</tr>
                  </tbody>
            </table>
            </div>
            <script type="text/javascript">decorateTable('shopping-cart-table')</script>
        </fieldset>
    </form>
    <div class="cart-collaterals">
    	<div class="cart-left-column">
        	<div class="cart-top-box cart-wide-box">
            
            		
					<div class="col2-set">
                        <div class="col-1">
                      </div>
                        <div class="col-2">
 
                        </div>
					</div>
            
            </div>
                        <div class="cart-bottom-box cart-wide-box">
            
            		    
                                                                            
            </div>
        </div> <!-- end: left-column -->
        <div class="cart-right-column">
            <div class="totals">
				    <table id="shopping-cart-totals-table">
        <col />
        <col width="1" />
        <tfoot>
            <tr>
    <td style="" class="a-right" colspan="1">
        <strong>Grand Total</strong>
    </td>
    <td style="" class="a-right">
        <strong><span class="price">R1,899.00</span></strong>
    </td>
</tr>
        </tfoot>
        <tbody>
            <tr>
    <td style="" class="a-right" colspan="1">
        Subtotal    </td>
    <td style="" class="a-right">
        <span class="price">R1,899.00</span>    </td>
</tr>
        </tbody>
    </table>
                                <ul class="checkout-types">
                                                                                                                                <li>    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location='http://www.houseandhome.co.za/index.php/checkout/onepage/';"><span><span><span class="img-checkout"></span>Proceed to Checkout</span></span></button>
</li>
                                                                            <li><a href="http://www.houseandhome.co.za/index.php/checkout/multishipping/" title="Checkout with Multiple Addresses">Checkout with Multiple Addresses</a>
</li>
                  </ul>
                </div>
            
            
		</div>
            
    </div>
</div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</div>
        <div class="footermain">
<div class="footer-col-left">
<div class="footer-col-right">
<div class="footer-container footer-bg-gray-vd">

<div class="footer-container2">

<div class="footer">
	<div class="footer-top">

	</div>
	<div class="footer-main mclear">
    	<div class="footer-main-top clearer">
            <div class="footer-main-top-left">
          </div>
            <div class="footer-main-top-right">
                <div id="subscribe-form" class="clearer">
              </div>
            </div>
        </div> <!-- end: footer-main-top -->
        
                		                                    <div class="footer-main-bottom clearer">
            
                                                    <div class="footer-item wide" style="min-height:120px;">
                                                                                                        <div class="footer-links-column-wrapper" >
                                <h6 class="heading">More Information</h6>
<ul>
<li><a href="/about-MoagiChairs">About Us</a></li>
<li><a href="/customerservice">Customer Service</a></li>
<li><a href="/findastore.html">Find a Store</a></li>
<li><a href="/careers">Careers</a></li>
<li><a href="/contactus">Contact Us</a></li>
</ul>                            </div>
                                                                                <div class="footer-links-column-wrapper" >
                                <h6 class="heading">Terms &amp; Service</h6>
<ul>
<li><a href="/termsofservice">Our Terms of Service</a></li>
<li><a href="/disclaimer">Disclaimer</a></li>
<li><a href="/deliveryinfo">Delivery Information</a></li>
<li><a href="/refundsandexchanges">Refunds and Exchanges</a></li>
</ul>                            </div>
                                                                                <div class="footer-links-column-wrapper" >
                                <h6 class="heading">My Account</h6>
<ul>
<li><a href="/customer/account/login">Login to Account</a></li>
<li><a href="/customer/account/create/">Need an Account?</a></li>
<li><a href="/contactus">Forgot Password?</a></li>
</ul>                          
<tbody>
<tr>
<td colspan="3">&nbsp;</td>
<td><br /></td>
</tr>
<tr>
<td colspan="4"><img src="Pictures/logo.jpg" alt="" width="540" height="106" longdesc="Pictures/logo.jpg" /></td>
</tr>
<tr>
<td style="text-align: center;" colspan="4">&copy; 2014 Moagi Chairs. All Rights Reserved.</td>
</tr>
</tbody>
 <!-- end: footer-main-bottom --><!-- end: footer-main --><!-- end: footer-bottom --></html>
