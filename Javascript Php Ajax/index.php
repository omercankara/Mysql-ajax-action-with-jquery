<!DOCTYPE html>

<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container">
        <h1 class="text-center">JQuery Crud İşlemleri</h1>
        <hr><button id="yenikayit" class="btn btn-success mb-4">Yeni Kayıt Oluştur</button>
        
        <div id="item-list"> </div>

<div id="kayitEkle" class="mt-4">    
<h3>Yeni Kayıt Oluştur</h3>
<hr>

        <form method="post" id="jqueryekle">
        <div id="bosalan" class="alert alert-danger">
                   Boş alan bırakamazsınız
        </div>
        <div id="basariliAlan" class="alert alert-success">
                   Kayıt işlemi başarıyla tamamlanmıştır.
        </div>
                <div class="form-group">
                            <label>Adınız</label>     
                            <input type="text" name="isimekle" id="isimekle" class="form-control">
                </div>
                 <div class="form-group">
                            <label>Soy adınız</label>     
                            <input type="text" name="soyadekle" id="soyadekle" class="form-control">
                </div>
                         <td><button id="bilgiekle" type="button" class="btn btn-success">Kayıt Ekle</button></td>
                        <td><button id="geridon" type="button" class="btn btn-danger">Geri Dön</button></td>

                         <input type="hidden" name="bilgiekle">
        </form>
</div>



<div id="kayitDuzenle" class="mt-4">    
<h3> Kayıt Düzenle</h3>
<hr>
     
        <form method="post" id="jqueryDuzenle">
        <div id="bosalan" class="alert alert-danger">
                   Boş alan bırakamazsınız
        </div>
        <div id="basariliAlanDuzenle" class="alert alert-success">
                  
        </div>
                <div class="form-group">
                            <label>Adınız</label>     
                            <input type="text" name="isimduzenle" id="isimduzenle" class="form-control" value="">
                </div>
                 <div class="form-group">
                            <label>Soy adınız</label>     
                            <input type="text" name="soyaduzenle" id="soyaduzenle" class="form-control" value="">
                </div>
                         <td><button id="guncelle" name="guncelle" type="button" class="btn btn-success">Kayıt Güncelle</button></td>
                        <td><button id="geridon" type="button" class="btn btn-danger">Geri Dön</button></td>
                        <input type="hidden" name="bilgiduzenle">

                         <input id="idBilgi" type="hidden" name="bilgiEditle">
        </form>
      
</div>


</div>
<style>
 #kayitEkle{
        display:none;
 }

 #kayitDuzenle{
        display:none;
 }
 #bosalan{
        display:none;
 }
 #basariliAlan{
        display:none;
 }
</style>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="state.js"></script>
</body>
</html>