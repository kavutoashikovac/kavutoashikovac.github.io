<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHOP</title>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/> 
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <style>
  .popover
  {
      width: 100%;
      max-width: 800px;
  }

  .display-none #index-banner{
      display: none;
  }
  </style>
 </head>
 <body>

 <nav class="white" role="navigation">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img style="position: absolute; width: 64px; margin-left: 15px;" src="logo_carrusel2.png"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style="color: #66bb6a;" href="index.html" ><b>HOME</b></a></li>
        <li><a style="color: #444444;" href=""><b>SHOP</b></a></li>
        <li><a style="color: #444444;" href="index1.php"><b>CONTACT</b></a></li>
      </ul>
    </div>
        

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

   
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">Cart Details</div>
      <div class="col-md-6" align="right">
       <button type="button" name="clear_cart" id="clear_cart" class="btn btn-warning btn-xs">Clear</button>
      </div>
     </div>
    </div>
    <div class="panel-body" id="shopping_cart">

    </div>
   </div>

   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">Product List</div>
      <?php
 
//fetch_item.php

include('dbconnection.php');

$query = "SELECT * FROM tbl_product ORDER BY id DESC";

$statement = $connect->prepare($query);

if($statement->execute())
{
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '
  <div class="col-md-3" style="margin-top:12px;margin-bottom:12px;">  
            <div style="border:1px solid #ccc; border-radius:5px; padding:16px; height:300px;" align="center" id="product_'.$row["id"].'">
             <img src="images/'.$row["image"].'" class="img-responsive" style="height: 270px !important" /><br />
             <h4 class="text-info">
                        <div class="checkbox">
                              <label><input type="checkbox" style="opacity: 1 !important" class="select_product" data-product_id="'.$row["id"].'" data-product_name="'.$row["name"].'" data-product_price="'.$row["price"] .'" value="">'.$row["name"].'</label>
                        </div>
                  </h4>
             <h4 class="text-danger">$ '.$row["price"] .'</h4>
            </div>
        </div>
  ';
 }
 echo $output;
}

?>
      <div class="col-md-6" align="right">
       <button type="button" name="add_to_cart" id="add_to_cart" class="btn btn-success btn-xs">Add to Cart</button>
      </div>
     </div>
    </div>
    <div class="panel-body" id="display_item">

    </div>
   </div>
  </div>
   <!-- footer -->
  <footer class="page-footer white lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="black-text">Contact Us</h5>
          <p class="grey-text">You can reach us from everywhere in the world via sustainablecoffe@gmail.com. <br>Let's share a common ground to the world make better.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <ul>
            <li class="left-align"><img src="logo_h2020.png" alt="Unsplashed background img 1"></a></li>
            <li class="row center"><img src="NSFC.jpg" alt="Unsplashed background img 1"></li>
          </ul>
        </div>
      </div>
    </div>
   <div class="footer-copyright green lighten-1">
      <div class="container">
        The entirety of this site is protected by copyright © 1999–2021.<a class="brown-text text-lighten-3" href="http://materializecss.com"></a>
    </div>
    </div>
 </body>
</html>

<script>  
$(document).ready(function(){

 load_product();

 load_cart_data();
    
 function load_product()
 {
  $.ajax({
   url:"fetch_item.php",
   method:"POST",
   success:function(data)
   {
    $('#display_item').html(data);
   }
  });
 }

 function load_cart_data()
 {
  $.ajax({
   url:"fetch_cart.php",
   method:"POST",
   success:function(data)
   {
    $('#shopping_cart').html(data);
   }
  });
 }

 $(document).on('click', '.select_product', function(){
  var product_id = $(this).data('product_id');
  if($(this).prop('checked') == true)
  {
   $('#product_'+product_id).css('background-color', '#f1f1f1');
   $('#product_'+product_id).css('border-color', '#333');
  }
  else
  {
   $('#product_'+product_id).css('background-color', 'transparent');
   $('#product_'+product_id).css('border-color', '#ccc');
  }
 });

 $('#add_to_cart').click(function(){
  var product_id = [];
  var product_name = [];
  var product_price = [];
  var action = "add";
  $('.select_product').each(function(){
   if($(this).prop('checked') == true)
   {
    product_id.push($(this).data('product_id'));
    product_name.push($(this).data('product_name'));
    product_price.push($(this).data('product_price'));
   }
  });

  if(product_id.length > 0)
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{product_id:product_id, product_name:product_name, product_price:product_price, action:action},
    success:function(data)
    {
     $('.select_product').each(function(){
      if($(this).prop('checked') == true)
      {
       $(this).attr('checked', false);
       var temp_product_id = $(this).data('product_id');
       $('#product_'+temp_product_id).css('background-color', 'transparent');
       $('#product_'+temp_product_id).css('border-color', '#ccc');
      }
     });

     load_cart_data();
     alert("Item has been Added into Cart");
    }
   });
  }
  else
  {
   alert('Select atleast one item');
  }

 });

 $(document).on('click', '.delete', function(){
  var product_id = $(this).attr("id");
  var action = 'remove';
  if(confirm("Are you sure you want to remove this product?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{product_id:product_id, action:action},
    success:function()
    {
     load_cart_data();
     alert("Item has been removed from Cart");
    }
   })
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '#clear_cart', function(){
  var action = 'empty';
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function()
   {
    load_cart_data();
    alert("Your Cart has been clear");
   }
  });
 });
    
});

</script>