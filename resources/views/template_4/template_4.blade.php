<!Doctype html>
<html dir="rtl">
<head>

<title>template_4</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!--bootstrap 4-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<!--wow.js-->
<link rel="stylesheet" href="../css/animate.css">

<link rel="stylesheet" href="../css/ess.css">
<link rel="stylesheet" href="../css/cards.css">
<link rel="stylesheet" href="../css/car.css">

<link rel="stylesheet" href="../css/card_sp.css">



<link rel="stylesheet" href="../css/template_4.css">

</head>


<body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">

<div id="contenue">
<!-- nav -->
<div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="#"><img  src="../images/logo-ebusiness.png" width="180px" height="30px"> </a>
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation" style="background-color:#0A3172;color: #0A3172;">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse " id="navbarSupportedContent" style="color:dark;">
        
          <ul class="navbar-nav mr-auto ">
          <li class="nav-item"><a class="nav-link " href="temp">{{__("message.Accueil")}}</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
              {{__("message.Nos startup")}}</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">{{__("message.b")}}</a>
                <a class="dropdown-item" href="#">{{__("message.a")}}</a>
                <a class="dropdown-item" href="#">{{__("message.PHP et MySQL")}}</a>
              </div>
            </li>
            <!--<li class="nav-item"><a class="nav-link " href="#">{{__("message.Réalisations")}}</a></li>-->
            <li class="nav-item"><a class="nav-link " href="propos">{{__("message.A propos")}}</a></li>
            <li class="nav-item"><a class="nav-link " href="contact">{{__("message.Contactez-nous")}}</a></li>
            
           <li>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav">
                    <!-- Authentication Links -->
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                            @case('ar')
                                <img src="{{asset('../icons/flag/algeria.png')}}" width="20px" height="20px"> {{__("message.Arabe")}}
                                @break
                                @case('fr')
                                <img src="{{asset('../icons/flag/france.png')}}" width="20px" height="20px"> {{__("message.Français")}}
                                @break
                                
                                @default
                                <img src="{{asset('../icons/flag/france.png')}}" width="20px" height="20px"> Français

                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="lang/fr"><img src="{{asset('../icons/flag/france.png')}}" width="20px" height="20px"> {{__("message.Français")}}</a>
                            <a class="dropdown-item" href="lang/ar"><img src="{{asset('../icons/flag/algeria.png')}}" width="20px" height="20px"> {{__("message.Arabe")}}</a>
                        </div>
                    </li>
                </ul>
           </div>   
</li>
          </ul>
   
              </div>
            </nav>
      </div>
<!--fin nav-->
</div>

<!--corps-->


<div id="header">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item" style="text-align:center;color:white">
      <h1 id="title">E-Business4u</h1>
      <p id="txt_1">{{__("message.Du développement d’App au marketing et au design de votre service.")}}<br>
      {{__("message.Un accompagnement de A à Z avec votre expert E-business4U.")}}</p>
    </div>

    <div class="carousel-item" style="text-align:center;color:white">
    <h1 id="title_2">E-Business4u</h1>
      <p id="txt_2">{{__("message.vient de se lancer dans sa première expérience de startup")}} <br>
      {{__("message.dans le domaine du Jobbing qui va être la plus grande plateforme au monde")}}<br>
       {{__("message.en adaptant la technique de Growth hacking.")}}</p>
    </div>

    <div class="carousel-item active" >
<div class="container">
  <div class="row" style="position:relative">
    <div class="col-sm" id="pc">
    <img  src="../img_animé/laptop.png" width="600px" height="300px" alt="Third slide">
    </div>
    <div class="col-sm" id="logo_txt">
    <p>E-Business4u </p>
    </div>
    <div class="col-sm" id="loop" >
    <img  src="../img_animé/loop.png" width="200px" height="200px" alt="Third slide">
    </div>
  </div>
</div>
    </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div id="definition"  >
<h2 class="wow animate__animated animate__fadeInRight">{{__("message.Qui sommes nous?") }}</h2>

