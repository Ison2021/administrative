<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "administrative-management-system";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

if(!$connection)
{
    die("Connection failed: " . mysqli_connect_error());
    echo '
    <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-6"> 
    <div class="row"> 
      <div class="col-xl-12"> 
        <div class="card widget-1">
          <div class="card-body"> 
            <div class="widget-content">
              <div class="widget-round secondary">
                <div class="bg-round">
                  <svg class="svg-fill">
                    <use href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#cart"> </use>
                  </svg>
                  <svg class="half-circle svg-fill">
                    <use href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#halfcircle"></use>
                  </svg>
                </div>
    ';
}
?>