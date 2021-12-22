<!Doctype html>
<html>
<head>

<title>template_4</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!--bootstrap 4-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<!--css-->

<link rel="stylesheet" href="../css/e_business.css">

<!--wow.js-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<link rel="stylesheet" href="../css/animate.css">


</head>
<body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
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
@if(App::isLocale('fr'))
<div id="haut" style="background-image: url(../back_g/bcp.png);height: 400px;color:red">
<h1 style="float: left;margin-left:5%" class="animate animate__animated animate__backInRight animate__delay-2s"> {{__("message.On Vous Fournit Le Nécessaire")}}<br>
{{__("message.Pour Lancer Votre")}} <br>
{{__("message.Business En Ligne.")}}</h1>

</div>

@else
<div id="haut" style="background-image: url(../back_g/bc.png);height: 400px;">
<h1 style="float: right;margin-right:5%" class="animate animate__animated animate__backInLeft animate__delay-2s"> {{__("message.On Vous Fournit Le Nécessaire")}}<br>
{{__("message.Pour Lancer Votre")}} <br>
{{__("message.Business En Ligne.")}}</h1>
</div>
@endif
<div class="row" id="def">
<div  class="col-sm" id="definition">
<h2>{{__("message.Qui sommes-nous ?")}}</h2>
<p>
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
</div>
<div class="col-sm" id="definition_img">
<img src="../img_animé/page_1.gif" alt="err">
</div>
</div>



