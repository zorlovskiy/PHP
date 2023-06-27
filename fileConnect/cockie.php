<?php
$title = "Куки";
//require "blocks/header.php";
?>
<h1>Куки страница</h1>
<?php
//Куки и сессия в PHP
$user_name = "Alex";
setcookie("user_name", $user_name, time() +5);
print_r($_COOKIE);
//require "blocks/footer.php";
?>


<!--SELECT a.aircraft_code AS a_code,
a.model,
r.aircraft_code AS r_code,
count( r.aircraft_code ) AS num_routes
FROM aircrafts a
LEFT OUTER JOIN routes r ON r.aircraft_code = a.aircraft_code
GROUP BY 1, 2, 3
ORDER BY 4 DESC;

SELECT
CASE WHEN count(r.flight_no) = 0 THEN 0 ELSE fraction = (count( r.aircraft_code ) / count(r.flight_no)) END
a.aircraft_code AS a_code,
a.model,
r.aircraft_code AS r_code,
count( r.aircraft_code ) AS num_routes,
FROM aircrafts a
LEFT OUTER JOIN routes r ON r.aircraft_code = a.aircraft_code
GROUP BY 1, 2, 3
ORDER BY 4 DESC;

SELECT a.aircraft_code AS a_code,
a.model,
r.aircraft_code AS r_code,
count( r.aircraft_code ) AS num_routes,
CASE
WHEN count(r.flight_no) = 0 THEN 0.0
WHEN count(r.flight_no) <> 0 THEN  CAST(count( r.aircraft_code )) AS FLOAT / CAST(count(r.flight_no)) AS FLOAT
ELSE 0
END AS fraction
FROM aircrafts a
LEFT OUTER JOIN routes r ON r.aircraft_code = a.aircraft_code
GROUP BY 1, 2, 3
ORDER BY 4 DESC;

( count(r.flight_no) / count( r.aircraft_code ))::numeric(6, 2)-->