<!DOCTYPE html>
<html>

<head>
    <title>Product Inventory Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#bdc3c7">
    <div id="main-wrapper">
        <center>
            <h2>Insert / Update / Delete Product</h2>
        </center>
        <div class="inner_container">

            <form action="index.php" method="post">

                <label><b>Product ID</b> </label><button id="btn_go" name="fetch_btn" type="submit">Go</button>

                <input type="text" placeholder="Enter Product ID" name="pid">
                <label><b>Product Name</b></label>
                <input type="text" placeholder="Enter Product Name" name="pname">
                <label><b>Product Brand</b></label>
                <input type="text" placeholder="Enter Product Brand" name="pbrand" >
                <label><b>Product Cost</b></label>
                <input type="number" placeholder="Enter Product Cost" name="pcost" >
                <label><b>Product Quantity</b></label><br>
                <input type="number" placeholder="Enter Product Quantity" name="pquantity" >

                <center>
                    <button id="btn_insert" name="insert_btn" type="submit">Insert</button>
                    <button id="btn_update" name="update_btn" type="submit">Update</button>
                    <button id="btn_delete" name="delete_btn" type="submit">Delete</button>
                </center>
            </form>















        </div>








    </div>


</body>

</html>