<html>
<head>
  <title>Welcome to My Web App</title>
</head>
<body>
  <h1>Welcome to My Web App</h1>
  
  <h2>Product Details:</h2>

<h1>Data From MicroService-1. MySQL Database</h1>
  <?php
    $servername = "mysql";
    $username = "root";
    $password = "password";
    $dbname = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "Product ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Price: $" . $row["price"] . "<br><br>";
      }
    } else {
      echo "No products found.";
    }

    $conn->close();
  ?>


<h1>Data From MicroService-2. PYTHON(FLASK) App</h1>




  <?php
    $url = 'http://microservice-2:5000/';  // URL of your Flask microservice

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    // Make an HTTP GET request to the Flask microservice
    // $response = file_get_contents($url);
    
    // Check if the request was successful
    if ($response !== false && $response !== "") {
      // Parse the JSON response
      $products = json_decode($response, true);
      
      // Check if products were retrieved
      if ($products !== null) {
        foreach ($products as $product) {
          echo "Product Name: " . $product["name"] . "<br>";
          echo "Brand: " . $product["brand"] . "<br><br>";
        }
      } else {
        echo "No products found.";
      }
    } else {
      echo "Failed to retrieve products.";
    }
  ?>
</body>
</html>
