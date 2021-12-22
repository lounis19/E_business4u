<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../css/carou.scss">
  
  <style>
.FT-nav{
  list-style-type:none;
  
}
.FT{
  text-align:center;
}
.FT p{
  color:black;
  border-bottom:2px solid coral;
}
.FT-nav li img{
  border: 2px solid tomato;
  border-radius:10px;
  width:120px;
   height:120px;
}

.card-text{
  text-align:center;
}
.card-title{
  text-align:center; 
}
.card{
  background-color: #0D1836;
  color:white;
}
    </style>
</head>

<body>

- var i = 1
- var j = 1
- var limit = 10

.section.section-project

	h2.section__title Project Carousel
	small.section__subtitle 
		| A simple Synchronised carousel by 
		a(href="https://codepen.io/ariona") @ariona_rian
		br
		| using Slick Carousel
	
	.project-carousel
	
		.project-strip
		
			while i++ < limit
				.project
					img(src="http://unsplash.it/578/360/?image=" + i * 13 + "&blur", alt="")


		.project-screen
		
			.project-detail
			
				while j++ < limit
					.project
						img(src="http://unsplash.it/578/361/?image=" + j * 13 , alt="")
				
			.screen-frame


<ul class="FT-nav" >
<div class="row" style="float:left;width:50%">
<div class="col" style="float:left">  
  <li class="FT"><a href="" onclick="javascript:visibilite('F1'); return false;">
    <p>L'opportunité du numérique</p>
  </a></li>

  <li class="FT"><a href="" onclick="javascript:visibilite('F2'); return false;">
  <p>Des templates pour votre site vitrine</p>
  </a></li>

  <li class="FT"><a href="" onclick="javascript:visibilite('F3'); return false;">
  <p>Tableau de bord</p>
  </a></li>

  <li class="FT"><a href="" onclick="javascript:visibilite('F4'); return false;">
  <p>Offres et des opportunités ciblées</p>
  </a></li>
</div>
  <div class="col" style="float:left">  
  <li class="FT"><a href="" onclick="javascript:visibilite('F5'); return false;">
  <p>Une intégration dans la plus grande plateforme de Jobbing au monde</p>
  </a></li>
  <!--------------->
  
  <li class="FT"><a href="" onclick="javascript:visibilite('F6'); return false;">
  <p>Ambassadeur </p>
  </a></li>

  <li class="FT"><a href="" onclick="javascript:visibilite('F7'); return false;">
  <p>bénéficiez grace a vous  fournisseurs </p>
  </a></li>
  
  <li class="FT"><a href="" onclick="javascript:visibilite('F8'); return false;">
  <p>bénéficiez de 1...%</p>
  </a></li>
</div>
  <div class="col" style="float:left">  
  <li class="FT"><a href="" onclick="javascript:visibilite('F9'); return false;">
  <p>Un nom de domaine gratuit </p>
  </a></li>

  <li class="FT"><a href="" onclick="javascript:visibilite('F10'); return false;">
  <p>Formations marketing...</p>
  </a></li>

  <li class="FT"><a href="" onclick="javascript:visibilite('F11'); return false;">
  <p>Business card</p>
  </a></li>

  <li class="FT"><a href="" onclick="javascript:visibilite('F12'); return false;">
  <p>bénéficiez d'un montant de 1 0...</p>
  </a></li>
</div>
  <div class="col" style="float:left">  
  <li class="FT"><a href="" onclick="javascript:visibilite('F13'); return false;">
  <p>bénéficiez d'un montant de 2 5...</p>
  </a></li>
</div>
</div>
</ul>





<div id="F1" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_1.png"  height="300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">L'opportunité du numérique s'offre à vous</h5>
      <p class="card-text">Une identité digitale pour votre business. Permettez à vos clients de vous trouver sur le web en y inscrivant votre business</p>
      
    </div>
  </div>
</div>

<div id="F2" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_5.gif" height="300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Des templates pour votre site vitrine</h5>
      <p class="card-text">Déployez votre site vitrine en personnalisant un des templates de sites vitrines mis à votre disposition</p>
 
    </div>
  </div>
</div>
 

