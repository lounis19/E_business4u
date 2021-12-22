<!Doctype html>
<html>
<head>
<title>startup</title>

<!--bootstrap 4-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

<link rel="stylesheet" href="../css/stylesh.css">
<link rel="stylesheet" href="../css/cnt.css">
<!--wow.js-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="../css/animate.css">
</head>
<body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">

<!--debut-->
 <!-- nav -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #0A3172;">
    @if(App::isLocale('fr'))
  <a class="navbar-brand" href="#" style="margin-right:60%">
    <img  src="../images/logo-ebusiness.png" width="180px" height="30px"></a>

    @else
    <a class="navbar-brand" href="#" style="margin-left:60%">
    <img  src="../images/logo-ebusiness.png" width="180px" height="30px"></a>
    @endif

  <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"
  style="background-color:#0A3172;color: #0A3172;">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" >
 <!--   
          <a class="nav-item nav-link active" href="#"><span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#"></a>
      <a class="nav-item nav-link" href="#"></a>
      <a class="nav-item nav-link disabled" href="#"></a>
-->

<div>
@if(App::isLocale('fr'))
<div style="float:right">       
          <a href="{{ route('language', 'ar') }}" style="color:white">
            <img src="{{ asset('../icons/flag/algeria.png') }}" width="20px" height="20px" class="flag d-inline-block  shadow-sm">
            <span class="language">العربية</span>
          </a>&nbsp;&nbsp;&nbsp;
</div> 
        @else
<div>
          <a href="{{ route('language', 'fr') }}"style="color:white">
            <img src="{{ asset('../icons/flag/france.png') }}" width="20px" height="20px" class="flag d-inline-block  shadow-sm ">
            <span class="language">Français</span>
          </a>&nbsp;&nbsp;&nbsp;
</div>
        @endif
</div>                  
    </div>
  </div>
</nav>
<!--fin nav-->

