<html>
    <body>
        <form method ="post">
           <input type = "number" name = "id"><br>
           <input type ="text" name = "n"><br>

           <input type = "submit" name= "sub">

        </form>
    </body>
</html>
<?php
if(isset($_POST["sub"])){
   echo"<br>employee id :".$_POST["id"];
   echo"<br>employee name :".$_POST["n"];
}
?>
