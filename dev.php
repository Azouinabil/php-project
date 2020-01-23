<html lang="en" dir="ltr">
  <head>
    <title></title>
  </head>
  <body>
  <H1>DEVINWEB</H1>
  <?php
  ECHO "DEVINWEB<br>";
  ?>
  
    <?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}
 
{ <?php
//define variables and set to emptyvalues
$id = $name = $slug
/$api/$city


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ID"])) {
    $IDErr = "ID is required";
  } else {
    $ID = test_input($_POST["ID"]);
  }

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["slug"])) {
    $SLUGErr = "slug is required";
  } else {
    $slug = test_input($_POST["slug"]);
  }
  
  if (empty($_POST["city"])) {
    $CITYErr = "city is required";
  } else {
    $apicity = test_input($_POST["api/city"]);
  }
  
<?php
echo "<h2> Input:</h2>";
echo $ID;
echo "<br>";
echo $name;
echo "<br>";
echo $slug;
echo "<br>";
echo $city;
echo "<br>";

?>
<?php
$d=mktime(
    "dates": [ 
        { 
     $d=mktime( 08, 11, 2019);
echo" "Created date is " . "date(""Y-m-d h:i:sa", $d);
      "day_name": "tuesday", 
            "date": "2019-11-05", 
            ""delivery_times": [ 
                { 
             "     $d=mktime(16, 02, 28, 04, 12, 2017);
				  $d=mktime(16, 02, 28, 04, 12, 2017);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
                "
					"id":" 1, 
					""delivery_at": "9->12", 
                    ""created_at": "2017-12-04 16:02:28", 
       "             "updated_at": "2017-12-04 16:02:28" 
                }, 
                { 
				$d=mktime=(16, 02, 04,04, 12, 2017);
				$d=mktime=(16, 02, 04,04, 12, 2017);
                    ""id":" 2, 
        "            "delivery_at":" 14PM->18", 
                    ""created_at":" ""2017-12-04 16:02:28", 
                    ""updated_at":" ""2017-12-04 16:02:28" 
                } 
                ] 
        }, 
        { 
		<?php
		echo		="
		"day_name": "Wednesday", 
            "date": "2019-11-06", 
			
$d=strtotime("" April ""06;11;2019");
echo "Created date is " . date("Y-m-d", $d);
?>
            "delivery_times": [ 
                { 
				<?php
				echo"
                    "id":" 2, 
                    ""delivery_at": "14->18PM", 
                    "created_at": "2017-12-04 16:02:28", 
                    ""updated_at": "2017-12-04 16:02:28" 
                }  
            ] 
        }, 
 	{ anoher_date if number_of_days_to_get>2 
} 
            ] 
} 
 
 

require_once __DIR__.'/public/index.php';
?>
  </body>
</html>