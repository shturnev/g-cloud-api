<?php
require_once "vendor/autoload.php";
$auth = ['login' => 'admin', 'pass' => 'x1111', 'token' => "5a4e0a21aae44700023663d2--shts."];

if($_COOKIE['token'] != $auth['token'])
{
  require_once "blocks/login.php"; exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>APi for Google Storage</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css"  />
<!--    <link rel="stylesheet" type="text/css" href=""/>-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div class="grid-container">
  <!--API-->
  <div class="grid-x grid-padding-x">
    <div class="cell"><h1 class="separator-left">API</h1></div>
    <div class="cell"><h6><b><script> document.write(location.protocol+'//'+location.hostname+'/api.php') </script></b></div>
    <div class="cell">Request type: POST</div>
  </div>
  <div style="height: 50px;"></div>

  <!--Methods-->
  <ul class="accordion" data-accordion data-allow-all-closed="true">
    <li data-accordion-item>
      <a href="#" class="accordion-title">Upload</a>
      <div class="accordion-content" data-tab-content >
        <div class="grid-x grid-padding-x">
          <div class="cell large-4">
            <h4>upload</h4>
            <div class="callout secondary">
              <ul>
                <li>method_name: upload</li>
                <li>file: (file)</li>
                <li>filename: (string)</li>
                <li>bucket: (string - название сегмента в storage)</li>
              </ul>
            </div>
          </div>
          <div class="cell large-8">
            <form action="api.php" method="post" enctype="multipart/form-data" name="myForm" target="_self">
              <input type="hidden" name="method_name" value="upload">

              <label>file</label>
              <input type="file" name="file" />
              <input name="submit" type="submit" class="button" value="Done"/>
            </form>
          </div>
        </div>
      </div>
    </li>
    <li data-accordion-item>
      <a href="#" class="accordion-title">Get file</a>
      <div class="accordion-content" data-tab-content >
        <div class="grid-x grid-padding-x">
          <div class="cell large-4">
            <h4>Get file</h4>
            <div class="callout secondary">
              <ul>
                <li>method_name: getFile</li>
                <li>filename: (string)</li>
                <li>bucket: (string - название сегмента в storage)</li>
              </ul>
            </div>
          </div>
          <div class="cell large-8">
            <form action="api.php" method="post" enctype="multipart/form-data" name="myForm" target="_self">
              <input type="hidden" name="method_name" value="getFile">

              <label>filename</label>
              <input type="text" name="filename" />

              <label>bucket (название сегмента в storage)</label>
              <input type="text" name="bucket" />
              <input name="submit" type="submit" class="button" value="Done"/>
            </form>
          </div>
        </div>
      </div>

    </li>
  </ul>


</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
<script >
  $(document).foundation();
</script>
</body>
</html>
