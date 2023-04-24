<?php
//fetch.php
$connect = mysqli_connect('localhost', 'root', '', 'studentinfo');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM registration 
  WHERE Course LIKE '%".$search."%' ";
}
else
{
 $query = "
  SELECT * FROM registration ORDER BY id ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Student Name </th>
     <th>Gender</th>
     <th>Course & Medium</th>
     <th>Inter Percentage</th>
     <th>Photo</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Firstname"].' '.$row["Lastname"].'</td>
    <td>'.$row["Gender"].'</td>
    <td>'.$row["Course"].' - '.$row["Medium"].'</td>
    <td>'.$row["PercentageXi"].'</td>
    <td> <img src="uploadedimgs/'.$row["imagename"].'" height="100px" /></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>






