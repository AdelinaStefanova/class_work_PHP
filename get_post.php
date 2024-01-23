<?php
/*if (isset($_GET['name'])) {
     print_r($_GET);
     $name = htmlspecialchars($_GET['name']);
     echo $name;
}
if (isset($_POST['name'])) {
     print_r($_POST);
     $name = htmlspecialchars($_POST['name']);
     echo $name;
}
if (isset($_REQUEST['name'])) {
    // print_r($_REQUEST);
     $name = htmlspecialchars($_REQUEST['name']);
     echo $name;
}

echo $_SERVER['QUERY_STRING'];
*/

?>

<!DOCTYPE html>
<html>
     <head>
          <title>My Website</title>
     </head>

     <body>
          <form method="POST" action="get_post.php">
               <div>
                    <label>Name</label><br>
                    <input type="text" name="name">
               </div>
               <div>
                    <label>Email</label><br>
                    <input type="text" name="email">
               </div>
               <input type="submit" value="Submit">
          </form>

     </body>

</html>