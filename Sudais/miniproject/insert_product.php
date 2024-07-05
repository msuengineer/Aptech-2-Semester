<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Insert Product</h2>
  <form action="action/action_page.php" method="post">
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="pro_name">
    </div>
    <div class="mb-3">
      <label for="price">price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter price" name="pro_price">
    </div>
    <div class="mb-3">
      <label for="category">category:</label>
      <input type="text" class="form-control" id="category" placeholder="Enter category" name="pro_category">
    </div>

    <div class="mb-3">
      <label for="color">color:</label>
      <input type="text" class="form-control" id="color" placeholder="Enter color" name="pro_color">
    </div>
    <div class="mb-3">
      <label for="stock">stock:</label>
      <input type="text" class="form-control" id="stock" placeholder="Enter rating" name="pro_stock">
    </div>
    <div class="mb-3">
      <label for="rating">rating:</label>
      <input type="text" class="form-control" id="rating" placeholder="Enter rating" name="pro_rating">
    </div>

    
    <button type="submit" class="btn btn-primary" name="add_product">Submit</button>
  </form>
</div>

</body>
</html>
