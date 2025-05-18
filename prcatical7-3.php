<html>
    <body>
        <form method ="GET">
          ID : <input type = "number" name = "id"><br>
           NAME : <input type ="text" name = "n"><br>

           <input type = "submit" name= "sub">

        </form>
    </body>
</html>
<?php
if(isset($_GET["sub"])){
   echo"<br>employee id :".$_GET["id"];
   echo"<br>employee name :".$_GET["n"];
}
?>