<p id="def" class="wow animate__animated animate__fadeInLeft">
{{__("message.L’entreprise E-business4u est l’abréviation de")}}
    <b>{{__("message.« travail électronique, en ligne pour vous!»")}}</b>
    {{__("message.Une idée de plusieurs années s'est concrétisée en janvier 2021. Elle a pour objectif de se 
positionner comme incubateur de plusieurs start-up. Grâce à notre équipe performante , 
E-business4u vient de se lancer dans sa première expérience de startup dans le domaine 
du Jobbing qui va être la plus grande plateforme au monde en adaptant la technique de 
Growth hacking.")}} </p><br>

</div>
<br><br>

 <!--------------------------->
 <div id="container">
        
        <div class="card-container">
            <input type="radio" name="colors-btn" id="color-1" checked>
            <input type="radio" name="colors-btn" id="color-2">
            <input type="radio" name="colors-btn" id="color-3">
            <input type="radio" name="colors-btn" id="color-4">
            <div class="shoe-area">
                
                    <div class="logo-div">
                        <img src="https://github.com/gerrardNwoke/Prdouct-Card/blob/main/Shoe-product-card/imgs/nike-logo.png?raw=true" alt="">
                    </div>
                    <div class="floating-div">
                    <div class="shoe-1"><img src="../images/ebs_1.jpg" alt="red-nike" >
                  <p>voila mon am pour le dilece</p></div>
                    <div class="shoe-2"><img src="https://github.com/gerrardNwoke/Prdouct-Card/blob/main/Shoe-product-card/imgs/orange-nike.png?raw=true" alt="orange-nike"></div>
                    <div class="shoe-3"><img src="https://github.com/gerrardNwoke/Prdouct-Card/blob/main/Shoe-product-card/imgs/white.png?raw=true" alt="white-nike"></div>
                    <div class="shoe-4"><img src="https://github.com/gerrardNwoke/Prdouct-Card/blob/main/Shoe-product-card/imgs/black-nike.png?raw=true" alt="black-nike"></div>
                    </div>

            </div>
            <div class="text-area">
                <div class="heading-area">
                    <h2>Jordan Proto-Lyte</h2>
                    <h4>Running Collection</h4>
                </div>

                    <p class="paragraph-area">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, rerum asperiores error omnis pariatur sequi placeat quia fuga ullam. Harum obcaecati suscipit illum similique excepturi voluptates quae deserunt tempore, distinctio architecto ipsum dolor laboriosam inventore impedit nostrum totam eaque sed est? Non rem repudiandae, vitae iure suscipit pariatur, cum esse sequi cumque saepe commodi reprehenderit quaerat. Quasi ipsam repellendus similique
                    </p>

                <div class="color-selection">
                    <div class="h5-text"><h5>Available Colors: </h5></div>
                    
                    <div class="color-pick-div">
                        <label for="color-1" class="colors color-1"></label>
                        <label for="color-2" class="colors color-2"></label>
                        <label for="color-3"class="colors color-3" ></label>
                        <label for="color-4" class="colors color-4"></label>
                    </div>
                </div><!--
                <div class="price-and-buy-btn">
                    <h2 class="price-1">$ 854.75</h2>
                    <h2 class="price-2">$ 824.15</h2>
                    <h2 class="price-3">$ 914.38</h2>
                    <h2 class="price-4">$ 884.12</h2>
                    <button class="buy-btn">BUY NOW</button>
                </div>-->
            </div>
        </div>
    </div> 
<!-----
    </br>
<div class="card-deck">
  <div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_1.png"  height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">L'opportunité du numérique s'offre à vous</h5>
      <p class="card-text">Une identité digitale pour votre business. Permettez à vos clients de vous trouver sur le web en y inscrivant votre business</p>
      
    </div>
  </div>
  <div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_5.gif" height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Des templates pour votre site vitrine</h5>
      <p class="card-text">Déployez votre site vitrine en personnalisant un des templates de sites vitrines mis à votre disposition</p>
 
    </div>
  </div>
  <div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_2.png" height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Un tableau de bord pour vous aider à atteindre vos objectifs</h5>
      <p class="card-text">Un outil de gestion, il vous permettra de suivre vos données pertinentes sous forme de chiffres, ratios et de graphiques</p>
      
    </div>
  </div>
</div>
<br><br>
<div class="card-deck" style="width:60%;margin-left:20%">
  <div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_4.png" height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Une veille sur des offres et des opportunités ciblées</h5>
      <p class="card-text">Suivant votre profil, votre domaine d'activité et vos intérêts, vous serez notifiés exclusivement des nouvelles opportunités du marché</p>
      
    </div>
  </div>
  <div class="card" style="width:18rem">
    <img class="card-img-top" src="../img_animé/img_3.png" height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Une intégration dans la plus grande plateforme de Jobbing au monde</h5>
      <p class="card-text">Vous bénéficiez d'une intégration immédiate dans ce qui est entrain de devenir la plus grande plateforme de Jobbing au monde</p>
 
    </div>
  </div>
 
</div>
<br>-->
 <!------------------------->

<!--
<div class='caroussel_diapo'>
<input checked id="carou_un" name="rotation" type="radio">
<label for="carou_un"></label>
<input id="carou_deux" name="rotation" type="radio">
<label for="carou_deux"></label>
<input id="carou_trois" name="rotation" type="radio">
<label for="carou_trois"></label>
<input id="carou_quatre" name="rotation" type="radio">
<label for="carou_quatre"></label>
<input id="carou_cinq" name="rotation" type="radio">
<label for="carou_cinq"></label>
<input id="carou_six" name="rotation" type="radio">
<label for="carou_six"></label>
<input id="carou_sept" name="rotation" type="radio">
<label for="carou_sept"></label>
<input id="carou_huit" name="rotation" type="radio">
<label for="carou_huit"></label>
<div class="contenu_carou">
<div class="caroussel">
<img src="../images/ebs_1.jpg" alt="err" width="350px" height="300px">
<img src="../images/ebs_2.jpg" alt="err" width="350px" height="300px">
<img src="../images/ebs_3.jpg" alt="err" width="350px" height="300px">
<img src="../images/ebs_4.jpg" alt="err" width="350px" height="300px">
<img src="../images/ebs_5.jpg" alt="err" width="350px" height="300px">
<img src="../images/ebs_6.jpg" alt="err" width="350px" height="300px">
<img src="../images/ebs_1.jpg" alt="err" width="350px" height="300px">
<img src="../images/ebs_1.jpg" alt="err" width="350px" height="300px">
</div>
</div>
</div>
    -->
<h1 style="color:white;text-align:center; font-family:FORTE;text-shadow: 0.1em 0.1em coral">HEWESLI notre premier startup en ligne</h1>    

<table class="table" style="color:dark;">

 
    <!--   <tr>
    
 <ul  class="FT-nav"  >
    
  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F1'); return false;">
   <p>L'opportunité du numérique</p>
    <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>

  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F2'); return false;">
  <p>Des templates pour votre site vitrine</p>
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>

  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F3'); return false;">
  <p>Tableau de bord</p>
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>

  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F4'); return false;">
  <p>Offres et des opportunités ciblées</p>
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>
</div>
  <div class="col" style="float:left"> 
  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F5'); return false;">
  <p>Une intégration dans la plus grande plateforme de Jobbing au monde</p>
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>

  
  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F6'); return false;">
  <p>Ambassadeur </p>
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>
    -->
<!--
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
 
  <li class="FT"><a href="" onclick="javascript:visibilite('F13'); return false;">
  <p>bénéficiez d'un montant de 2 5...</p>
  </a></li>
    -->
<!--
</div>
</ul>

</tr>-->
 <tr style="background-color: #0D1836;">
    
    
<div id="F1" class="Element"  ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_1.png"  height="300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">L'opportunité du numérique s'offre à vous</h5>
      <p class="card-text">Une identité digitale pour votre business. Permettez à vos clients de vous trouver sur le web en y inscrivant votre business</p>
      
    </div>
  </div><br>
</div>
   
<div id="F2" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_5.gif" height="300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Des templates pour votre site vitrine</h5>
      <p class="card-text">Déployez votre site vitrine en personnalisant un des templates de sites vitrines mis à votre disposition</p>
 
    </div>
  </div><br>
</div>
   

<div id="F3" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_2.png" height="300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Un tableau de bord pour vous aider à atteindre vos objectifs</h5>
      <p class="card-text">Un outil de gestion, il vous permettra de suivre vos données pertinentes sous forme de chiffres, ratios et de graphiques</p>
      
    </div>
  </div> <br> 
</div>

<div id="F4" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_4.png" height="300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Une veille sur des offres et des opportunités ciblées</h5>
      <p class="card-text">Suivant votre profil, votre domaine d'activité et vos intérêts, vous serez notifiés exclusivement des nouvelles opportunités du marché</p>
      
    </div>
  </div> <br>  
</div>

<div id="F5" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_3.png" height="300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Une intégration dans la plus grande plateforme de Jobbing au monde</h5>
      <p class="card-text">Vous bénéficiez d'une intégration immédiate dans ce qui est entrain de devenir la plus grande plateforme de Jobbing au monde</p>
 
    </div>
  </div><br>  
</div>

<div id="F6" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_6.png" height="300px" alt="Card image cap">
    
      <p class="card-text">vous serez automatiquement Ambassadeur dans nos prochaines start-up gratuitement.</p>
    </div>
  </div><br>    
</div>

<div id="F7" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_7.png" height="300px" alt="Card image cap">
   
      <p class="card-text">
        Vous bénéficiez de 15 % de nos commissions sur chaque projet exécuté par vos fournisseurs pour une durée indéterminée.</p>
      
    </div>
  </div>  <br>  
</div>


<div id="F8" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_8.png" height="300px" alt="Card image cap">
      <p class="card-text">Vous bénéficiez de 15% de notre commission sur chaque projet intégré par votre lien ou site Web.</p>
      
    </div><br>
  </div>    


<div id="F9" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_9.png" height="300px" alt="Card image cap">

      <p class="card-text">Un nom de domaine gratuit en .com et des outils marketing incontournables.</p>
      
    </div><br>
  </div>    


<div id="F10" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_10.png" height="300px" alt="Card image cap">
    
      <p class="card-text">Nous vous offrons gratuitement des Formations marketing et séminaires pour bien mener la fonction ambassadeur.</p>
    </div><br>
  </div>    


<div id="F11" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top" src="../img_animé/img_11.png" height="300px" alt="Card image cap">
    
      <p class="card-text">1000 cartes de visite personnalisées avec vos coordonnés afin de développer votre crédibilité.</p>
      
    </div><br>
  </div>    


<div id="F12" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;">
    <img class="card-img-top card-sm" src="../img_animé/img_12.png" height="300px" alt="Card image cap">

      <p class="card-text card-sm">Vous bénéficiez d'un montant de 10 000 DZD pour chaque fournisseur de votre équipe qui se transforme en ambassadeur.</p>
      
    </div><br>
  </div>    


<div id="F13" class="Element" ><br>
<div class="card card-sm" style="width:60%;left:20%;" >
    <img class="card-img-top" src="../img_animé/img_13.png" height="300px" alt="Card image cap">
   
      <p class="card-text">Vous bénéficiez d'un montant de 2 500 DZD pour chaque fournisseur qui se transforme en ambassadeur deuxième niveau ( ambassadeur de votre ambassadeur).</p>
      
    </div><br>
  </div>    
    
  <!------------------------->
   
  


    
    
    </tr>
<tr>
<td style="width:30%"></td>
<td style="width:30%">
<ul style="list-style-type:none;left:20%">
  
  
<li class="FT" style="float:left;" ><a href="" onclick="javascript:visibilite('F1'); return false;">
    <!--<p>L'opportunité du numérique</p>-->
    <div style="width:30px;height:30px;border-radius:50%;background:coral;"></div>
  </a></li>

  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F2'); return false;">
  <!--<p>Des templates pour votre site vitrine</p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>

  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F3'); return false;">
  <!--<p>Tableau de bord</p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>

  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F4'); return false;">
  <!--<p>Offres et des opportunités ciblées</p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li><!--
</div>
  <div class="col" style="float:left"> --> 
  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F5'); return false;">
  <!--<p>Une intégration dans la plus grande plateforme de Jobbing au monde</p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>
  <!--------------->
  
  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F6'); return false;">
  <!--<p>Ambassadeur </p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>
<li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F7'); return false;">
  <!--<p>bénéficiez grace a vous  fournisseurs </p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>
  
  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F8'); return false;">
  <!--<p>bénéficiez de 1...%</p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>
   
  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F9'); return false;">
  <!--<p>Un nom de domaine gratuit </p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>

  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F10'); return false;">
  <!--<p>Formations marketing...</p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>

  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F11'); return false;">
  <!--<p>Business card</p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>

  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F12'); return false;">
  <!--<p>bénéficiez d'un montant de 1 0...</p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral"></div>
  </a></li>
 
  <li class="FT" style="float:left"><a href="" onclick="javascript:visibilite('F13'); return false;">
  <!--<p>bénéficiez d'un montant de 2 5...</p>-->
  <div style="width:30px;height:30px;border-radius:50%;background:coral;"></div>
  </a></li>

   
</ul> </td> 
<td style="width:30%"></td> 
   </tr>

    
    </table>
   
<!--footer-->


<div id="footer">

<div class="row" >

<div class="col" style="text-align: center;margin-top: 4%">
{{__("message.Pour les questions avant-vente, les problèmes de RH et les relations commerciales veuillez envoyer un e-mail à")}} contact@e-business4u.com
 </div>

 <div class="col" style="text-align: center; margin-top:5%">
 <img src="../images/logo-ebusiness.png" alt="erreur" width="200px" height="100px">
 <p>contact@e-business4u.com<br>EBusiness4U RCN:06/00 - 1000874A18</p>
 </div>

 <div class="col" style="text-align: center; margin-top:5%">
 {{__("message.BUREAU DE L’ADMINISTRATION")}}<br>
{{__("message.Sidi Ali Labhar Bloc A2")}}<br>
{{__("message.Lots № 07 Béjaïa 06000")}}

<div class="row" style="width:100%">
  <div class="col cols-md-6 g-6" style="width:50%">
<p><b>034</b> 18 10 50</p>
<p><b>05</b> 54 04 05 98</p>
 </div>
<div class="col cols-md-6 g-6" style="width:50%">
<p><b>06</b> 56 66 21 89</p>
<p><b>07</b> 95 59 27 13</p>
 </div>
 </div><!--row-->
 </div>
 </div>
<div>
 </div>
 
 <div id="rsx">
        <a href="https://www.facebook.com/ebusiness4u/"> <img src="../icons/fbk.png" alt="er" width="25px" height="25px"></a>
        <a href="https://www.instagram.com/ebusiness4udz/"> <img src="../icons/insta.png" alt="er" width="25px" height="25px"></a>
        <a href="https://twitter.com/AbdelhalimMokr2"> <img src="../icons/twitte.png" alt="er" width="25px" height="25px"></a>
        <a href="https://www.youtube.com/channel/UCf35Ct1F2zrM5ecazJGsW_A"> <img src="../icons/youtb.png" alt="er"width="25px" height="25px"> </a>
  </div><br>
 <div id="copy">
 © {{__("message.copyright")}} 2021 ebusiness4u {{__("message.tous droits réservés")}}
 </div><br>

 </div>
 <!---------------------->
    
    
</body>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script> 

<script type="text/javascript" src="../js/card.js"></script>
<script type="text/javascript" src="../js/pro.js"></script>

<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

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
var elements = document.getElementsByClassName("Element");

for (var i = 1; i < elements.length; i++) {
        elements[i].style.display = "none" ;
    }
  </script>
</html>