<!--debut-carousel-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active animate__animated animate__backInDown animate__delay-1s">
    <h1 style="text-align:center"> <br><br>
    {{__("message.On Vous Fournit Le Nécessaire")}}<br>
{{__("message.Pour Lancer Votre")}} <br>
{{__("message.Business En Ligne.")}}</h1>
<br>
<br>
    </div>
    <div class="carousel-item animate__animated animate__backInUp animate__delay-1s"><br><br><br>
      <h1 style="text-align:center">QUI SOMMES NOUS?</h1>

      <p style="text-align:center;width:50%;margin-left:25%;margin-right:25%">
{{__("message.L’entreprise E-business4u est 
l’abréviation de « travail électronique, en 
ligne pour vous!» . Une idée de plusieurs 
années s’est concrétisée en janvier 2021. 
Elle a pour objectif de se positionner comme 
incubateur de plusieurs start-up. Grâce à 
notre équipe performante , E-business4u 
vient de se lancer dans sa première 
expérience de startup dans le domaine du 
Jobbing qui va être la plus grande 
plateforme au monde en adaptant la 
technique de Growth hacking .")}}"

</p>
<br>
    </div>
    <div class="carousel-item animate__animated animate__backInLeft animate__delay-1s">
    <br><br><br><br>
      <h1 style="text-align:center">Important!!!</h1><br>
      <p style="text-align:center;width:50%;margin-left:25%;margin-right:25%">
      Quelque soi le service que vous fournissez cela vous concerne que ce soit en (bâtiment, travaux publique, santé, finance , assurance, transport et logistique, informatique, commerce...etc)
</p>
<br><br><br>
</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only" >Next</span>
  </a>
</div>
<!----->

<!--fin-carousel-->
<div>
    <h2 style="text-align:center;margin-top:3%" class="animate__animated animate__flip animate__delay-1s">Et si vous souffrez de l’un des points suivants</h2>

 <div id="card_sp">   
   <!--card 1-->
    <div class="card  animate__animated animate__backInLeft animate__delay-4s" id="crd" style="border:2px solid #13475E;color:#13475E;">
    
    <div class="card-body">
    <p class="card-text">
    <img src="../icons/dang.png" width="30px" height="30px" style="margin-right:2%">Manque de projets pas de plans de charge
    </p>
  </div>
</div>
<!--card 2-->
<div class="card animate__animated animate__backInLeft animate__delay-3s" id="crd" style="border:2px solid #13225E;color:#13225E">
  <div class="card-body">
    <p class="card-text">
    <img src="../icons/dang.png" width="30px" height="30px" style="margin-right:2%">Manque de projets pas de plans de charge
    </p>
  </div>
</div>
<!--card 3-->
<div class="card animate__animated animate__backInDown animate__delay-2s" id="crd" style="border:2px solid #29135E;color:#29135E">
  <div class="card-body">
    <p class="card-text">
    <img src="../icons/dang.png" width="30px" height="30px" style="margin-right:2%">Manque de projets pas de plans de charge
    </p>
  </div>
</div>
<!--card 4-->
<div class="card animate__animated animate__backInRight animate__delay-3s" id="crd" style="border:2px solid #4F135E;color:#4F135E ">
  <div class="card-body">
    <p class="card-text">
    <img src="../icons/dang.png" width="30px" height="30px" style="margin-right:2%">Manque de projets pas de plans de charge
    </p>
  </div>
</div>
<!--card 5-->
<div class="card animate__animated animate__backInRight animate__delay-4s" id="crd" style="border:2px solid #5E1348;color:#5E1348">
  <div class="card-body">
    <p class="card-text">
    <img src="../icons/dang.png" width="30px" height="30px" style="margin-right:2%">Manque de projets pas de plans de charge
    </p>
  </div>
</div>
</div>
</div>
<!----->
<div style="width:100%;margin-top:1%;margin-bottom:2%">
<img src="../icons/fleshe.png" width="150px" height="200px" style="margin-left:40%;margin-top:5%">
</div>
<div>

<h2 style="text-align:center;margin-bottom:2%">
Alors!!!
qu'attendez-vous pour nous rejoindre maintenant
et profitez d'opportunités gratuites<br>
</h2>
<!--card 1-->
<div class="card" id="carte_op" style="float:left;text-align:center;margin-left:5%;margin-right:5%;
color:#E74C3C; ">
 <div class="card-header" >
 <!--<img  src="../icons/opp.png" width="50px" height="50px" alt="Card image cap">-->
  </div>

<h5 class="card-title"> Des templates pour votre site vitrine</h5>
  <div class="card-body">
  Une identité digitale pour votre business. Permettez à vos clients de vous trouver sur le web en y inscrivant votre business
  </div>
</div>
<!--card 2-->
<div class="card" id="carte_op" style="text-align:center;float:right;margin-right:5%;
color: #A569BD">
<div class="card-header" >
 <!--<img  src="../icons/opp.png" width="50px" height="50px" alt="Card image cap">-->
  </div>
<h5 class="card-title">Un tableau de bord pour vous aider à atteindre vos objectifs</h5>
  <div class="card-body">
  Déployez votre site vitrine en personnalisant un des templates de sites vitrines mis à votre disposition </div>
</div>
<!--card 3-->
<div class="card" id="carte_op" style="text-align:center;float:left;margin-left:5%;margin-right:5%;
color:#2874A6">
<div class="card-header" >
 <!--<img  src="../icons/opp.png" width="50px" height="50px" alt="Card image cap">-->
  </div>
<h5 class="card-title">L'opportunité du numérique s'offre à vous</h5>
  <div class="card-body">
  Un outil de gestion, il vous permettra de suivre vos données pertinentes sous forme de chiffres, ratios et de graphiques 
</div>
</div>
<!--card 4-->
<div class="card" id="carte_op" style="text-align:center;float:right;margin-left:5%;margin-right:5%;
color: #117A65">
<div class="card-header" >
 <!--<img  src="../icons/opp.png" width="50px" height="50px" alt="Card image cap">-->
  </div>
<h5 class="card-title">Une veille sur des offres et des opportunités ciblées</h5>
  <div class="card-body">
  Suivant votre profil, votre domaine d'activité et vos intérêts, vous serez notifiés exclusivement des nouvelles opportunités du marché
</div>
</div>
<!------------------------>

</div>

<!------------------------>
<div>
<button id="cmc"><a href="">Commencer maintenant</a></button>
</div>

<!----------------------->


  

  <div class="card" style="text-align:center;border:0px;margin-top:2%;background:transparent;">

  <div class="card-body">
    <h3 class="card-title" > Notre objectif</h3>
    <p class="card-text">est de permettre aux Algériens, d'avoir au moins
une personne par famille, pour profiter de
l'oppurtunité, de créer une source de revenus
durable en ligne, avec un minimum de
connaissances, dans ce domaine."</p>
    <a href="#" class="btn">
    <img src="../images/im_3.jpg" alt="err" width="40%">
    </a>
  </div>
</div>
<!-------------------------->
<h5 style="width:70%;margin-left:15%;margin-right:15%;margin-top:3%;margin-bottom:3%;color:white">
Rejoindre E-buniness4u en tant que partenaire (ambassadeur) c'est de croire à un avenir meilleur! Votre mission consiste à recruter des fournisseurs de services seulement en partageant votre lien."
</h5>

<div id="carte">
<!--*************************************-->
<div class="card" style="width: 15rem;float:left;">
<a class="btn text-center" data-toggle="collapse" href="#card-text_1" role="button" aria-expanded="false" aria-controls="card-text_1">
    <img src="../img_animé/img_7.png" alt="err" width="100px" height="100px">
    <p>Cliquez ici</p>
</a>
  
  <div class="card-body">
  <div class="collapse multi-collapse" id="card-text_1">
    <p class="card-text" id="card-text">
    Vous bénéficiez de 15 % de nos commissions sur chaque projet exécuté par vos fournisseurs pour une durée indéterminée.
    </p>
</div>
</div>
</div>
<!---->
<div class="card" style="width: 15rem;float:left;margin-left:3%">
<a class="btn text-center" data-toggle="collapse" href="#card-text_2" role="button" aria-expanded="false" aria-controls="card-text_2">
    <img src="../img_animé/img_8.png" alt="err" width="100px" height="100px">
    <p>Cliquez ici</p>
</a>
  
  <div class="card-body">
  <div class="collapse multi-collapse" id="card-text_2">
    <p class="card-text" id="card-text">
    Vous bénéficiez de 15% de notre commission sur chaque projet intégré par votre lien ou site Web.
    </p>
</div>
</div>
</div>
<!---->
<div class="card" style="width: 15rem;float:left;margin-left:3%">
<a class="btn text-center" data-toggle="collapse" href="#card-text_3" role="button" aria-expanded="false" aria-controls="card-text_3">
    <img src="../img_animé/img_12.png" alt="err" width="100px" height="100px">
    <p>Cliquez ici</p>
</a>
  
  <div class="card-body">
  <div class="collapse multi-collapse" id="card-text_3">
    <p class="card-text" id="card-text">
    Vous bénéficiez d'un montant de 10 000 DZD pour chaque fournisseur de votre équipe qui se transforme en ambassadeur.
    </p>
</div>
</div>
</div>
<!---->
<div class="card" style="width: 15rem;float:left;margin-left:3%">
<a class="btn text-center" data-toggle="collapse" href="#card-text_4" role="button" aria-expanded="false" aria-controls="card-text_4">
    <img src="../img_animé/img_13.png" alt="err" width="100px" height="100px">
    <p>Cliquez ici</p>
</a>
  
  <div class="card-body">
  <div class="collapse multi-collapse" id="card-text_4">
    <p class="card-text" id="card-text">
    Vous bénéficiez d'un montant de 2 500 DZD pour chaque fournisseur qui se transforme en ambassadeur deuxième niveau ( ambassadeur de votre ambassadeur).
    </p>
</div>
</div>
</div>
<!---->

</div>
</div>

<div id="carte">
<!--*************************************-->
<div class="card"  style="width: 15rem;float:left;">
<a class="btn text-center" data-toggle="collapse" href="#card-text1" role="button" aria-expanded="false" aria-controls="card-text1">
    <img src="../img_animé/img_9.png" alt="err" width="100px" height="100px">
    <p>Cliquez ici</p>
</a>
  
  <div class="card-body">
  <div class="collapse multi-collapse" id="card-text1">
    <p class="card-text" id="card-text">
    Un nom de domaine gratuit en .com et des outils marketing incontournables.
    </p>
</div>
</div>
</div>
<!---->
<div class="card" style="width: 15rem;float:left;margin-left:3%">
<a class="btn text-center" data-toggle="collapse" href="#card-text2" role="button" aria-expanded="false" aria-controls="card-text2">
    <img src="../img_animé/img_11.png" alt="err" width="100px" height="100px">
    <p>Cliquez ici</p>
</a>
  
  <div class="card-body">
  <div class="collapse multi-collapse" id="card-text2">
    <p class="card-text" id="card-text">
    1000 cartes de visite personnalisées avec vos coordonnés afin de développer votre crédibilité.
    </p>
</div>
</div>
</div>
<!---->
<div class="card" style="width: 15rem;float:left;margin-left:3%">
<a class="btn text-center" data-toggle="collapse" href="#card-text3" role="button" aria-expanded="false" aria-controls="card-text3">
    <img src="../img_animé/img_10.png" alt="err" width="100px" height="100px">
    <p>Cliquez ici</p>
</a>
  
  <div class="card-body">
  <div class="collapse multi-collapse" id="card-text3">
    <p class="card-text" id="card-text">
    Nous vous offrons gratuitement des Formations marketing et séminaires pour bien mener la fonction ambassadeur.
    </p>
</div>
</div>
</div>
<!---->
<div class="card" style="width: 15rem;float:left;margin-left:3%">
<a class="btn text-center" data-toggle="collapse" href="#card-text4" role="button" aria-expanded="false" aria-controls="card-text4">
    <img src="../img_animé/img_6.png" alt="err" width="100px" height="100px">
    <p>Cliquez ici</p>
</a>
  
  <div class="card-body">
  <div class="collapse multi-collapse" id="card-text4">
    <p class="card-text" id="card-text">
    vous serez automatiquement Ambassadeur dans nos prochaines start-up gratuitement.
    </p>
</div>
</div>
</div>
<!---->

</div>
</div>
</div>
<!--------------------><br>
<h2 style="text-align:center;">Contactez-nous<br></h2>
<form id="fm_cnt" action="/send-email" method="Post" enctype="multipart/form-data">
@csrf
<input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder={{__('message.Name')}} required><br>
   
<input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" placeholder={{__('message.Enter_email')}} required><br>
   
<input type="text" class="form-control" id="tel" name="tel" aria-describedby="emailHelp" placeholder={{__('message.Tel')}} required><br>

<input type="text" class="form-control" id="sujet" name="sujet" aria-describedby="emailHelp" placeholder={{__('message.Sujet')}} required><br>


<textarea type="text" class="form-control" id="message" name="message" aria-describedby="emailHelp" 
cols="60%" rows="5" placeholder={{__('message.Description')}} required>
Description...
</textarea><br>

<button id="btn" type="submit" class="btn" style="margin-left: 47%; background-color: bleu">{{__('message.Envoyer')}}</button>
</form>


<!-------------------->

<div id="footer">

<div class="row" >

<div class="col" style="text-align: center;margin-top: 4%">
{{__("message.Pour les questions avant-vente, les problèmes de RH et les relations commerciales veuillez envoyer un e-mail à")}} contact@e-business4u.com
 </div>

 <div class="col" style="text-align: center; margin-top:5%">
 <img src="../images/logo-ebusiness.png" alt="erreur" width="200px" height="90px">
 <p>contact@e-business4u.com<br>EBusiness4U RCN:06/00 - 1000874A18</p>
 <a href="#" style="color:white">{{__("message.Termes et conditions d'utilisation")}}</a>- <a href="#" style="color:white">{{__("message.Politique de données")}}</a>
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
 <div id="rsx">
        <a href="https://www.facebook.com/ebusiness4u/"> <img src="../icons/fbk.png" alt="er" width="25px" height="25px"></a>
        <a href="https://www.instagram.com/ebusiness4udz/"> <img src="../icons/insta.png" alt="er" width="25px" height="25px"></a>
        <a href="https://twitter.com/AbdelhalimMokr2"> <img src="../icons/twitte.png" alt="er" width="25px" height="25px"></a>
        <a href="https://www.youtube.com/channel/UCf35Ct1F2zrM5ecazJGsW_A"> <img src="../icons/youtb.png" alt="er"width="25px" height="25px"> </a>
  </div>
 </div>
 </div>
<div>
 </div>

<br>
 <div id="copy">
 © {{__("message.copyright")}} 2021 ebusiness4u {{__("message.tous droits réservés")}}
 </div><br>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script> 

<script type="text/javascript" src="../js/affichage_details.js"></script>

</html>