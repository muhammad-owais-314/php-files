<?php 
include("connection.php");
try {
    
$viewQuery = "SELECT * FROM `products`";
$viewQueryPrepare = $connection->Prepare($viewQuery);
$viewQueryPrepare->execute();
$productsData = $viewQueryPrepare->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($productsData);
// echo "</pre>";

// if($productsData){
//   echo "Products inserted sucessfully";
// }else{
  
//   echo "Products inserted failed";
// }




} catch (\Throwable $th) {
    throw $th;
}



if(isset($_GET["delId"])){
  try {
    $delId = $_GET["delId"];
  $deleteQuery = "DELETE FROM `products` WHERE `prod_id`= :delId";
  $deleteQueryPrepare = $connection->prepare($deleteQuery);
  $deleteQueryPrepare->bindParam(":delId",$delId,PDO::PARAM_INT);
  if($deleteQueryPrepare->execute()){
    echo "<script>location.href='view.php'</script>";
  }else{
     echo "Products is not deleted";    
  }


} catch (\Throwable $th) {
  throw $th;
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
    <title>View php</title>
  </head>
  <body>
    <h1 class="text-center" >ALL PRODUCTS!</h1>
<div class="container">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">Products Id</th>
      <th scope="col">Products Name</th>
      <th scope="col">Products Price</th>
      <th scope="col">Products Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php foreach ($productsData as $value){ ?>
    <tr>
      <th scope="row"><?php echo $value["prod_id"] ?></th>
      <td><?=$value["prod_name"] ?></td>
      <td><?=$value["prod_price"] ?></td>
      <td><?=$value["prod_desc"] ?></td>
      <td>
        <a href="view.php?delId=<?=$value["prod_id"] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
        <a href="updateproducts.php?upId=<?=$value["prod_id"] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
      </td>
    </tr>
  <?php } ?>

  </tbody>
</table>
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