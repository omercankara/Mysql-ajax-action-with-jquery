<!DOCTYPE html>
<?php require_once "baglan.php"; ?>

<?php
        $bilgisor=$baglanti->prepare("SELECT * from bilgiler order by id DESC");
        $bilgisor->execute();
?>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <table class="table">
  <thead>
    <tr>
       <th scope="col">#</th>
       <th scope="col">İd</th>
       <th scope="col">İsim</th>
       <th scope="col">Soy İsim</th>
        <th scope="col">Duzenle</th>
        <th scope="col">Sil</th>
    </tr>
  </thead>
  <tbody>
        <?php
                while($bilgicek = $bilgisor->fetch(PDO::FETCH_ASSOC)){
                
              
        ?>
    <tr>
      <th scope="row">1</th>
         <td><?php echo $bilgicek['id']?></td>
         <td><?php echo $bilgicek['ad']?></td>
         <td><?php echo $bilgicek['soyad']?></td>
         <td><button id="<?php echo $bilgicek['id']?>" class="btn btn-success duzenle">Düzenle</button></td>
         <td><button class="btn btn-danger sil" id="<?php echo $bilgicek['id']?>">Sil</button></td>
    </tr>
  <?php } ?>
  </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>