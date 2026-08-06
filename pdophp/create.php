<?php

include("connection.php");

// we use colon (:) in insert query when using PDO
// The bindParam() method in PHP PDO binds a PHP variable—rather than a static value—by reference to a placeholder in a prepared SQL statement. Its value is evaluated only when execute() is called.

try {
    if (isset($_POST["prodBtn"])){

        $prodName = $_POST["prodName"];
        $prodPrice = $_POST["prodPrice"];
        $prodDesc = $_POST["prodDesc"];


        $insertQuery = "INSERT INTO `products`(`prod_name`, `prod_price`, `prod_desc`) VALUES (:prodName, :prodPrice, :prodDesc)";

        // bindParam: to specify the value like integer,string etc 
        // USE ARROW FOR FUNCTION/METHOD IN PDO
        // 3 THINGS REQ (PARAMETER, VALUE, DATA TYPE)
        // WE CAN USE ANY NAME FOR PARAMETERS

        $insertPrepare= $connection->prepare($insertQuery);
        $insertPrepare->bindParam(":prodName", $prodName, PDO::PARAM_STR);
        $insertPrepare->bindParam(":prodPrice", $prodPrice, PDO::PARAM_INT);
        $insertPrepare->bindParam(":prodDesc", $prodDesc, PDO::PARAM_STR);
      

        if($insertPrepare->execute()){
            echo "Product Inserted Successfully!";
        }
        else {
            echo "Product Insertion Failed!";
        }


    }

} catch (\Throwable $th) {
    throw $th;
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD PRODUCTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center" >PDO ADD PRODUCTS</h1>
    <div class="container">
        <form class="row g-3" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Product Name</label>
    <input type="text" name="prodName" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Product Price</label>
    <input type="text" name="prodPrice" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Product Description</label>
    <input type="text" name="prodDesc" class="form-control" id="inputAddress">
  </div>


  <div class="col-12">
    <button type="submit" name="prodBtn" class="btn btn-primary">Add Product</button>
  </div>
</form>
<a href="view.php">go to view page</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>