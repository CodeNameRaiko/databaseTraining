<?php 
 $conn = mysqli_connect('localhost', 'Listoo', '', 'example');
 $List = mysqli_query($conn, "SELECT * FROM List");
 
 if(!$conn) {
     echo 'Connection error: ' . mysqli_connect_error();  
    } else {
        echo '<p style="color:green;"><b>Connected Succesfully</b></p>';
    }
    
    if (isset($_POST['submit'])) {
        $input = $_POST['input']; 
    } else {
        mysqli_query($conn, "INSERT INTO List(input) VALUES('$input')");
    }
    

?> 
 

<!DOCTYPE html>
<html lang="en">
<?php include('./temps/header.php');?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<input type="text" name="input">
<button name="submit">Click me</button>
</form>
 
<?php while ($row = mysqli_fetch_array($List))  {?>
<span class="result-post">
<?php echo $List['$input']; ?>
</span>
<?php } ?>
 
 

<?php  include('./temps/footer.php');?>
    </html>
