<?php
//update-article.php
$connection = mysqli_connect('localhost','user','pass') or die ("Couldn't connect to server.");
$db = mysqli_select_db('cm_blog', $connection) or die ("Couldn't select database.");

$title=$_POST['titlefield'];
$body=$_POST['bodyfield'];

$data = "UPDATE `article` SET title='$Title', body='$Body' WHERE article_ID=".'"'.$Key.'"';
  $query = mysqli_query($data) or die("Couldn't execute query. ". mysqli_error());

?>

<!DOCTYPE HTML>
<!-- article-form.php -->
<html>
<head>
      <title></title>

 </head>

<body>
  
  <form method="post" action="update-article.php>
<input type="text" name="name">
                              </form>
<!--  display the changed record from database -->
  title: <?php echo $title?><br>
  body: <?php echo $body?> <br>

</body>

</html>
