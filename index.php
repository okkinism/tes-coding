<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>List data</h1>
    <label for="search-pokemon">Cari pokemon:</label>
    <input type="text" id="search-pokemon" oninput="filterPokemon()">
    <select id="dropdown-pokemon">
        <?php 
            // Memanggil fungsi untuk panggil data Pokemongg
            $pokemonData = getPokemonData();

            // Mengurutkan data secara ascending dari nama
            usort($pokemonData, function ($a, $b) {
                return strcmp($a['name'], $b['name']);
            });

            // Tampilkan opsi dropdown berdasarkan data Pokemon
            foreach ($pokemonData as $pokemon) {
                echo "<option value='" . $pokemon['name'] . "'>" . $pokemon['name'] . "</option>";
            }
        ?>
    </select>
</body>
</html>
<?php 
    //Fungsi untuk menambahkan data Pokemon dari PokeAPI 
    function getPokemonData() {
        $url = 'https://pokeapi.co/api/v2/pokemon/?limit=1000';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        return $data['results'];
    }
?>