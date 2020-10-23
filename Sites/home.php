<?php include('templates/header.html');   ?>

<html>
<body>
<!-- PHP insert code will be here -->
 
<!-- html form here where the product information will be entered -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'></textarea></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type='text' name='price' class='form-control' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save' class='btn btn-primary' />
                <a href='index.php' class='btn btn-danger'>Back to read products</a>
            </td>
        </tr>
    </table>
</form>
</body>

</html>
