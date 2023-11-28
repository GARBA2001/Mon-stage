<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mon-Stage</title>

        <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


        <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

   
   
    </head>


    <body>







        <main>
            <header>
                <nav>
                <div class="container">
                <div class="logo">

                 <div> <img src="{{ asset('image/logo1.png')}}" alt=""> </div>  
                <!-- <div>MON-STAGE</div> -->

                <div class="links">
                <ul>
                    <li>  <a href="#" >Entreprise</a> </li>
                    <li>  <a href="#" >Candidats</a> </li>
                    <li>  <a href="#" >A propos de nous</a> </li> 
                    <li>  <a href="#" >Planifier une demo</a> </li>

                    @if (Route::has('login'))
                
                @auth
                 <li>  <a href="{{ url('/home') }}" >Dashboard</a></li> 
                @else
                 <li>  <a href="{{ route('login') }}" class="activ">Se connecter</a></li> 

                    @if (Route::has('register'))
                      <li> <a href="{{ route('register') }}" class="active" >JE M'INSCRIS</a></li> 
                    @endif
                @endauth
            
        @endif      

                </ul>
                </div>

                </div>
                </div>
                </nav>


                <div class="header-content">
                    <div class="container grid-2">
                    <div class="column-1">
                    <h1 class="header-title title-1">DES MILLIERS DE <br> JEUNES MOTIVES </h1>
                    <h1 class="header-title title-2">POUR VOUS PRETER <br> MAINS FORTES</h1>
                    <p class="text">Grace a son algorithme de matching, MON-STAGE vous met en relation avec <br> des jeunes 
                     motivés et qualifiés, en trois clic et en moins de 24H.
                     </p>
                       <a href="#" class="btn btn-1">En savoir plus</a>
                       <a href="#" class="btn btn-2">Planifier une démo</a>
                    </div>

                    <div class="column-2"><img src="{{ asset('image/image.png')}}" class="img-element" alt="">

                    </div>
                    </div>
                </div>
            </header> 















<section class="services" id="services">
    <h2 class="heading"> Approuvés par <span>+1000 Entreprises,</span> PETITES, MOYENNES, GRANDES</h2>

    <div class="services-container">
    <div class="services-box">
        <img src="{{ asset('image/Actu-burkina.png')}}" class="img1" alt=""> 
        </div>

        <div class="services-box">
        <img src="{{ asset('image/Cimfaso.jpg')}}" class="img2"  alt=""> 
        </div>

        <div class="services-box">
        <img src="{{ asset('image/Oxfam.jpg')}}" class="img3"  alt=""> 
        </div>

        <div class="services-box">
        <img src="{{ asset('image/Police.jpg')}}" class="img4"  alt=""> 
        </div>

        <div class="services-box">
        <img src="{{ asset('image/E-mersion.jpg')}}" class="img5"  alt=""> 
        </div>

        <div class="services-box">
        <img src="{{ asset('image/Simplon.jpg')}}" class="img6"  alt=""> 
        </div>    

    </div>
</section>


<section class="disponible">
<h2 class="heading"> <span>+3000 JEUNES,</span> DISPONIBLES MAINTENANT</h2>
<div class="container-2">
<div><img src="{{ asset('image/Groupe 2.png')}}" alt=""></div>
<div class="groupe-3"><img src="{{ asset('image/Groupe 3.png')}}" alt=""></div>
</div>
</section>


<section class="records ">
<h2 class="heading"> MON-STAGE c'est avant tout une communauté</h2>
<h5 class="heading-2">Où demandeur de stages et entreprises se retrouvent sur une marketplace, pour collaborer en toute simplicité.</h5>
    <div class="container"> 


    <div class="wrap">
    <div class="record-circle">
    
    <h2 class="number">1K entreprises</h2>
    <h4 class="sub-title">À la recherche de demandeurs confirmés</h4>
    </div>
    </div>

    <div class="wrap">
    <div class="record-circle">
    
    <h2 class="number">23K demandeurs</h2>
    <h4 class="sub-title">Aux multiples formations</h4>
    </div>
    </div>

    <div class="wrap">
    <div class="record-circle">
    
    <h2 class="number">1 solution dediée</h2>
    <h4 class="sub-title">Pensée et conçue pour collaborer</h4>
    </div>
    </div>

    </div>  
</section>



<footer class="footer">
<div class="container">
     <div class="grid-4">
        <div class="grid-4-col footer-about">
        <div> <img src="{{ asset('image/logo4.png')}}" class="lok" alt=""> </div>
            <h3 class="title-sm suivez">Suivez nous sur </h3>
        </div>

        <div class="grid-4-col footer-links">
            <h3 class="title-sm">Entreprise</h3>
            <ul>
                <li>
                    <a href="#">La solution entreprise</a> 
                </li>
                <li>
                    <a href="#">FAQ Stage</a> 
                </li>
                <li>
                    <a href="#">FAQ Intérim</a> 
                </li>
                <li>
                    <a href="#">Blog</a> 
                </li>
        
            </ul>
        </div>

        <div class="grid-4-col footer-links">
            <h3 class="title-sm">Candidats</h3>
            <ul>
                <li>
                    <a href="#">L'App Candidat</a>
                </li>
                <li>
                    <a href="#">FAQ Stage</a>
                </li>
                <li>
                    <a href="#">FAQ Intérim</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
            </ul>
        </div>

        <div class="grid-4-col footer-links">
        <h3 class="title-sm">A propos</h3>
            <ul>
                <li>
                    <a href="#">A propos de nous</a>
                </li>
                <li>
                    <a href="#">Nous rejoindre</a>
                </li>
                <li>
                    <a href="#">Presse</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
     </div>

     <div class="bottom-footer">
        <div class="copyright"> 
            <p class="text">
           Copyright§copy;2023 ALLrights reserved | Made by <span>GARBA</span>
        </p>
        </div>
        <!-- <div class="followme-wrap">
            <a href="">
                <i class="fab fa-facebook"></i>
                
            </a>
        </div> -->

        <i class="fi fi-rr-graduation-cap"></i>
        <i class="fa-brands fa-slack fa-6xl" data-src="https://cdn.flaticon.com/svg/premium/v1/701/701252.svg" alt="Slack"></i>


     </div>
</div>
</footer>
            
        </main>