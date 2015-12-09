<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOPPING CART EXAMPLE</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
      <div id="container">
        <h4>Number of Items in the Shopping Cart:<span id="quantity"></span></h4>
        <div id="product_info">
          <div id="product">
            <img src="potion.jpg">
          </div>
          <div id="text">
              <h5>Magic Potion for Students</h5>
              <p>A wonderful product for passing any exam</p>
              <a href="add_to_cart.php?id=75" id="button">Add to cart</a>
          </div>
        </div>
      </div>
    <script>

     $(function() {
        $("#quantity").text(0);
        $("#button").click(function(event) {
          event.preventDefault();
          $.ajax({
            url: $(this).attr("href"),
          }).done(function(data) {
             if (data=="OK") {
               $("#quantity").text(parseInt($("#quantity").text())+1);
             } else {
               alert("Something went wrong!!!"+data);
             }

          });
        });
     });
    </script>
  </body>
</html>
