<?php

    $usuario    = "adminpizzaslasalle";
    $contrasena = "N1#TBY&cN8DI";
    try{
        $conn = new PDO('p3plzcpnl502543.prod.phx3.secureserver.net:2083;dbname=PocketJetSys', $usuario, $contrasena);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
            {
                echo "ERROR: " . $e->getMessage();
            }
?>