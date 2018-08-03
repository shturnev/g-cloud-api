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
      <a href="#" class="accordion-title">Авторизация</a>

      <div class="accordion-content" data-tab-content >
        <!--Авторизация-->
        <div class="grid-x grid-padding-x">
          <div class="cell large-4">
            <h4>Авторизация</h4>
            <div class="callout secondary">
              <ul>
                <li>method_name: auth</li>
                <li>login: (string)</li>
                <li>pass: (string)</li>
              </ul>

            </div>
          </div>
          <div class="cell large-8">
            <form action="api.php" method="post" enctype="multipart/form-data" name="myForm" target="_self">
              <input type="hidden" name="method_name" value="auth">

              <label>login</label>
              <input type="text" name="login" value="stur2@forinfinite.com" />
              <label>pass</label>
              <input type="text" name="pass" value="stur2@forinfinite.com"/>

              <input name="submit" type="submit" class="button" value="Done"/>
            </form>
          </div>
        </div>
      </div>
    </li>
    <li data-accordion-item>
      <a href="#" class="accordion-title">Get All Custom Reports</a>

      <div class="accordion-content" data-tab-content >
        <!--Get All Custom Reports-->
        <div class="grid-x grid-padding-x">
          <div class="cell large-4">
            <h4>Get All Custom Reports</h4>
            <div class="callout secondary">
              <ul>
                <li>method_name: get_all_custom_reports</li>
                <li>token: (string)</li>
              </ul>
            </div>
          </div>
          <div class="cell large-8">
            <form action="api.php" method="post" enctype="multipart/form-data" name="myForm" target="_self">
              <input type="hidden" name="method_name" value="get_all_custom_reports">

              <label>token</label>
              <input type="text" name="token" value="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyaWQiOiI1YTRlMGEyMWFhZTQ0NzAwMDIzNjYzZDIifQ.KXM3EkBuHeZNJI-xe3q4ahp5Cz4d3vSzyI5uPgqtuvM" />

              <input name="submit" type="submit" class="button " value="Done"/>
            </form>
          </div>


        </div>
      </div>
    </li>
    <li data-accordion-item>
      <a href="#" class="accordion-title">Generate custom report</a>

      <div class="accordion-content" data-tab-content >
        <!--Get All Custom Reports-->
        <div class="grid-x grid-padding-x">
          <div class="cell large-4">
            <h4>Generate custom report</h4>
            <div class="callout secondary">
              <ul>
                <li>method_name: generate_custom_report</li>
                <li>token: (string)</li>
                <li>id: (string)</li>
              </ul>
            </div>
          </div>
          <div class="cell large-8">
            <form action="api.php" method="post" enctype="multipart/form-data" name="myForm" target="_self">
              <input type="hidden" name="method_name" value="generate_custom_report">

              <label>token</label>
              <input type="text" name="token" value="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyaWQiOiI1YTRlMGEyMWFhZTQ0NzAwMDIzNjYzZDIifQ.KXM3EkBuHeZNJI-xe3q4ahp5Cz4d3vSzyI5uPgqtuvM" />
              <label>id</label>
              <input type="text" name="id" value="5a61d6a2ec412d00025c98c4" />

              <input name="submit" type="submit" class="button " value="Done"/>
            </form>
          </div>


        </div>
      </div>
    </li>
    <li data-accordion-item>
      <a href="#" class="accordion-title">Export custom report</a>

      <div class="accordion-content" data-tab-content >
        <!--Get All Custom Reports-->
        <div class="grid-x grid-padding-x">
          <div class="cell large-4">
            <h4>Export custom report</h4>
            <div class="callout secondary">
              <ul>
                <li>method_name: export_custom_report</li>
                <li>token: (string)</li>
                <li>id: (string)</li>
                <li>insert: (bool) (нужно ли записать данные в БД?)</li>
              </ul>
            </div>
          </div>
          <div class="cell large-8">
            <form action="api.php" method="post" enctype="multipart/form-data" name="myForm" target="_self">
              <input type="hidden" name="method_name" value="export_custom_report">

              <label>token</label>
              <input type="text" name="token" value="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyaWQiOiI1YTRlMGEyMWFhZTQ0NzAwMDIzNjYzZDIifQ.KXM3EkBuHeZNJI-xe3q4ahp5Cz4d3vSzyI5uPgqtuvM" />
              <label>id</label>
              <input type="text" name="id" value="5a61d6a2ec412d00025c98c4" />
              <label>
                <input type="checkbox" name="insert" />
                insert
              </label>

              <input name="submit" type="submit" class="button " value="Done"/>
            </form>
          </div>


        </div>
      </div>
    </li>
    <li data-accordion-item>
      <a href="#" class="accordion-title">Get all filtered data of report_id from db</a>

      <div class="accordion-content" data-tab-content >
        <!--Get All Custom Reports-->
        <div class="grid-x grid-padding-x">
          <div class="cell large-4">
            <h4>Get all -filtered</h4>
            <div class="callout secondary">
              <ul>
                <li>method_name: get_filtered_from_db_all</li>

                <li>report_id : (string)</li>
                <li>limit : (int)</li>
                <li>unique : (string) </li>
                <li>order_by : (string) </li>
                <li>date_from : (int unix_date)</li>
                <li>date_to : (int unix_date)</li>
              </ul>
            </div>
          </div>
          <div class="cell large-8">
            <form action="api.php" method="post" enctype="multipart/form-data" name="myForm" target="_self">
              <input type="hidden" name="method_name" value="get_filtered_from_db_all">

              <label>limit</label>
              <input type="text" name="limit" value="20" />
              <label>report_id</label>
              <input type="text" name="report_id" value="5a61d6a2ec412d00025c98c4" />
              <label>unique</label>
              <input type="text" name="unique" value="ddomain" />
              <label>order_by</label>
              <input type="text" name="order_by" value="successRate" />
              <label>date_from</label>
              <input type="text" name="date_from" value="<? echo strtotime('-1 month') ?>" />
              <label>date_to</label>
              <input type="text" name="date_to" value="<? echo strtotime('+1 day') ?>" />

              <input name="submit" type="submit" class="button " value="Done"/>
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
