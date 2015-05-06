<?php include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Advice Shop - Sample Advice</title>
<link href="mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php"); ?>
<?php include("inc_nav.php"); ?>
<h2>Sample Advice</h2>
<div id="content">
  <p>Here are some examples of some of the great advice we provide...</p>
  <?php
  $sql = "SELECT * FROM quotes";
  $result = $dbh->query($sql);
foreach ($result as $row)
{
	echo "<blockquote>\n<p><em>&quot;";
	echo $row['quote'], "&quot;</em> - <strong>", $row['author'], "</strong>\n";
	if (isset($row['year']) && $row['year'] != "")
		echo "(", $row['year'], ")";
	echo "</p>\n</blockquote>";
}
  ?>
</div>
<p>&nbsp;</p>
<?php include("inc_footer.php"); ?>
</body>
</html>