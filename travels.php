<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  
$travels=array(
0=>array('departure'=>'Paris','arrival'=>'Nantes', 'departureTime'=>'11:00','arrivalTime'=>'12:34','driver'=>'Thomas'),
1=>array('departure'=>'Orléans','arrival'=>'Nantes', 'departureTime'=>'05:15','arrivalTime'=>'09:32', 'driver'=>'Mathieu'),
2=>array('departure'=>'Dublin','arrival'=>'Tours', 'departureTime'=>'07:23','arrivalTime'=>'08:50', 'driver'=>'nathanaël'),
3=>array('departure'=>'Paris','arrival'=>'Orléans', 'departureTime'=>'03:00','arrivalTime'=>'05:26', 'driver'=>'Clément'),
4=>array('departure'=>'Paris','arrival'=>'Nice', 'departureTime'=>'10:00','arrivalTime'=>'12:09', 'driver'=>'Audrey'),
5=>array('departure'=>'Nice','arrival'=>'Nantes', 'departureTime'=>'10:40','arrivalTime'=>'13:00', 'driver'=>'Pollux'),
6=>array('departure'=>'Nice','arrival'=>'Tours', 'departureTime'=>'11:00','arrivalTime'=>'16:10', 'driver'=>'Edouard'),
7=>array('departure'=>'Tours','arrival'=>'Amboise', 'departureTime'=>'16:00','arrivalTime'=>'18/40', 'driver'=>'Priscilla'),
8=>array('departure'=>'Nice','arrival'=>'Nantes', 'departureTime'=>'12:00','arrivalTime'=>'16:00', 'driver'=>'Charlotte'),
);


foreach ($travels as $travel) {

		if ($travel['departure']==$_POST['ville']) {
	
			echo "<br/>"."départ :  ".$travel['departure']."<br/>"." arrivée : ".$travel['arrival']."<br/>";
			echo "heure de départ ".$travel['departureTime']."<br/>"."heure d'arrivée ".$travel['arrivalTime']."<br/>"."le conducteur est ".$travel['driver']."<br/>";
		}	
}	

?>
 </body>
</html>