
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MAMP PRO</title>
<style type="text/css">
    .container {
        margin: 50px auto;
        display: flex; 
        gap: 10px 

    }
    .card {
        width: 200px;
        height: 400px;
        background-color: yellow;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
    
    }
    h1,h2,h3,h4,h5,h6 {
        text-align: center;
    }
</style>
<?php
    $hotels = [

	[
		'name' => 'Hotel Belvedere',
		'description' => 'Hotel Belvedere Descrizione',
		'parking' => true,
		'vote' => 4,
		'distance_to_center' => 10.4
	],
	[
		'name' => 'Hotel Futuro',
		'description' => 'Hotel Futuro Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 2
	],
	[
		'name' => 'Hotel Rivamare',
		'description' => 'Hotel Rivamare Descrizione',
		'parking' => false,
		'vote' => 1,
		'distance_to_center' => 1
	],
	[
		'name' => 'Hotel Bellavista',
		'description' => 'Hotel Bellavista Descrizione',
		'parking' => false,
		'vote' => 5,
		'distance_to_center' => 5.5
	],
	[
		'name' => 'Hotel Milano',
		'description' => 'Hotel Milano Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 50
	],

    ];

    
?>

</head>

<body>
    <div class="container">
        <?php 
            foreach($hotels as $hotel) {

                $nomeHotel = $hotel['name'];
                $descrizioneHotel = $hotel['description'];
                $parcheggioHotel = $hotel['parking'];
                $votoHotel = $hotel['vote'];
                $distanzaHotel = $hotel['distance_to_center'];

                echo '<div class="card"> <h1>' . $nomeHotel . '</h1> <h3>' . $descrizioneHotel . '</h3> <h4> Parcheggio: ' . ($parcheggioHotel ? 'Si' : 'No') . '</h4> <h5>' . $votoHotel . '</h5> <h6> Distanza da centro: ' . $distanzaHotel . 'km</h6> </div>';
        
            
            }
        ?>
    </div>
    <p>
    
   
    </p>
    
</body>
</html>