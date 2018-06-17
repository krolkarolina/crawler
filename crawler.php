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
        $allLinks = array();
        $url = "";

        $urlAddress = empty($_GET['urlAddress']) ? "" : $_GET['urlAddress'];
        if ($urlAddress) {
          echo "Searched web page: $urlAddress";
          $allLinks = getHtmlFromRemote($urlAddress);

          foreach ($allLinks as $link) {
            $url .= '<a href="'.$link.'">'.$link.'</a>';
          }
          echo $url;
        }

        function getHtmlFromRemote($url) {
          $html = file_get_html($url);

          foreach($html->getElementByTagName('a') as $element){
            $allLinks[] = $element->href . '<br>';
          }
          $allLinks = array_unique($allLinks);
          return $allLinks;
        }
      ?>
    </div>
  </body>
</html>

