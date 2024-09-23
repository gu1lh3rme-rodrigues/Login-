<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
    $fotos = array("Citroen", "Chevrolet", "Fiat", "Ford", "Honda", "Nissan");

    // Contar o número de elementos no array
    echo "<br><strong>Quantidade total de fotos:</strong><br>";
    $contarArray = count($fotos);
    echo $contarArray . "<br>";

    // Exibir array em ordem reversa
    echo "<br><strong>Fotos em ordem reversa:</strong><br>";
    $reverseArray = array_reverse($fotos);
    for ($i = 0; $i < count($reverseArray); $i++) {
        $foto = $reverseArray[$i];
            echo "<div class='foto-container'> <img src='../imgs/$foto.png' class='ft'><br>$foto </div>";
        }

        

        // Exibir um subarray de 4 elementos começando do índice 1
    echo "<br><strong>Subarray (fotos do índice 1 ao 4):</strong><br>";
    $subArray = array_slice($fotos, 1, 4);
    for ($i = 0; $i < count($subArray); $i++) {
        $foto = $subArray[$i];
            echo "<div class='foto-container'> <img src='../imgs/$foto.png' class='ft'><br>$foto </div>";
        }

        echo "<br>";

        // Adicionar uma nova foto e exibir todas as fotos novamente
        $novaft = "Isaquias Queiroz"; // Imagem a ser adicionada
        array_push($fotos, $novaft);
        echo "<br><strong>Nova foto adicionada:</strong> $novaft<br>";
        for ($i = 0; $i < count($fotos); $i++) {
            $foto = $fotos[$i];
            echo "<div class='foto-container'><img src='../imgs/$foto.png' class='ft'><br> $foto </div>"; 
        }

        echo "<br>";

        // Remover a primeira e a última imagem do array
        echo "<br><strong>Remover a primeira imagem:</strong><br>";
        array_shift($fotos); // Remove a primeira foto
        for ($i = 0; $i < count($fotos); $i++) {
            $foto = $fotos[$i];
             echo "<div class='foto-container'><img src='../imgs/$foto.png' class='ft'><br> $foto </div>";
}
echo "<br>";

echo "<br><strong>Remover a última imagem:</strong><br>";
array_pop($fotos); // Remove a última foto
for ($i = 0; $i < count($fotos); $i++) {
    $foto = $fotos[$i];
    echo "<div class='foto-container'><img src='../imgs/$foto.png' class='ft'><br> $foto </div>";
}
echo "<br>";

       
        ?>
</body>
<style>
* {
    padding: 0;
    margin: 0;
}
      .foto-container {
            display: inline-block;
            text-align: center;
            margin: 10px;
        }
        .ft {
            width: 150px; 
            height: 150px;
        }
</style>
</html>