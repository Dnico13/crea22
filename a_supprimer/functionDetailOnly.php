<?php



function DetailOnly($pdo)
{
if (isset($_GET['id'])){
    try {
        $id = intval($_GET['id']);

        $query = $pdo -> prepare ("SELECT * FROM Realisation INNER JOIN Picture ON Realisation.id = Id_Real WHERE  Id_Real = (:Id) ");

        $query -> BindParam(":Id", $id);
        $query -> execute();
        $DetailOnly = $query->fetch(PDO::FETCH_ASSOC);
        return $DetailOnly;

    } catch(Exception $e){
        echo 'il y a désagrement de restitution des donnees';
    }

    }
}
