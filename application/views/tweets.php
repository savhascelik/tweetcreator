<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta charset="utf-8">
  <title>Hızlı Tweet (@savhascelik)</title>
 

</head>
<body class="container" >
<?php ?>


<script type="text/javascript">
var a=0;
    
    window.onload= function( ) {
    a+=1;
        var data =<?php echo json_encode($data_excell); ?>;
        var hashtag=<?php echo json_encode($hashtag); ?>;
 //alert(hashtag);
   //console.log(data);
   
        var msg=data[Math.floor(Math.random()*data.length)][0]+" "+data[Math.floor(Math.random()*data.length)][1];
       document.getElementById('exampleFormControlTextarea1').value= (msg+" "+hashtag);
       
       document.getElementById('say').innerHTML+=document.getElementById('exampleFormControlTextarea1').value.length;
       document.getElementById('url').href= "https://twitter.com/intent/tweet?text="+encodeURIComponent(document.getElementById('exampleFormControlTextarea1').value);
     
      }
      
   
   


 </script>


<div  class="text-center"  style="font-size:15px;">

<br>
<div class="alert alert-primary" role="alert">
 Hızlı Tweet. Önceden hazırlanmış cümlelerden rastgele tweet üretir!!!
</div>
<br>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Tweet Metni</span>
  </div>
  <textarea disabled class="form-control" id="exampleFormControlTextarea1" rows="6" style="background-color:white"></textarea>

 </div>
 <div class="alert alert-danger" role="alert">
	 <b>Lütfen metni okuyup tweetleyiniz sorumluluk kabul edilmemektedir.</b>
</div>
 
 <div><b><p id="say"> Tweet karakter uzunluğu:  </p></b></div>
 <div><b><p id="tweetsay">Üretilen toplam tweet:  <?php echo ($tweetsay); ?></b></p></div>
 <div>
  <a class=" btn btn-success justify-content-center" id="url" href="#" onclick="window.location.reload()">Tweetle</a>
  </div>
  <br>
  

</div>


<div style="font-size:11px;" >
  <ul class="list-group" >
  <li class="list-group-item active">Gündem olabilme şartları (Yaklaşık) </li>
  <li class="list-group-item">En az 800 kişi  bir saatte  aynı #hashtag'e tweet atarsa ülke gündemi mümkün</li>
	   <li class="list-group-item">Atılan tweetlere yorum beğeni ve RT de çokönemli ama önce aynı olay üzerinde konuşan insan sayısı artmalı</li>
  <li class="list-group-item">Daha önce konuşulmayan bir konu seçilmeli ki tweeter algoritması konuyu yakalasın</li>
  <li class="list-group-item">Daha sakin bir bir zaman dilmi seçilmeli gündem isteniyorsa saat 19:00 civarı başlanabilir</li>
  
</ul>
</div>
	<div class="alert alert-primary" role="alert">
@savhascelik 
</div>
	
	<div>   


<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script> 


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
