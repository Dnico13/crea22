<?php

Function creatReal($pdo){
    if (($_SERVER['REQUEST_METHOD']== 'POST') && isset($_POST['Submit'])){

        
        $titre= htmlspecialchars($_POST['Titre']);
        $detail1= htmlspecialchars($_POST['Detail1']);
        $detail2 = htmlspecialchars($_POST['Detail2']);
        $detail3 = htmlspecialchars($_POST['Detail3']);

        $query  = $pdo->prepare('INSERT INTO Realisation (Titre, detail1, detail2, detail3) VALUES (:T1, :d1, :d2, :d3)');

        
        $query->bindParam(':T1', $titre);
        $query->bindParam(':d1', $detail1);
        $query->bindParam(':d2', $detail2);
        $query->bindParam(':d3', $detail3);
        

        $query->execute();

        $Id_Rea= $pdo-> lastInsertId();
       
        //partie photo

        
        $image_name1 = $_FILES['Photo1']['name']; 
        $image_tmp_name1 = $_FILES['Photo1']['tmp_name'];  
        $image_error1 = $_FILES['Photo1']['error']; 

        $image_name2 = $_FILES['Photo2']['name']; 
        $image_tmp_name2 = $_FILES['Photo2']['tmp_name'];  
        $image_error2 = $_FILES['Photo2']['error']; 

        $image_name3 = $_FILES['Photo3']['name']; 
        $image_tmp_name3 = $_FILES['Photo3']['tmp_name'];  
        $image_error3 = $_FILES['Photo3']['error']; 

        $image_name4 = $_FILES['Photo4']['name']; 
        $image_tmp_name4 = $_FILES['Photo4']['tmp_name'];  
        $image_error4 = $_FILES['Photo4']['error']; 



        if ($image_error1 === 0 && $image_error2 === 0 && $image_error3 === 0 && $image_error4 === 0 ) {

            
            $destination1 = "realisations/".$image_name1 ;  
            move_uploaded_file($image_tmp_name1, $destination1);

            $destination2 = "realisations/".$image_name2 ;  
            move_uploaded_file($image_tmp_name2, $destination2);

            $destination3 = "realisations/".$image_name3 ;  
            move_uploaded_file($image_tmp_name3, $destination3);

            $destination4 = "realisations/".$image_name4 ;  
            move_uploaded_file($image_tmp_name4, $destination4);


            // envoie en bdd

            $query1  = $pdo->prepare('INSERT INTO Picture (Image1, Image2, Image3, Image4, Id_Real) VALUES (:I1, :I2, :I3, :I4,:id_rea)');

        
            $query1->bindParam(':I1', $destination1);
            $query1->bindParam(':I2', $destination2);
            $query1->bindParam(':I3', $destination3);
            $query1->bindParam(':I4', $destination4);
            $query1->bindParam(':id_rea', $Id_Rea);
            
    
            $query1->execute();
           
            
            header('location: ./InterfAdminis.php');

        
        
        

    } else {
        echo " Il y a eu une erreur lors du téléchargement des images";
    } 
}
}    



