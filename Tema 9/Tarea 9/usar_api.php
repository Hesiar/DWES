<?php
    // URL de la API para obtener información
    $url_pika = "https://pokeapi.co/api/v2/pokemon/pikachu";
    $url_bulbasur = "https://pokeapi.co/api/v2/pokemon/bulbasaur";
    $url_charmander = "https://pokeapi.co/api/v2/pokemon/charmander";
    $url_squirtle = "https://pokeapi.co/api/v2/pokemon/squirtle";

    // Obtener los datos de la API
    $response_pika = file_get_contents($url_pika);
    $response_bulbasur = file_get_contents($url_bulbasur);
    $response_charmander = file_get_contents($url_charmander);
    $response_squirtle = file_get_contents($url_squirtle);

    // Decodificar JSON a un array asociativo
    $data_pika = json_decode($response_pika, true);
    $data_bulbasur = json_decode($response_bulbasur, true);
    $data_charmander = json_decode($response_charmander, true);
    $data_squirtle = json_decode($response_squirtle, true);

    // Extraer datos específicos
    $name_pika = ucfirst($data_pika['name']);
    $sprite_pika = $data_pika['sprites']['front_default'];
    $height_pika = $data_pika['height'];
    $weight_pika = $data_pika['weight'];
    $type_pika = $data_pika['types'][0]['type']['name'];

    $name_bulbasur = ucfirst($data_bulbasur['name']);
    $sprite_bulbasur = $data_bulbasur['sprites']['front_default'];
    $height_bulbasur = $data_bulbasur['height'];
    $weight_bulbasur = $data_bulbasur['weight'];
    $type_bulbasur = $data_bulbasur['types'][0]['type']['name'];

    $name_charmander = ucfirst($data_charmander['name']);
    $sprite_charmander = $data_charmander['sprites']['front_default'];
    $height_charmander = $data_charmander['height'];
    $weight_charmander = $data_charmander['weight'];
    $type_charmander = $data_charmander['types'][0]['type']['name'];

    $name_squirtle = ucfirst($data_squirtle['name']);
    $sprite_squirtle = $data_squirtle['sprites']['front_default'];
    $height_squirtle = $data_squirtle['height'];
    $weight_squirtle = $data_squirtle['weight'];
    $type_squirtle = $data_squirtle['types'][0]['type']['name'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Pokémon</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Pokemons iniciales de la 1ª generación</h1>
    <span>
        <div id="pikachu">
            <h2><?php echo $name_pika; ?></h2>
            <img src="<?php echo $sprite_pika; ?>" alt="<?php echo $name_pika; ?>">
            <p><strong>Altura:</strong> <?php echo $height_pika /10; ?> m</p>
            <p><strong>Peso:</strong> <?php echo $weight_pika /10; ?> kg</p>
            <p><strong>Tipo:</strong> <?php echo $type_pika; ?></p>
        </div>

        <div id="bulbasur">
            <h2><?php echo $name_bulbasur; ?></h2>
            <img src="<?php echo $sprite_bulbasur; ?>" alt="<?php echo $name_bulbasur; ?>">
            <p><strong>Altura:</strong> <?php echo $height_bulbasur /10; ?> m</p>
            <p><strong>Peso:</strong> <?php echo $weight_bulbasur /10; ?> kg</p>
            <p><strong>Tipo:</strong> <?php echo $type_bulbasur; ?></p>
        </div>

        <div id="charmander">
            <h2><?php echo $name_charmander; ?></h2>
            <img src="<?php echo $sprite_charmander; ?>" alt="<?php echo $name_charmander; ?>">
            <p><strong>Altura:</strong> <?php echo $height_charmander /10; ?> m</p>
            <p><strong>Peso:</strong> <?php echo $weight_charmander /10; ?> kg</p>
            <p><strong>Tipo:</strong> <?php echo $type_charmander; ?></p>
        </div>

        <div id="squirtle">
            <h2><?php echo $name_squirtle; ?></h2>
            <img src="<?php echo $sprite_squirtle; ?>" alt="<?php echo $name_squirtle; ?>">
            <p><strong>Altura:</strong> <?php echo $height_squirtle /10; ?> m</p>
            <p><strong>Peso:</strong> <?php echo $weight_squirtle /10; ?> kg</p>
            <p><strong>Tipo:</strong> <?php echo $type_squirtle; ?></p>
        </div>
    </span>
    <p>Pasa el ratón por encima de las cartas</p>   
</body>
</html>
