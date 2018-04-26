<?php include( "dbconnect.php" ); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Home</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include( "inc_header.php" );
include( "inc_nav.php" ); ?>
<section id="content">
    <h2>Welcome to The Advice Shop </h2>

    <p><strong>You need advice. We provide it</strong>.</p>
    <p>These days, it's impossible to <em>really</em> succeed on your own with the complexity
        and fast pace of
        the modern world. Let us help you go beyond your current limits and experience the next level of success!</p>

    <p>We specialise in providing advice. We've got <strong>great</strong> opinions, tips, suggestions and all kinds of advice for any
        situation. </p>

    <p><a href="subscribe.php">Subscribe now to our professional advice service.</a></p>

    <h3>Services</h3>
    <p><img src="images/womanHeadset.jpg" alt="" width="310" height="200"
                                      class="rightImage"/>For all advice related to:</p>
    <ul>
        <li>Learning</li>
        <li>Relationships</li>
        <li>Technology</li>
        <li>Coffee</li>
        <li>and so much more...</li>
    </ul>

</section>
<?php include( "inc_footer.php" ); ?>
</body>
</html>
