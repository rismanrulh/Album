<?php
include "db_connect.php";
$query = mysqli_query($connection,"SELECT * FROM tb_album"); echo "<html>"; echo "<head>";
$jumlah = mysqli_num_rows($query);

echo "<link href='style.css' type='text/css' rel='stylesheet'>"; echo "</head>";
echo "<title>My Album</title>"; echo
"<body>";
echo "<center>";
echo "<font color='#3968CB' face='Tahoma' size=6><b><br>My
Albums</b></font><br><br>";
echo "<a href='add.php' style=\"text-decoration: none\"><font face='tahoma' size='5' font color='#64CFF7'>Add New
Album</font></a><br>"; echo "<br><table border=\"0\" cellpadding=\"1\" cellspacing=\"1\"
bordercolor=\"blue\"
bgcolor=\"white\">
<tr bgcolor='#CA7CD8' height=\"30\"><font color='white'>
<th align='left'><font color='white' face='Tahoma' size=3>NO</font></th>
 <th align='left'><font color='white' face='Tahoma' size=3>Title</font></th>
 <th align='left'><font color='white' face='Tahoma' size=3>Artist</font></th>
 <th align='left'><font color='white' face='Tahoma' size=3>Action</font></th>
</tr>"; $j=0;
while ($row=mysqli_fetch_array($query)) {
 echo "<tr><td align='left' bgcolor='#CA7CD8'>";echo "<font face='Arial' size=4>";echo
$j+1;echo"</font>";echo"</td>";
 echo "<td align='left' bgcolor='#CCFF66'>";echo "<font face='Arial' size=4>";echo
$row["title"];echo"</font>";echo"</td>"; echo "<td align='left'
bgcolor='#CCFF66'>";echo "<font face='Arial' size=4>";echo
$row["artist"];echo"</font>";echo"</td>"; echo"<td align='left'
bgcolor='#CCFF66'>";echo "<a href='delete.php?id=".$row['id']."' style=\"text-decoration:
none\" title=\"Delete\"><font face='tahoma' size='4'>Delete</font></a> <a
href='edit.php?id=".$row['id']."' style=\"text-decoration:
none\" title=\"Edit\"><font face='tahoma' size='4'>Edit</font></a>"; $j++;
echo "</center>";
}echo"</table>";
echo "</body>"; echo
"</html>";
?>