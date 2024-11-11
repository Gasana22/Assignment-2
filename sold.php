<?php include "head.php";?>
<head>
        <title></title>
    </head>
     <div class="content">
       
     <div class="user_form">
        <form method="POST" action="">
        
            <label class="ib">Product</label>
            <input class="field" type="text" name=">product_sold" >

            <label class="ib">Date Of Sell</label>
            <input class="field" type="date" name="dos"><br>

            <label class="ib">Price</label>
            <input class="field" type="text" name="price"><br>

            <input class="button" type="submit" name="submit" value="save"><br>
        </form>
</div>
     </div>
  <?php include "foot.php";
  $conn = mysqli_connect("localhost","root","root","metal");
  if(!$conn){
     "Connection failed:-".mysqli_connect_error();
  }

  if(isset($_POST['submit'])){

      $product_sold = $_POST['product_sold'];
      $dop = $_POST['dos'];
      $price = $_POST['price'];

      $sql="insert into sold_items(product_sold,dop,prices) values('$product_sold','$dos','$price',)";
      $insert= mysqli_query($conn,$sql);

      if($insert){
        echo "nice";
      }else{
        echo "bad";
      }
  }
  ?>