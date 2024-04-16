<?php
// Sélectionnez toutes les données
function getAllOurdatas(PDO $db): array|string
{
    $sql ="SELECT * FROM ourdatas ORDER BY idourdatas DESC;";
    try{
        $query = $db->query($sql);
        if($query->rowCount()===0) return "Pas encore de datas";
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;

    }catch(Exception $e){
        return ['error'=>$e->getMessage()];
    }
}

// charger une seule donnée
function getOneOurdatas(PDO $db, int $id): array|string
{
    $sql = "SELECT * FROM ourdatas WHERE idourdatas = ?;";
    $prepare = $db->prepare($sql);
    $prepare->bindParam(1,$id,PDO::PARAM_INT);
    try{
        $prepare->execute();
        if($prepare->rowCount()===0) return "Data non existante";
        $result = $prepare->fetch();
        $prepare->closeCursor();
        return $result;
    }catch(Exception $e){
        return ['error'=>$e->getMessage()];
    }
}

// mettre à jour une donnée
function updateOurdatas(PDO $db,
                        string $titre,
                        string $description,
                        float $latitude,
                        float $longitude,
                        int $id
                        ) : bool|string
{
    $prepare = $db->prepare("UPDATE ourdatas SET title = ?, ourdesc = ?, latitude = ?, longitude = ? WHERE idourdatas = ?");
    $prepare->bindParam(1,$titre);
    $prepare->bindParam(2,$description);
    $prepare->bindParam(3,$latitude);
    $prepare->bindParam(4,$longitude);
    $prepare->bindParam(5,$id,PDO::PARAM_INT);
    try{
        $prepare->execute();
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

// ajoutez avec une requête préparée la nouvelle data
function addOurdatas(PDO $db, 
                    string $titre, 
                    string $description, 
                    float $latitude,
                    float $longitude
                    ) : bool|string
{
    $prepare = $db->prepare("INSERT INTO ourdatas (title, ourdesc, latitude, longitude) VALUES (?,?,?,?)");
    $prepare->bindParam(1,$titre);
    $prepare->bindParam(2,$description);
    $prepare->bindParam(3,$latitude);
    $prepare->bindParam(4,$longitude);
    try{
        $prepare->execute();
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }
}