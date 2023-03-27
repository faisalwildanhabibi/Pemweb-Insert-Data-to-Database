<?php
include("conn.php");
$conn = mysqli_connect("localhost", "root", "", "classicmodels");
$customersSql = "SELECT * FROM customers;";
$customersData = $conn->query($customersSql);
$productsSql = "SELECT * FROM products;";
$productsData = $conn->query($productsSql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faisal Wildan Habibi - 21081010216 - Insert Data</title>
</head>

<body>
    <hr>
    <center>
    <h1>Customers</h1>
    <h2><a href="addCustomers.php"><button>Add New Customers Data</button></a></h2>
    </center>
        <table border="2px">
            <thead align="center" bgcolor="d3d3d3">
                <tr>
                    <th>customerCode</th>
                    <th>customerName</th>
                    <th>customerLastName</th>
                    <th>customerFirstName</th>
                    <th>phone</th>
                    <th>addressLine1</th>
                    <th>addressLine2</th>
                    <th>city</th>
                    <th>state</th>
                    <th>postalCode</th>
                    <th>country</th>
                    <th>salesRepEmployeeNumber</th>
                    <th>creditLimit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($customersData->num_rows > 0) {
                        while ($row = $customersData->fetch_assoc()) {
                            echo "<tr>
                            <td>".$row["customerNumber"]."</td>
                            <td>".$row["customerName"]."</td>
                            <td>".$row["contactLastName"]."</td>
                            <td>".$row["contactFirstName"]."</td>
                            <td>".$row["phone"]."</td>
                            <td>".$row["addressLine1"]."</td>
                            <td>".$row["addressLine2"]."</td>
                            <td>".$row["city"]."</td>
                            <td>".$row["state"]."</td>
                            <td>".$row["postalCode"]."</td>
                            <td>".$row["country"]."</td>
                            <td>".$row["salesRepEmployeeNumber"]."</td>
                            <td>".$row["creditLimit"]."</td>
                            </tr>";
                        }
                    }
                    else {
                        echo "No Results";
                    }
                ?>
            </tbody>
        </table>
    <hr>
    <center>
    <h1>Products</h1>
    <h2><a href="addProducts.php"><button>Add New Products Data</button></a></h2>
    </center>
        <table border="2px">
            <thead align="center" bgcolor="d3d3d3">
                <tr>
                    <th>productCode</th>
                    <th>productName</th>
                    <th>productLine</th>
                    <th>productScale</th>
                    <th>productVendor</th>
                    <th>productDescription</th>
                    <th>productInStock</th>
                    <th>buyPrice</th>
                    <th>MSRP</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($customersData->num_rows > 0) {
                        while ($row = $productsData->fetch_assoc()) {
                            echo "<tr>
                            <td>".$row["productCode"]."</td>
                            <td>".$row["productName"]."</td>
                            <td>".$row["productLine"]."</td>
                            <td>".$row["productScale"]."</td>
                            <td>".$row["productVendor"]."</td>                    <td>".$row["productDescription"]."</td>
                            <td>".$row["quantityInStock"]."</td>
                            <td>".$row["buyPrice"]."</td>
                            <td>".$row["MSRP"]."</td>
                            </tr>";
                        }
                    }
                    else {
                        echo "No Results";
                    }
                ?>
            </tbody>
        </table>
    <hr>
</body>
</html>