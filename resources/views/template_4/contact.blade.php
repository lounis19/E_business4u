<!doctype html>
<head>
<title>template_3.contact</title>
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

<link rel="stylesheet" href="../css/contact.css">


</head>
<body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">

<div id="acc">
<div id="contenue">
<!-- nav -->
<div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="temp"><img  src="../images/logo-ebusiness.png" width="180px" height="30px"> </a>
       
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
            <!--<li class="nav-item"><a class="nav-link " href="#">{{__("message.Réalisations")}}</a></li> -->
            <li class="nav-item"><a class="nav-link " href="propos">{{__("message.A propos")}}</a></li>
            <li class="nav-item"><a class="nav-link " href="contact">{{__("message.Contactez-nous")}}</a></li>
            
           
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav">
                    <!-- Authentication Links -->
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                               
                                @case('fr')
                                <img src="{{asset('../icons/flag/france.png')}}" width="20px" height="20px"> {{__("message.Français")}}
                                @break
                                @case('ar')
                                <img src="{{asset('../icons/flag/algeria.png')}}" width="20px" height="20px"> {{__("message.Arabe")}}
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

        <!---->
          </ul>
   
              </div>
            </nav>
      </div>
<div id="cnt" behavior="alternate">
<!--<marquee behavior="scroll" direction="right">-->
  <marque><br>
     <h2 id="title_x">{{__('message.Contact')}} </h2>
</marquee>
</div>


<form id="frm" action="/send-email" method="Post" enctype="multipart/form-data">
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
</div>


<!--footer-->
<!--
<div id="footer">

<div class="row" style="margin:3%;">

<div class="col" id="col_1">
<ul id="liste">
<li>{{__("message.Presentation")}}</li>
<li>{{__("message.A propos")}}</li>
<li>{{__("message.Galerie")}}</li>
<li>{{__("message.FAQs")}}</li>
</ul>
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
 </div>
 </div>
 </div>
<div>
 </div>
 
 <div id="rsx">
        <a href="https://www.facebook.com/ebusiness4u/"> <img src="../icons/fbk.png" alt="er" width="25px" height="25px"></a>
        <a href="https://www.instagram.com/ebusiness4udz/"> <img src="../icons/insta.png" alt="er" width="25px" height="25px"></a>
        <a href="https://twitter.com/AbdelhalimMokr2"> <img src="../icons/twitte.png" alt="er" width="25px" height="25px"></a>
        <a href="https://www.youtube.com/channel/UCf35Ct1F2zrM5ecazJGsW_A"> <img src="../icons/youtb.png" alt="er"width="25px" height="25px"> </a>
  </div>
 <div id="copy">
 © {{__("message.copyright")}} 2021 ebusiness4u {{__("message.tous droits réservés")}}
 </div>
</div>
-->

<!--footer-->
<div id="footer" style="background-color: #0D1836;">

<div class="row" style="margin:3%;">

<div class="col" style="text-align: center; margin-top:5%">
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
  </div>
 <div id="copy">
 © {{__("message.copyright")}} 2021 ebusiness4u {{__("message.tous droits réservés")}}
 </div>

 </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script> 


</html>