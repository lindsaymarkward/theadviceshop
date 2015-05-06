<?php include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Advice Shop - Sample Advice</title>
<link href="mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>
<h2>Sample Advice</h2>
<div id="content">
  <p>Here are some examples of some of the great advice we provide...</p>
  <?php 
  $sql = "select * from quotes";
  $result = $dbh->query($sql);
  foreach ($result as $row) {
	//  print_r($row);
	echo "<blockquote>\n<p><a href=\"quote.php?id=", $row[id], "\"><em>&quot;", $row[quote], "&quot;</em></a> - <strong>", $row[author], "</strong>";
	if ($row[year] != "")
		echo " (", $row[year], ")";
	echo "</p>\n</blockquote>\n";
  }
  ?>
</div>
<p>&nbsp;</p>
<?php include("inc_footer.php"); ?>
</body>
</html>
