<?php
        require_once 'baglan.php'
?>


<?php

        
if(isset($_POST['bilgiekle'])){
        $bilgiekle=$baglanti->prepare("INSERT INTO bilgiler SET 
                ad=:ad,
                soyad=:soyad
        ");

        $insert=$bilgiekle->execute(array(
                "ad"=>$_POST['isimekle'],
                "soyad"=>$_POST['soyadekle']
        ));

        if($insert){
                echo "Kayıt başarıyla tamamlandı";
        }else{
                 echo "Kayıt başarısız";
        }
}

if(isset($_POST['bilgiduzenle'])){
        $bilgiekle=$baglanti->prepare("UPDATE   bilgiler SET 
                ad=:ad,
                soyad=:soyad
                where id={$_POST['bilgiEditle']}
        ");

        $update=$bilgiekle->execute(array(
                "ad"=>$_POST['isimduzenle'],
                "soyad"=>$_POST['soyaduzenle']
        ));

        if($update){
                echo "Kayıt başarıyla tamamlandı";
        }else{
                 echo "Kayıt başarısız";
        }
}




if(isset($_POST['idBilgi'])){
        $sil = $baglanti->prepare("DELETE from bilgiler where id=:id");
        $kontrol = $sil->execute(array(
                'id'=>$_POST['idBilgi'] //Postten gelen idli bilgiyi sil
        ));
        

}




?>