<div class="row" id="attention">
<div class="col-sm" id="attention_img">
<img src="../img_animé/exc.png" alt="err">
</div>
<div class="col-sm" id="attention_txt">
<h2>{{__("message.Important!!!")}}</h2>
<p>
{{__("message.Quelque soi le service que vous 
fournissez cela vous concerne que ce 
soit en")}} ({{__("message.bâtiment, travaux publique, 
santé, finance , assurance, transport 
et logistique, informatique, 
commerce...etc")}})
</p>
<br>
<img src="../icons/arrow4.png" width="150px" height="200px" >
</div>
</div>

<!-------------------------->

@if(App::isLocale('fr'))
<h3 style="color:#DE3B14;width:40%;float:left;margin-left:10%;text-align:center">

<img src="../img_animé/err.png" width="80px" height="80px" ><br>

{{__("message.Et si vous souffrez de l’un des points suivants")}}
</h3>
<div style="width:100%;">

<table style="float:right;width:30%;margin-right:5%;">
  <tr>
<td>
<img src="../img_animé/min_2.png" alt="err" width="100%" height="100%">
</td>
</tr>
</table>

<table class="table" id="pbm" style="width:30%;float:left;margin-left:15%;border-radius:15%;
background:#E7302A;font-size:large">
<tr>
<td>
{{__("message.Manque de projets pas de plans de charge")}} 
</td>
    </tr>
    <tr>
    <td>
    {{__("message.Non utilisation des moyens digitaux pour accéder au projet potentiel.")}}  
</td>
    </tr>
    <tr>
    <td>
    {{__("message.Manque de moyens pour gagner en visibilité sur le web.")}}
</td>
    </tr>
    <tr>
    <td>
    {{__("message.Le coût élevé de la création d’un site web.")}}
 
</td>
    </tr>
    <tr>
    <td>
    {{__("message.La majorité des projets sont diffusés par des réseaux de connaissances.")}}
</td>
    </tr>
</table>
</div>
<div style="width:100%;">
<img src="../icons/arrow4.png" width="150px" height="200px" style="margin-right:40%;margin-top:15%">
</div>
@else

<h3 style="color:#DE3B14;width:40%;float:right;margin-right:10%;text-align:center">

<img src="../img_animé/err.png" width="80px" height="80px" ><br>

{{__("message.Et si vous souffrez de l’un des points suivants")}}
</h3>
<div style="width:100%;">

<table style="float:left;width:30%;margin-left:5%;">
  <tr>
<td>
<img src="../img_animé/min_2.png" alt="err" width="100%" height="100%" style="margin-top:60px">
</td>
</tr>
</table>

<table class="table" id="pbm" style="float:right;width:30%;margin-right:15%;border-radius:15%;
background:#E7302A;font-size:large">
<tr>
<td>
{{__("message.Manque de projets pas de plans de charge")}}
</td>
    </tr>
    <tr>
    <td>
    {{__("message.Non utilisation des moyens digitaux pour accéder au projet potentiel.")}}  
</td>
    </tr>
    <tr>
    <td>
    {{__("message.Manque de moyens pour gagner en visibilité sur le web.")}}
</td>
    </tr>
    <tr>
    <td>
    {{__("message.Le coût élevé de la création d’un site web.")}}
 
</td>
    </tr>
    <tr>
    <td>
    {{__("message.La majorité des projets sont diffusés par des réseaux de connaissances.")}}
</td>
    </tr>
</table>
</div>
<div style="width:100%;">
<img src="../icons/arrow4.png" width="150px" height="200px" style="margin-left:40%;margin-top:5%">
</div>
@endif






<!------------------------------------>

@if(App::isLocale('fr'))

<h5 style="margin:5%;margin-left:40%;margin-top:0px; color:#0A3172;">{{__("message.Alors!!!")}}
<br>{{__("message.qu'attendez-vous pour nous rejoindre maintenant")}} <br>
 {{__("message.et profitez d'opportunités gratuites")}}</h5>

<div>
<h3 style="float:right;margin-right:15%;color:#39A734;background:white;text-align:center">
<img src="../img_animé/fl.png" width="100px" height="100px" style="margin-top:10px;margin-bottom:10px;"><br>
{{__("message.Opportunités gratuites")}}
</h3>
<table style="float:left;width:30%;margin-left:10%;margin-bottom:5%">

  <tr>
<td><img src="../img_animé/fe-bgs.png" alt="err" width="100%" height="100%"></td>
</tr>
</table>

<table class="table" id="slt" style="width:30%;float:right;margin-right:10%;margin-bottom:5%;border-radius:15%;background:#0A3172">
<tr>
<td >
<h5>{{__("message.Des templates pour votre site vitrine")}}</h5>
{{__("message.Déployez votre site vitrine")}}
    {{__("message.en personnalisant un des templates de sites vitrines mis à votre disposition")}}
</td>
    </tr>
    <tr>
    <td>
    <h5>{{__("message.Un tableau de bord pour vous aider à atteindre vos objectifs")}}</h5>
  {{__("message.Une identité digitale pour votre business.")}} 
  {{__("message.Permettez à vos clients de vous trouver")}} 
  {{__("message.sur le web en y inscrivant votre business")}}
</td>
    </tr>
    <tr>
    <td >
    <h5>{{__("message.L'opportunité du numérique s'offre à vous")}}</h5>
    {{__("message.Un outil de gestion, il vous permettra de suivre")}}
    {{__("message.vos données pertinentes sous forme de chiffres, ratios et de graphiques")}}
</td>
    </tr>
    <tr>
    <td>
    <h5>{{__("message.Une veille sur des offres et des opportunités ciblées")}}</h5>
    {{__("message.Suivant votre profil, votre domaine d'activité")}}
    {{__("message.et vos intérêts, vous serez notifiés exclusivement des nouvelles opportunités du marché")}}
 
</td>
    </tr>   
</table>
</div>

<table style="width:100%"><tr>
  <td>
<div style="width:20%;margin-right:40%;margin-left:40%">
<button style="width:200px;height:40px;border-radius:20px;background-color:#5447B9;color:white;border:0px;">
{{__("message.commencer maintenant")}}
</button>
</div>
<br><br>
</td>
</tr>
</table>

<br><br>
<!------------------>
@else

<h5 style="margin:5%;margin-left:40%;margin-top:0px; color:#0A3172;">{{__("message.Alors!!!")}}
<br>{{__("message.qu'attendez-vous pour nous rejoindre maintenant")}} <br>
 {{__("message.et profitez d'opportunités gratuites")}}</h5>

<div style="width:100%;">
<h2 style="float:left;margin-left:25%;color:#39A734;border:background:white;text-align:center;">

<img src="../img_animé/fl.png" width="100px" height="100px" style="margin-top:10px;margin-bottom:10px"><br>
{{__("message.Opportunités gratuites")}}
</h2>
<table style="float:right;width:30%;margin-right:10%;margin-bottom:5%;">

  <tr>
<td><img src="../img_animé/fe-bgs.png" alt="err" width="100%" height="100%"></td>
</tr>
</table>

<table class="table" id="slt" style="width:30%;float:left;margin-left:15%;margin-bottom:5%;border-radius:15%;
background:#0A3172">
<tr>
<td >
<h5>{{__("message.Des templates pour votre site vitrine")}}</h5>
{{__("message.Déployez votre site vitrine")}}
    {{__("message.en personnalisant un des templates de sites vitrines mis à votre disposition")}}
</td>
    </tr>
    <tr>
    <td >
    <h5>{{__("message.Un tableau de bord pour vous aider à atteindre vos objectifs")}}</h5>
    {{__("message.Un outil de gestion, il vous permettra de suivre")}}
    {{__("message.vos données pertinentes sous forme de chiffres, ratios et de graphiques")}}
</td>
    </tr>
    <tr>
    <td >
    <h5>{{__("message.L'opportunité du numérique s'offre à vous")}}</h5>
    {{__("message.Une identité digitale pour votre business.")}} 
  {{__("message.Permettez à vos clients de vous trouver")}} 
  {{__("message.sur le web en y inscrivant votre business")}}    
</td>
    </tr>
    <tr>
    <td>
    <h5>{{__("message.Une veille sur des offres et des opportunités ciblées")}}</h5>
    {{__("message.Suivant votre profil, votre domaine d'activité")}}
    {{__("message.et vos intérêts, vous serez notifiés exclusivement des nouvelles opportunités du marché")}}
 
</td>
<td></td>
    </tr>
   
</table>
</div>
<table style="width:100%"><tr>
  <td>
<div style="width:20%;margin-right:40%;margin-left:40%">
<button style="width:200px;height:40px;border-radius:20px;background-color:#5447B9;color:white;border:0px;">
{{__("message.commencer maintenant")}}
</button>
</div>
<br><br>
</td>
</tr>
</table>
@endif
<!--------------------------->


<div class="row" style="width:90%;margin:5%;">
<p style="margin-left:10%;font-size:x-large;text-align:center;  color:#0A3172;">
{{__("message.Notre objectif")}}<br>
  {{__("message.est de permettre aux Algériens, d'avoir au moins")}}<br>
  {{__("message.une personne par famille, pour profiter de")}}<br>
  {{__("message.l'oppurtunité, de créer une source de revenus")}}<br>
  {{__("message.durable en ligne, avec un minimum de")}}<br>
  {{__("message.connaissances, dans ce domaine.")}}" 
</p>

<img src="../images/im_3.jpg" alt="err" width="40%" style="margin-left:5%">
</div>


<div>
<h5 style="width:70%;margin-left:15%;margin-right:15%;text-align:center;  color:#0A3172;">
{{__("message.Rejoindre E-buniness4u en tant que partenaire (ambassadeur) c'est de croire à un avenir meilleur!
Votre mission consiste à recruter des fournisseurs de services seulement en partageant votre lien.")}}"
</h5>
</div>


<!------------------------>


<div class="row" id="attention">
<div class="col-sm" id="attention_img">
<img src="../img_animé/keep.png" alt="err">
</div>
<div class="col-sm" id="attention_txt">

<p>
{{__("message.Découvrez-les source de revenus 
que vous allez gagner en 
recrutant des fournisseurs de 
service")}}
</p>
<br>
<h4>{{__("message.Attention l’offre est à durée limitée")}}</h4>
<br>
<div style="width:100%">
<button style="font-size:large;border-radius:15px;background-color:#2C6479;color:white;border:0px;">
<p style="margin:3%">
{{__("message.Vérifiez si l'offre ambassadeur est toujours disponible")}}
</p></button>

</div>
<img src="../icons/arrow4.png" width="150px" height="200px" >
</div>
</div>


<!----------card 1-->
<div class="card" style="width: 200px;background-color:transparent;border:0px;margin-left:10%;float:left">
  <div class="card-header" >
  <img class="card-img-top" src="../img_animé/img_7.png" alt="Card image cap"
   >
  </div>
  <div class="card-body" style="background-color:white;z-index:2">
  <br>
  {{__("message.Vous bénéficiez de 
15 % de nos 
commissions sur 
chaque projet 
exécuté par vos 
fournisseurs pour 
une durée 
indéterminée.")}}
  </div>
</div>
<!----------card 4-->
<div class="card" style="width: 200px;background-color:transparent;border:0px;margin-right:15%;float:right">
  <div class="card-header" >
  <img class="card-img-top" src="../img_animé/img_13.png" alt="Card image cap">
  </div>
  <div class="card-body" style="background-color:white;z-index:2">
  <br>
  {{__("message.Vous bénéficiez d'une commission de 05% sur la contribution de chaque fournisseur qui se transforme en ambassadeur deuxième niveau (ambassadeur de votre ambassadeur).")}}
  </div>
</div>

<!----------card 3-->
<div class="card" style="width: 200px;background-color:transparent;border:0px;margin-right:5%;float:right">
  <div class="card-header" >
  <img class="card-img-top" src="../img_animé/img_12.png" alt="Card image cap"
   >
  </div>
  <div class="card-body" style="background-color:white;z-index:2">
  <br>
  {{__("message.Vous bénéficiez d'une commission de 25% sur la contribution de chaque fournisseur de votre équipe qui se transforme en ambassadeur.")}}
  </div>
</div>


<!----------card 4-->
<div class="card">
  <div class="card-header" >
  <img class="card-img-top" src="../img_animé/img_8.png" alt="Card image cap"
   >
  </div>
  <div class="card-body" style="background-color:white;z-index:2">
  <br>
  {{__("message.Vous bénéficiez de 
15% de notre 
commission sur 
chaque projet 
intégré par votre lien 
ou site Web.")}}

  </div>
</div>

<!--------->
<div class="row" style="width:100%">
  <br>
  <div class="col" style="width:100%">
<h1 style="text-align:center;color:#194D60;margin-top:10%;">
{{__("message.Bien sûr pour vous faciliter ce travail")}}<br>
{{__("message.nous vous offrons")}} <b style="color:#44083C;">{{__("message.un Pack Ambassadeur:")}}</b></h1>
</div>
</div>
<!---------------------------------->
<div style="width:100%">
<table style="width:100%;text-align:center;color:#194D60;">
<tr>
<td><img src="../img_animé/min.1.png" width="100px" height="100px"></td>
<td style="width:40%">
  <h5>
  {{__("message.1000 cartes de visite personnalisées")}} <br>
  {{__("message.avec vos coordonnés afin")}}<br>
  {{__("message.de développer votre crédibilité.")}}</h5>
</td>
<td><img src="../img_animé/img_11.png" width="100px" height="100px"></td>
</tr>
</table>

<table style="width:100%;text-align:center;color:#194D60;">
<tr>
<td><img src="../img_animé/img_9.png" width="100px" height="100px"></td>
<td style="width:40%">
  <h5>
  {{__("message.Un nom de domaine gratuit en .com")}} <br>
    {{__("message.et des outils marketing incontournables.")}}</h5>
</td>
<td><img src="../img_animé/min.2.png" width="100px" height="100px"></td>
</tr>
</table>

<table style="width:100%;text-align:center;color:#194D60;">
<tr >
<td><img src="../img_animé/min.3.png" width="100px" height="100px"></td>
<td style="width:40%">
  <h5>
  {{__("message.Nous vous offrons gratuitement des")}}<br>
    {{__("message.Formations marketing et séminaires.")}}<br>
      {{__("message.pour bien mener la fonction ambassadeur.")}}</h5>
</td>
<td><img src="../img_animé/img_10.png" width="100px" height="100px"></td>
</tr>
</table>
  </div>
<!-------------------->
<h2 style="margin-top:50px;margin-bottom:50px;color:#92D9F2;">
{{__("message.Bien sûr, vous serez toujours notre partenaire")}}
</h2>

@if(App::isLocale('fr'))
<div class="row" style="width:50%;margin-left:25%;text-align:center;">
<h2 style="color:#1A4D60">
{{__("message.vous serez automatiquement")}}<br> 
  {{__("message.Ambassadeur dans nos prochaines")}}<br>
    {{__("message.start-up gratuitement.")}}
 
</h2>
<img src="../img_animé/img_6.png" width="150px" height="150px">
</div>
@else
<div class="row" style="width:50%;margin-right:25%;;text-align:center;%">
<h2 style="color:#1A4D60">
{{__("message.vous serez automatiquement")}}<br> 
  {{__("message.Ambassadeur dans nos prochaines")}}<br>
    {{__("message.start-up gratuitement.")}}
 
</h2>
<img src="../img_animé/img_6.png" width="150px" height="150px">
</div>

@endif
<br>
<button 
style="width:35%;font-size:small;border-radius:15px;background-color:#2C6479;color:white;border:0px;
margin-bottom:5%;margin-left:30%">
<p style="font-size:large">
{{__("message.Vérifiez si l'offre ambassadeur est toujours disponible")}}
</p>
</button>

<!----------footer---------->

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
<script>


</script>
</html>