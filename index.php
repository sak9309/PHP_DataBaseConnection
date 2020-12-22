<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"christ") or die(mysqli_error($link));
?><?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"christ") or die(mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style> 
body{
    background-image: url(img2.jpg);
}
           
    input[type=text] {
background-color: black;
color: white;
}
input[type=text]:focus {
background-color: maroon;
}
    form { 
        margin: 0 auto; 
        width: 0 auto; 
    } 
    input[type=button], input[type=insert], input[type=update], input[type=delete]{
background-color: black;
border: none;
color: black;
padding: 16px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
}
 table,th,td
    {
     border:1px solid red;
    }
    th,td{
        padding: 5px;
    }

</style> 
</head>
<body>
<div class="container">
  <div class="col-lg-4">
  <h2>Course Information Handling Module</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="email">Course ID:</label>
      <input type="text" class="form-control" id="cid" placeholder="Enter Course ID" name="cid">
    </div>
    <div class="form-group">
      <label for="pwd">Course Name:</label>
      <input type="text" class="form-control" id="cname" placeholder="Enter Course Name" name="cname">
    </div>
    <div class="form-group">
      <label for="pwd">Number of Hours</label>
      <input type="text" class="form-control" id="chour" placeholder="Enter Number of Hours" name="chour">
    </div>
    <div class="form-group">
      <label for="pwd">Mode of Teaching</label>
      <input type="text" class="form-control" id="cmode" placeholder="Enter Mode of Teaching" name="cmode">
    </div>
     <div class="form-group">
      <label for="pwd">Course Price</label>
      <input type="text" class="form-control" id="cprice" placeholder="Enter Course Price" name="cprice">
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit" name="update" class="btn btn-default">Update</button>
    <button type="submit" name="delete" class="btn btn-default">Delete</button>
  </form>
</div>
</div>
<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>No of Hours</th>
        <th>Mode of Teaching</th>
        <th>Course Price</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $res=mysqli_query($link,"select *from course");
      while($row=mysqli_fetch_array($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row["cid"];echo "</td>";
        echo "<td>"; echo $row["cname"];echo "</td>";
        echo "<td>"; echo $row["chour"];echo "</td>";
        echo "<td>"; echo $row["cmode"];echo "</td>";
        echo "<td>"; echo $row["cprice"];echo "</td>";
        echo "</tr>";
      }

      ?>
    </tbody>
  </table>

</div>

</body>
<?php
if(isset($_POST["insert"]))
{
mysqli_query($link,"insert into course values('$_POST[cid]','$_POST[cname]','$_POST[chour]','$_POST[cmode]','$_POST[cprice]')");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
if(isset($_POST["delete"]))
{
mysqli_query($link,"delete from course where cid='$_POST[cid]'");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
if(isset($_POST["update"]))
{
mysqli_query($link,"update course set cmode='$_POST[cmode]' where cid='$_POST[cid]'");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
?>
</html>