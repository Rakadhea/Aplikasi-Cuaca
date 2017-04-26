<!DOCTYPE html>
<html lang="en">
<?php
	include "header.php";
?>

<div class="container">
	<h2 style="text-align:center;"><b>Perkiraan Cuaca Hari Ini</b></h2>
   <h4 style="text-align:center;">Masukkan Lokasi</h4>
   <style> 
select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
</style>
  </div> 

<body>  <center>
<form action="" method="POST">
<input type="text" name="kota">
<input type="submit" class="button" name="submit" value="cari">
</form>  </center>

<?php
error_reporting(0);
$id = $_POST['kota'];
if(isset($id)){

  $json_string = file_get_contents("http://api.wunderground.com/api/39e449f654a8416d/geolookup/conditions/q/IA/$id.json");
  $parsed_json1 = json_decode($json_string);
  $location = $parsed_json1->{'response'}->{'version'};
  $weather = $parsed_json1->{'location'}->{'city'};
  $weather1 = $parsed_json1->{'current_observation'}->{'weather'};
  $feelslike_c= $parsed_json1->{'current_observation'}->{'feelslike_c'};

	$json_string = file_get_contents("http://api.wunderground.com/api/39e449f654a8416d/forecast/q/ID/$id.json");
	$parsed_json = json_decode($json_string, true);
	
    $parsed_json = $parsed_json['forecast']['txt_forecast'];
	$datetambakaji = $parsed_json['date'];


    $parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'][0];

    $icon_url1 = $parsed_json['icon_url'];
    $day1 = $parsed_json['title'];
	$kondisi1 = $parsed_json ['fcttext_metric'];
    
	
    $parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'][1];
	
    $icon_url11 = $parsed_json['icon_url'];    
    $day11 = $parsed_json['title'];
	$kondisi11 = $parsed_json ['fcttext_metric'];
	
    $parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'][2];
	
    $icon_url2 = $parsed_json['icon_url'];    
    $day2 = $parsed_json['title'];
	$kondisi2 = $parsed_json ['fcttext_metric'];
	
	$parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'][3];
	
    $icon_url3 = $parsed_json['icon_url'];    
    $day3 = $parsed_json['title'];
	$kondisi3 = $parsed_json ['fcttext_metric'];

	$parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'][4];
	
    $icon_url4 = $parsed_json['icon_url'];    
    $day4 = $parsed_json['title'];
	$kondisi4 = $parsed_json ['fcttext_metric'];
    
	$parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'][5];
	
    $icon_url5 = $parsed_json['icon_url'];    
    $day5 = $parsed_json['title'];
	$kondisi5 = $parsed_json ['fcttext_metric'];
	
	$parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'][6];
	
    $icon_url6 = $parsed_json['icon_url'];    
    $day6 = $parsed_json['title'];
	$kondisi6 = $parsed_json ['fcttext_metric'];
	
	$parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'][7];
	
    $icon_url7 = $parsed_json['icon_url'];    
    $day7 = $parsed_json['title'];
	$kondisi7 = $parsed_json ['fcttext_metric'];
	
}
  
 
?>
<center>
<br>
<br>
#-------------------------------------#
<br>
Saat ini anda sedang berada di <br>
--<?php echo $weather ?>--<br>
Suhu Udara Saat Ini <?php echo $feelslike_c ?>' Celcius <br>
#-------------------------------------#
<br>
Hari <?php echo $day1 ?>
<br>
Jam	<?php echo $datetambakaji ?>
<br>
Perkiraan Cuaca<br><img src="<?php echo $icon_url1 ?>" alt="">
<br>
<?php echo $kondisi1 ?>
<br>
-------------------------------------<br> <br> <br>
Hari <?php echo $day11 ?>
<br>
Jam	<?php echo $datetambakaji ?>
<br>
Perkiraan Cuaca<br><img src="<?php echo $icon_url11 ?>" alt="">
<br>
<?php echo $kondisi11 ?>
<br>
-------------------------------------<br> <br> <br>
Hari <?php echo $day2 ?>
<br>
Jam	<?php echo $datetambakaji ?>
<br>
Perkiraan Cuaca<br><img src="<?php echo $icon_url2 ?>" alt="">
<br>
<?php echo $kondisi2 ?>
<br>
-------------------------------------<br> <br> <br>
Hari <?php echo $day3 ?>
<br>
Jam	<?php echo $datetambakaji ?>
<br>
Perkiraan Cuaca<br><img src="<?php echo $icon_url3 ?>" alt="">
<br>
<?php echo $kondisi3 ?>
<br>
-------------------------------------<br> <br> <br>
Hari <?php echo $day4 ?>
<br>
Jam	<?php echo $datetambakaji ?>
<br>
Perkiraan Cuaca<br><img src="<?php echo $icon_url4 ?>" alt="">
<br>
<?php echo $kondisi4 ?>
<br>
-------------------------------------<br> <br> <br>
Hari <?php echo $day5 ?>
<br>
Jam	<?php echo $datetambakaji ?>
<br>
Perkiraan Cuaca<br><img src="<?php echo $icon_url5 ?>" alt="">
<br>
<?php echo $kondisi5 ?>
<br>
-------------------------------------<br> <br> <br>
Hari <?php echo $day6 ?>
<br>
Jam	<?php echo $datetambakaji ?>
<br>
Perkiraan Cuaca<br><img src="<?php echo $icon_url6 ?>" alt="">
<br>
<?php echo $kondisi6 ?>
<br>
-------------------------------------<br> <br> <br>
Hari <?php echo $day7 ?>
<br>
Jam	<?php echo $datetambakaji ?>
<br>
Perkiraan Cuaca<br><img src="<?php echo $icon_url7 ?>" alt="">
<br>
<?php echo $kondisi7 ?>
<br>
-------------------------------------<br> <br> <br>

	!==================! <br>
	Rakadhea Dimaski <br>
	15.01.53.0126 <br>
	!==================!

</center>

</body>
</html>