<div id="F3" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_2.png" height="300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Un tableau de bord pour vous aider à atteindre vos objectifs</h5>
      <p class="card-text">Un outil de gestion, il vous permettra de suivre vos données pertinentes sous forme de chiffres, ratios et de graphiques</p>
      
    </div>
  </div>  
</div>

<div id="F4" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_4.png" height="300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Une veille sur des offres et des opportunités ciblées</h5>
      <p class="card-text">Suivant votre profil, votre domaine d'activité et vos intérêts, vous serez notifiés exclusivement des nouvelles opportunités du marché</p>
      
    </div>
  </div>   
</div>

<div id="F5" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_3.png" height="300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Une intégration dans la plus grande plateforme de Jobbing au monde</h5>
      <p class="card-text">Vous bénéficiez d'une intégration immédiate dans ce qui est entrain de devenir la plus grande plateforme de Jobbing au monde</p>
 
    </div>
  </div>  
</div>

<div id="F6" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_6.png" height="300px" alt="Card image cap">
    
      <p class="card-text">vous serez automatiquement Ambassadeur dans nos prochaines start-up gratuitement.</p>
    </div>
  </div>    
</div>

<div id="F7" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_7.png" height="300px" alt="Card image cap">
   
      <p class="card-text">
        Vous bénéficiez de 15 % de nos commissions sur chaque projet exécuté par vos fournisseurs pour une durée indéterminée.</p>
      
    </div>
  </div>    
</div>


<div id="F8" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_8.png" height="300px" alt="Card image cap">
      <p class="card-text">Vous bénéficiez de 15% de notre commission sur chaque projet intégré par votre lien ou site Web.</p>
      
    </div>
  </div>    
</div>

<div id="F9" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_9.png" height="300px" alt="Card image cap">

      <p class="card-text">Un nom de domaine gratuit en .com et des outils marketing incontournables.</p>
      
    </div>
  </div>    
</div>

<div id="F10" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_10.png" height="300px" alt="Card image cap">
    
      <p class="card-text">Nous vous offrons gratuitement des Formations marketing et séminaires pour bien mener la fonction ambassadeur.</p>
    </div>
  </div>    
</div>

<div id="F11" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_11.png" height="300px" alt="Card image cap">
    
      <p class="card-text">1000 cartes de visite personnalisées avec vos coordonnés afin de développer votre crédibilité.</p>
      
    </div>
  </div>    
</div>

<div id="F12" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_12.png" height="300px" alt="Card image cap">

      <p class="card-text">Vous bénéficiez d'un montant de 10 000 DZD pour chaque fournisseur de votre équipe qui se transforme en ambassadeur.</p>
      
    </div>
  </div>    
</div>

<div id="F13" class="Element" style="float:right;width:40%"><br>
<div class="card" style="width:18rem" >
    <img class="card-img-top" src="../img_animé/img_13.png" height="300px" alt="Card image cap">
   
      <p class="card-text">Vous bénéficiez d'un montant de 2 500 DZD pour chaque fournisseur qui se transforme en ambassadeur deuxième niveau ( ambassadeur de votre ambassadeur).</p>
      
    </div>
  </div>    
</div>
  <!------------------------->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js" integrity="sha512-4xtXZGcbxYKcswaOVR0Z1MVVpaqAs/bZ2qUCkbVpRmLnZqeLnoEP9J771P8KYJ5Ol8FNtj0qnQ/KhlQifrY7FA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  function visibilite(thingId){
    var targetElement;
    var elements;
    targetElement = document.getElementById(thingId) ;
     
    // recupere tous les elements ayant pour nom de classe "Element"
    elements = document.getElementsByClassName("Element")
   
    // parcoure tous ces elements et les cache
    
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.display = "none" ;
    }
      
    
  
    //affiche uniquement l element selectionné
    if (targetElement.style.display == "none") {
            targetElement.style.display = "" ;
    }
}
</script>
<script>
$(".project-detail").slick({
	slidesToShow: 1,
	arrows: false,
	asNavFor: '.project-strip',
	autoplay: true,
	autoplaySpeed: 3000
});

$(".project-strip").slick({
	slidesToShow: 5,
	slidesToScroll: 1,
	arrows: false,
	asNavFor: '.project-detail',
	dots: false,
	infinite: true,
	centerMode: true,
	focusOnSelect: true
});
    </script>

</html>
