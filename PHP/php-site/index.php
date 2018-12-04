<?php
$display_name = 'Carimu';
 ?>

 <!DOCTYPE html>
 <html>

 <!-- adding a head section for title and css link -->
    <head>
      <meta charset="utf-8">
      <title>PHP Basics by <<?php echo $display_name; ?></title>
      <link href="css/style.css" rel="stylesheet" />
      <!-- external link to css -->
    </head>

    <body>
      <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/logo.png" alt="frog">
          </div>
          <h1><?php echo $display_name; ?></h1>
          <p>contact:<br />
          <a href="mailto:mickey@aol.com">EMAIL</a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon twitter"></span></a></li>
          </ul>
          <hr />
          <p>Today: D, d M Y</p>

        </section>
        <section class="main">
          <h1>My First PHP page</h1>
          <h2>Echo</h2>
            <?php include 'inc/echo.php'; ?>
          <hr />
          <h2>Echo 2</h2>
            <?php include 'inc/echo2.php'; ?>
            <hr />
          <h2>Addition</h2>
            <?php include 'inc/addition.php'; ?>
          <hr />
          <h2>Syntax</h2>
            <?php include 'inc/syntax.php'; ?>
            <hr />
            <h2>Condition</h2>
              <?php include 'inc/condition.php'; ?>
              <hr />
              <h2>Strings</h2>
                <?php include 'inc/strings.php' ?>
            </section>
          </div>

          <section class="footer text-center">
            &copy; <?php
echo date('Y');
echo " ". $display_name . ". ";
// outputs e.g. 'Last modified: October 2018 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>
        </section>
    </body>
</html>
