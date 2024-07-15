<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Product form</h2>
  <form action="action/add_product.php" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="pro_name">
    </div>
    <div class="mb-3">
      <label for="pwd">Category:</label>
      <input type="text" class="form-control" id="Category" placeholder="Enter Category" name="pro_category">
    </div>

    <div class="mb-3">
      <label for="pwd">Stock:</label>
      <input type="number" class="form-control" id="stock" placeholder="Enter Stock" name="pro_stock">
    </div>
    <div class="mb-3">
      <label for="pwd">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter Price" name="pro_price">
    </div>

    <div class="mb-3">
      <label for="pwd">Color:</label>
      <input type="text" class="form-control" id="Color" placeholder="Enter Color" name="pro_color">
    </div>

    <div class="mb-3">
      <label for="pwd">Rating:</label>
      <input type="text" class="form-control" id="rating" placeholder="Enter Rating" name="pro_rating">
    </div>
    
    <button type="submit" class="btn btn-primary" name="add_product">Submit</button>
  </form>
</div>

</body>
</html>
