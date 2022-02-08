<?php require_once "baglan.php";

         $bilgisor=$baglanti->prepare("SELECT * from bilgiler where id=:id");
        $bilgisor->execute(array(
                'id'=>$_POST['idBilgi'] //idye göre güncelle 
        ));

        $bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC);
      


        $array=array(
                "ad" =>$bilgicek['ad'],
                "soyad" =>$bilgicek['soyad'],
                 'id'=> $bilgicek['id']
        );

        echo $json = json_encode($array);

 ?>


