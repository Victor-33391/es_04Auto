<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $marca = $_GET["marca"];
        $modello = $_GET["modello"];
        $stato = $_GET["stato"];
        $anno = $_GET["anno"];
        $cilindrata = $_GET["cilindrata"];
        $cavalli = $_GET["cavalli"];
        $prezzo = $_GET["prezzo"];
        $targa = $_GET["targa"];
        $descrizione = $_GET["testo"];

        
        if(isset($_GET["aria_cond"])){
            $aria = "aria condizionata";
            
        }else{
            $aria = "";
        }

        if(isset($_GET["vernice_meta"])){
            $vernice = "vernice metalizzata";
            
        }else{
            $vernice = "";
        }

        if(isset($_GET["tetto"])){
            $tetto = "tetto in cristallo";
            
        }else{
            $tetto = "";
        }

        if(isset($_GET["radio"])){
            $radio = "Radio-CD";
            
        }else{
            $radio = "";
        }
    
    
    ?>
    <h1>Dati dell'auto</h1>

    <table>
        <tr>
            <td>Marca: </td>
            <td><?php 
                    echo $marca;
            ?></td>
        </tr>
        <tr>
            <td>Modello: </td>
            <td><?php 
                    echo $modello;
            ?></td>
        </tr>
        <tr>
            <td>Stato: </td>
            <td><?php 
                    echo $stato;
            ?></td>
        </tr>
        <tr>
            <td>Anno Produzione: </td>
            <td><?php 
                    echo $anno;
            ?></td>
        </tr>
        <tr>
            <td>Cilindrata: </td>
            <td><?php 
                    echo $cilindrata;
            ?></td>
        </tr>
        <tr>
            <td>Cavalli: </td>
            <td><?php 
                    echo $cavalli;
            ?></td>
        </tr>
        <tr>
            <td>Prezzo: </td>
            <td><?php 
                    echo $prezzo;
            ?></td>
        </tr>
        <tr>
            <td>Targa: </td>
            <td><?php 
                    echo $targa;
            ?></td>
        </tr>
        <tr>
            <td>Accessorio: </td>
            <td><?php 
                    echo $aria;
                    echo $vernice;
                    echo $tetto;
                    echo $radio;
            ?></td>
        </tr>
        <tr>
            <td>Descrizione: </td>
            <td><?php 
                    echo $descrizione;
            ?></td>
        </tr>
    </table>
</body>
</html>