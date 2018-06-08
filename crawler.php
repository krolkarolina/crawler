<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crawler</title>
    <link rel="stylesheet" type="text/css" href="reset.css" />
    <link rel="stylesheet" type="text/css" href="crawler.css" />
  </head>
  <body>
    <div class="form">
      <form class="form" action="crawler.php" method="get">
        <p>Use field bellow to get all URL`s from web page:<p>
        <div class="input">
          <input type="text" name="urlAddress" placeholder="e.g: http://example.com">
          <input type="submit" value="Submit">
        </div>
      </form>
      <a href="crawler.php">reset</a>
    </div>
    <div class="results">
      <?php
        include_once "simple_html_dom.php";
      ?>
    </div>
  </body>
</html>

