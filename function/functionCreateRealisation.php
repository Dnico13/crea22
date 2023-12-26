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
        $tailleMax= 400000;
        $repertoire = "realisations/";
        $mimeautorises = ["image/jpeg", "image/png", "image/gif", "image/webp"];
        $allowedFileTypes =["jpeg", "jpg", "png", "gif","webp"];
        $imageok1= true;
        $imageok2= true;
        $imageok3= true;
        $imageok4= true;
        
        
        
        
        
        //partie photo

        

        // Photo1
        
        
        $targetFile1 = $repertoire . basename($_FILES["Photo1"]["name"]);
        $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));

        
        $image_tmp_name1 = $_FILES['Photo1']['tmp_name'];  
        $image_error1 = $_FILES['Photo1']['error'];
        


        if($_FILES["Photo1"]["size"] > $tailleMax) {
            echo "Le fichier est trop volumineux.";
            $imageok1= false;
        }
        
        $fileMime1 = mime_content_type($_FILES["Photo1"]["tmp_name"]);
        if (!in_array($fileMime1, $mimeautorises)) {
        echo "Ce type de fichier n’est pas autorisé";
        $imageok1= false;
        }
        
        
        if (!in_array($imageFileType1, $allowedFileTypes)) {
        echo "Seules les images aux formats JPG, JPEG, PNG, GIF et WEBP sont autorisées.";
        $imageok1=false;
        }


        // Photo2
        
        $targetFile2 = $repertoire . basename($_FILES["Photo2"]["name"]);
        $imageFileType2 = strtolower(pathinfo($targetFile2, PATHINFO_EXTENSION));

        
        $image_tmp_name2 = $_FILES['Photo2']['tmp_name'];  
        $image_error2 = $_FILES['Photo2']['error']; 

        if($_FILES["Photo2"]["size"] > $tailleMax) {
            echo "Le fichier est trop volumineux.";
            $imageok2= false;
        }
        
        $fileMime2 = mime_content_type($_FILES["Photo2"]["tmp_name"]);
        if (!in_array($fileMime2, $mimeautorises)) {
        echo "Ce type de fichier n’est pas autorisé";
        $imageok2= false;
        }
        
        
        if (!in_array($imageFileType2, $allowedFileTypes)) {
        echo "Seules les images aux formats JPG, JPEG, PNG, GIF et WEBP sont autorisées.";
        $imageok2= false;
        }

        // Photo3
        
        $targetFile3 = $repertoire . basename($_FILES["Photo3"]["name"]);
        $imageFileType3 = strtolower(pathinfo($targetFile3, PATHINFO_EXTENSION));

        
        $image_tmp_name3 = $_FILES['Photo3']['tmp_name'];  
        $image_error3 = $_FILES['Photo3']['error']; 

        if($_FILES["Photo3"]["size"] > $tailleMax) {
            echo "Le fichier est trop volumineux.";
            $imageok3= false;
        }
        
        $fileMime3 = mime_content_type($_FILES["Photo3"]["tmp_name"]);
        if (!in_array($fileMime3, $mimeautorises)) {
        echo "Ce type de fichier n’est pas autorisé";
        $imageok3= false;
        }
        
        
        if (!in_array($imageFileType3, $allowedFileTypes)) {
        echo "Seules les images aux formats JPG, JPEG, PNG GIF eT WEBP sont autorisées.";
        $imageok3= false;
        }
        //Photo4
        
        $targetFile4 = $repertoire . basename($_FILES["Photo4"]["name"]);
        $imageFileType4 = strtolower(pathinfo($targetFile3, PATHINFO_EXTENSION));

        
        $image_tmp_name4 = $_FILES['Photo4']['tmp_name'];  
        $image_error4 = $_FILES['Photo4']['error']; 

        if($_FILES["Photo4"]["size"] > $tailleMax) {
            echo "Le fichier est trop volumineux.";
            $imageok4= false;
        }
        
        $fileMime4 = mime_content_type($_FILES["Photo4"]["tmp_name"]);
        if (!in_array($fileMime4, $mimeautorises)) {
        echo "Ce type de fichier n’est pas autorisé";
        $imageok4= false;
        }
        
        
        if (!in_array($imageFileType4, $allowedFileTypes)) {
        echo "Seules les images aux formats JPG, JPEG, PNG, GIF et WEBP sont autorisées.";
        $imageok4= false;
        }

        if ($image_error1 === 0 && $image_error2 === 0 && $image_error3 === 0 && $image_error4 === 0 && $imageok1 === true && $imageok2 === true && $imageok3 === true && $imageok4 === true) {

            
            $destination1 = $targetFile1;   
            move_uploaded_file($image_tmp_name1, $destination1);

            $destination2 = $targetFile2;  
            move_uploaded_file($image_tmp_name2, $destination2);

            $destination3 = $targetFile3;
            move_uploaded_file($image_tmp_name3, $destination3);

            $destination4 = $targetFile4;  
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


// utiliserl es fonction uniqid() et rename()

