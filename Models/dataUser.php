<?php
    $sql="SELECT * FROM `utilisateurs` WHERE id_user = 1;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>