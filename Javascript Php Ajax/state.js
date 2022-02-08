$().ready(function(){

       /*********************************************************** HTML DOM İŞLEMLERİ ******************************************************************* */

      
       $('#item-list').load("veriler.php")

       $('#yenikayit').click(function(){
                $('#item-list').fadeOut(500);
                $('#kayitEkle').fadeIn(3000);
       })

         $('#duzenle').click(function(){
                $('#item-list').fadeOut(500);
                $('#kayitEkle').fadeOut(3000);
                $('#kayitDuzenle').fadeIn(3000);
       })


       /************************************************************V E R İ   E K L E  ******************************************************************* */

       $('#bilgiekle').click(function(e){
   
        if($("#isimekle").val()== "" ||  $("#soyadekle").val() == ""){
                $('#bosalan').fadeIn(100);
                  $("#basariliAlan").fadeOut(100)
                 e.preventDefault();
         }else{
                 $('#bosalan').fadeOut(100);
                $.ajax({
                       
                        type:"post",
                        url:"islem.php",
                        data:$("#jqueryekle").serialize(), //form verilerini yolla
                        success:function(response){
                                $("#basariliAlan").fadeIn(100).text(response)   
                                $('#item-list').load("veriler.php");     

                                $("#isimekle").val("") ,
                                $("#soyadekle").val("")  
                             
                        }
                })
         }
       
       })       

       $("#geridon").click(function(){
           $('#item-list').fadeIn(500);  
           $('#kayitEkle').fadeOut(500);
       
       })


       /************************************************************V E R İ  S İ L     ******************************************************************* */

       $('body').on("click",".sil",function(){
                var idBilgi = $(this).attr("id"); //attr ile istenilen özelligi al
                
            
                        $.ajax({
                                type:"post",
                                url:"islem.php",
                                data:{'idBilgi':idBilgi}, //Gelen idyi obje olarak pasla
                                success:function(response){
                                $('#item-list').load("veriler.php");     
                                }
                        })
                
                
       })

       /************************************************************V E R İ  Ç E K  JSON Y A R D I M I Y L A    ******************************************************************* */
     
       $('body').on("click",".duzenle",function(){
                var idBilgi = $(this).attr("id"); //attr ile istenilen özelligi al

                $("#item-list").hide()
                $("#kayitDuzenle").fadeIn(500)

                $.ajax({
                        type:"post",
                        url:"duzenle.php",
                        data:{'idBilgi':idBilgi},
                        success:function(duzenleCevap){
                                   //     $('#isimduzenle').val(duzenleCevap)

                                   var obj = JSON.parse(duzenleCevap);
                                   $("#isimduzenle").val(obj.ad)
                                    $("#soyaduzenle").val(obj.soyad)
                                    $('#idBilgi').val(idBilgi)

                        }
                })
       })








       /*****************V E R İ  G U N C E L L E ************ */
              $('#guncelle').click(function(e){
   
                $.ajax({
                       
                        type:"post",
                        url:"islem.php",
                        data:$("#jqueryDuzenle").serialize(), //form verilerini yolla
                        success:function(response){
                                $("#basariliAlanDuzenle").fadeIn(100).text(response)   
                                $('#item-list').load("veriler.php"); 

                             
                        }
                })
         
       
       })       
       
})