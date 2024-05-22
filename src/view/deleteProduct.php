<?php
require "../header.php";
require_once "../db_connection.php";
if (!isset($_REQUEST["id"]) || $_REQUEST["id"] == "") {
    header("location: ../");
    exit();
}
$deleteId = $_REQUEST['id'];
?>

<section id="deleteProduct">
    <div class="text-center text-2xl">
        Delete Product
    </div>
    <div>
        <?php
        // $sqlQuery = "SELECT * FROM `productinfo` WHERE `id`=\"$deleteId\"";
        $sqlQuery = "DELETE FROM `productinfo` WHERE `id`=\"$deleteId\"";
        mysqli_query($conn, $sqlQuery);
        echo "<script>alert('Product id: $deleteId Deleted.')</script>";
        header("location: ./viewProduct.php");
        exit();
        ?>
    </div>
</section>


<script src="/ProjectPHP/src/assets/js/main.js"></script>
</body>

</html>