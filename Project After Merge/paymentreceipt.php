<?php
    

session_start();

?>

<html>
<style>
p{
    text-align:justify;
    
    margin: 230px 20px 10px 5px;
    
}
</style>
<Body background="corner-strip-simple-graphics-1920x1080.jpg">
<p>
    <table align = "center">
    
    <th>
    <h1 style="color:white">
    <?php echo "Name: " ?>
    <?php echo $_SESSION["name1"]."<br>"; ?>    
    
    </h1>
    </th>
    </p>
</table>
    </body>
    </html>
    
    
    
        
        
        