<?Php
echo "<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->

    <title>plus2net.com Displaying Images from database  </title>";
require "templates/head.php";
echo "<style>
.my_table > tbody > tr > td {
vertical-align: middle;
}
.my_table {width:500px;}
</style>
</head><body>";

require "templates/top.php";


require "include/config-pdo.php";
////////////
echo "<div class='row'>
<div class='col-md-11 offset-md-1'>";
$q=" SELECT * FROM plus2_db_images ";
echo "<table class='table my_table'>
<tr class='info'> <th> Image </th><th>Name</th><th>ID</th><th>Price</th></tr>";

foreach ($dbo->query($q) as $row) {
echo "<tr><td><img src=images/$row[img] class='rounded-circle' alt='$row[p_name]'></td>
<td>$row[p_name]</td><td>$row[p_id]</td><td>$row[price] </td></tr>";
  }
echo "</table>";


echo "</div></div>";

require "templates/bottom.php";	
?>

<script>
$(document).ready(function() {
/////////// form submission//

////
	
})
</script>
</body>
</html>