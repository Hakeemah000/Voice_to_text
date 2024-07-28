<!--*********************************************-->

<!--Codes for sending data to the database.-->

<?php
if(isset($_POST['submit'])){
    $convert_text=$_REQUEST[('convert_text')];
    $sql="insert into `what you said to the robot` (`ID`,`Text`) value ('INT','$convert_text')";
    mysqli_query($conn,$sql);
}
?>