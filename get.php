<?php
include 'connection.php';
$username=$_POST['username'];
$userrank=(int)$_POST['rank'];
$const=(int)"100";
$course=$_POST['degree'];
$caste=$_POST['caste'];
$low=$userrank+$const;
$high=$userrank-$const;
if($caste=='oc'){
  $querry="SELECT * from colleges where oc<='$low' and oc >='$high'";
}
if($caste=='bc'){
  $querry="SELECT * from colleges where bc<='$low' and bc >='$high'";

}
if($caste=='st'){
  $querry="SELECT * from colleges where st<='$low' and st >='$high'";
}
$result=mysqli_query($conn,$querry);

echo "
<h1>welcome, $username</h1>
<table border='1'>

<tr>

<th>Collage Name</th>

<th>Course Name</th>
<th>Rank</th>
<th>city</th>
<th>OC</th>
<th>BC</th>



</tr>";



while ($row = mysqli_fetch_array($result)) {

    echo "<tr>";

    echo "<td>" . $row['collegename'] . "</td>";

    echo "<td>" . $row['coursename'] . "</td>";
    echo "<td>" . $row['rank'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['oc'] . "</td>";
    echo "<td>" . $row['bc'] . "</td>";
    
    


    echo "</tr>";
}

echo "</table>";