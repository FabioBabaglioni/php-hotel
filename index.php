<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<!-- inserisco la fonte dati  -->
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

    <head>
        <form>
            <span>Filtra alberghi che hanno il parcheggio:</span>
            <input type="checkbox" name="parcheggio" id=""> <br>
            <span>Filtra alberghi che hanno voto superiore a 2:</span>
            <input type="checkbox" name="voto" id=""> <br>
            <input type="submit" value="Filtra">
        </form>
    </head>

    <main>
        <?php
            foreach($hotels as $hotel){
            $name = $hotel["name"];
            $description = $hotel["description"];
            $parking = $hotel["parking"];
            $vote = $hotel["vote"];
            $distance_to_center = $hotel["distance_to_center"];

            echo "
            <div>
                <h1> $name </h1>
                 <p> descizione: $description</p>
                <div>voto: $vote</div>
                <div>voto: distanza dal centro: $distance_to_center</div>
            </div>
            ";
            }
        ?>
    </main>

   
    
</body>
</html>