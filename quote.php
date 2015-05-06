<?php include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Advice Shop - Quote</title>
<link href="mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>
<div id="content">
  <?php 
  $sql = "select * from quotes where id=" . $_GET[id];
  $result = $dbh->query($sql); // should only be one record
  $row = $result->fetch(PDO::FETCH_ASSOC);
  echo "<h2>Quote by ", $row[author];
    if ($row[year] != "")
	echo " (", $row[year], ")";
  echo "</h2>";
  echo "<blockquote><em>&quot;", $row[quote], "&quot;</em>";

  echo "\n</blockquote>\n";
  ?>
</div>
<p>&nbsp;</p>
<?php include("inc_footer.php"); ?>
</body>
</html>
