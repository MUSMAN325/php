<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
        <form action="InsertCart.php" method="get">
          <tr>
            <th scope="row"><input type="hidden" value="1" name="PID"/> 1</th>
            <td> <input type="hidden" value="Milk" name="PName"/> Milk</td>
            <td> <input type="hidden" value="120" name="PPrice"/>120</td>
            <td><input type="text" name="PQuantity"></td>
            <td><input type="submit" class="btn btn-warning" value="Add to Cart"/></td>
          </tr>
        </form>
          <!-- <tr>
            <th scope="row">2</th>
            <td>Oil</td>
            <td>200</td>
            <td><input type="text"></td>          
              <td><button>Add to Cart</button></td>

          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Butter</td>
            <td>90</td>
            <td><input type="text"></td>       
             <td><button type="submit">Add to Cart</button></td>
          </tr> -->
        </tbody>
      </table>
      
      <a class="btn btn-primary" href="ViewCart.php">View my cart</a>

    </div>
</body>
</html>