<?php 
include("conn.php");
if(isset($_POST["submit"])){
    $code = $_POST["productCode"];
    $name = $_POST["productName"];
    $line = $_POST["productLine"];
    $scale = $_POST["productScale"];
    $vendor = $_POST["productVendor"];
    $desc = $_POST["productDescription"];
    $quantity = $_POST["quantityInStock"];
    $price = $_POST["buyPrice"];
    $msrp = $_POST["MSRP"];

    $query = "INSERT INTO products(productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) VALUES(
        '$code', '$name','$line', '$scale', '$vendor', '$desc', '$quantity', '$price', '$msrp')";
            
    mysqli_query($conn,$query);
    echo '<script>alert("Data berhasil ditambahkan")</script>';
}
if(isset($_POST["delete"])){
    $code = $_POST["productCode"];
    
    $query = "DELETE FROM Products WHERE productCode='$code'";
    
    mysqli_query($conn, $query);
    echo '<script>alert("Data berhasil dihapus")</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faisal Wildan Habibi - 21081010216 - Insert Data Products</title>
</head>

<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="productCode">Product Code :</label></td>
                <td><input type="text" name="productCode" id="productCode"></td>
            </tr>
            <tr>
                <td><label for="productName">Product Name :</label></td>
                <td><input type="text" name="productName" id="productName"></td>
            </tr>
            <tr>
                <td><label for="productLine">Product Line :</label></td>
                <td><select type="text" name="productLine" id="productLine">
                        <option>--Pilih Salah Satu--</option>
                        <?php 
                        $queryProductLine = "SELECT productLine FROM productlines";
                        $result = mysqli_query($conn,$queryProductLine);

                        while($data = mysqli_fetch_array($result)) : ?>
                        <option value="<?= $data["productLine"] ?>"><?= $data["productLine"]  ?></option>
                        <?php endwhile; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="productScale">Product Scale :</label></td>
                <td><input type="text" name="productScale" id="productScale"></td>
            </tr>
            <tr>
                <td><label for="productVendor">Product Vendor :</label></td>
                <td><input type="text" name="productVendor" id="productVendor"></td>
            </tr>
            <tr>
                <td><label for="productDescription">Product Description :</label></td>
                <td><input type="text" name="productDescription" id="productDescription"></td>
            </tr>
            <tr>
                <td><label for="quantityInStock">Quantity :</label></td>
                <td><input type="text" name="quantityInStock" id="quantityInStock"></td>
            </tr>
            <tr>
                <td><label for="buyPrice">Price :</label></td>
                <td><input type="text" name="buyPrice" id="buyPrice"></td>
            </tr>
            <tr>
                <td><label for="MSRP">MSRP :</label></td>
                <td><input type="text" name="MSRP" id="MSRP"></td>
            </tr>
        </table>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <h1>Hapus Data</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="productCode">Product Code :</label></td>
                <td><input type="text" name="productCode" id="productCode"></td>
            </tr>
        </table>
        <br><br>
        <button type="delete" name="delete">Delete</button>
    </form>
    <br>
    <a href="main.php"><button>Back</button></a>
</body>

</html>