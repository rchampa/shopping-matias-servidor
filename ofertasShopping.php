<?php

$var = "";
if ($_GET) {
    $var = $_GET['tipo'] . ".png";
} else if ($_POST) {
    $var = $_POST['tipo'] . ".png";
}
$link = mysql_connect('localhost', 'agendaf_matiasg', 'mapfre290691');
if (!$link) {
    die('No pudo conectar: ' . mysql_error());
}

mysql_select_db("agendaf_Shopping_Promotions");
$q = "";
mysql_query("SET NAMES utf8");
if ($var != "Todos.png") {
    $q = mysql_query("SELECT * FROM GEOLOCALIZACION where imagen like '%" . $var . "%'");
} else {
    $q = mysql_query("SELECT * FROM GEOLOCALIZACION");
}
//while ($e = mysql_fetch_assoc($q)) {
   // $output[] = $e;
//}
print(json_encode($output));
mysql_close($link);
?>

<body>
<div id="cos">
<div class="nav">
<table border="0" bordercolor="#5C743D" cellspacing="0" cellpadding="0">
<tr><td width="998" >
<table  border="0" cellspacing="0" cellpadding="0">
 <tr bgcolor="#D5EDB3">
    <td height="51" colspan="2" rowspan="2"><img src="mm_health_photo.jpg" alt="agenda funeraria" width="214" height="101" border="0" /></td>
    <td height="50" colspan="2" align="center"  valign="bottom" nowrap="nowrap" id="logo">Agenda Funeraria</td>
    <td >&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="2" align="center" valign="top" id="tagline">base de datos</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="6" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>
</table>
    </td></tr></table></div></div></body>



