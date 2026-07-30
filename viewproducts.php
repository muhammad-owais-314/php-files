<?php 
  include ("connection.php");


try{

   $fetch_query = "SELECT * FROM products";
   $result = mysqli_query($db, $fetch_query);

   $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

   
//   print_r($result);


}catch (\Throwable $th){
    echo "" , $th ->getMessage(),"";
}

if(isset($_GET["delId"])){

  $delId = $_GET["delId"];
  echo $_GET["delId"];

  $deleteQuery = "DELETE FROM `products` WHERE `prod_id` ='$delId'";

  $delResult = mysqli_query($db, $deleteQuery);

  if($delResult){
    echo "Item Deleted Sucessfully";
    echo "<script>alert(location.href='viewProducts.php'</script>";

  }else{
    echo "<script>alert('Item Deletion failed')</script>";
    
  }


}




?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>All products</title>
  </head>
  <body>
    <h1 class="text-center" >View Products</h1>

    <div class="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Products Name</th>
      <th scope="col">Products Price</th>
      <th scope="col">Products Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $value){ ?>
    <tr>
      <th scope="row"><?php echo $value["prod_id"] ?></th>
      <td><?=$value["prod_name"] ?></td>
      <td><?=$value["prod_price"] ?></td>
      <td><?=$value["prod_desc"] ?></td>
      <td>
        <a href="viewproducts.php?delId=<?=$value["prod_id"] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
        <a href="updateproducts.php?upId=<?=$value["prod_id"] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
      </td>
    </tr>
  <?php } ?>

  </tbody>
</table>

 <a href="addproducts.php">go to add page</a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>