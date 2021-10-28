<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ecowater</title>
         <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent;}
            [hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,
                Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,
                :after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}
                svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}
                .bg-white{--bg-opacity:1;background-color:#090133;background-color:rgba(255,255,255,var(--bg-opacity))}
                .bg-gray-100{--bg-opacity:1;background-color:#090133;background-color:rgba(247,250,252,var(--bg-opacity))}
                .border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}
                .border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}
                .items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}
                .h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}
                .leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}
                .mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}
                .ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}
                .max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}
                .p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}
                .pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}
                .shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}
                .text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}
                .text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}
                .text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}
                .text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}
                .text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}
                .text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}
                .text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}
                .underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;
                    -moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}
                    .grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px)
                    {.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}
                    .sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}
                    .sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}
                    .sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}
                    @media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}
                    .md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px)
                    {.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark)
                    {.dark\:bg-gray-800{--bg-opacity:1;background-color:#090133;background-color:rgba(45,55,72,var(--bg-opacity))}
                    .dark\:bg-gray-900{--bg-opacity:1;background-color:#090133;background-color:rgba(26,32,44,var(--bg-opacity))}
                    .dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}
                    .dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}
                    .dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}
                    .dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    
    <body class="antialiased" background="img/fondoazul.jpg">     
   
      

    <div class="navbar-fixed">
        <nav class="green accent-3">
            <a href="" class="brand-logo"><img class="responsive-img" src="img/jpgecowater.jpg"  width="200px" 
            style="border-radius: 6px; margin-top: 5px; margin-left: 5px; "></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#Inicio" class="black-text">Inicio <i class="material-icons left">home</i></a> </li>
                    <li><a href="#Consejos" class="black-text">Consejos<i class="material-icons left">fact_check </i></a></li>
                    <li><a href="#Screenshots" class="black-text">Screenshots<i class="material-icons left">camera</i> </a></li>
                    <li><a href="#App" class="black-text">Descargar app<i class="material-icons left">vertical_align_bottom</i></a></li>
                </ul>

        
            </nav>
            <a name="Inicio"></a>
            <div></div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    
                </div>

               
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container row" style="margin-top: 70px;">
            <img src="img/celular.png" alt="" style="margin-left: 30px margin-buttom" height="600px" width="">
            <div class="col s2"></div>
            

            <h1 class="title white-text col m6">App EcoWater   EL SALVADOR

                <div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0 ">
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn-flat green accent-3 text-sm text-black" style="margin-bottom: 500px;">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="btn-flat green accent-3 text-sm text-black" style="margin-bottom: 500px;">Iniciar sesion</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn-flat green accent-3 ml-4 text-sm text-black" style="margin-bottom: 500px;">Registrarse</a>
                                @endif
                            @endauth
                        </div>
                    @endif
            </h1>
            
        </div>
        <a name="Consejos"></a>
        <div class="card">
            <br>
            <div class="card-content green accent-3 row" style="padding-bottom: 40px">
                    <h1 style="margin-left: 50px">Consejos para cuidar el agua
                    </h1>
                
            </div>
            <br>
            <br>

            <div class="row">
                <div class="col s12 m3">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/grifo.jpg" height="200px">
                      
                    </div>
                    <div class="card-content">
                      <span class="card-title">Cerra el grifo cuando te lavas los dientes</span>
                      <p>Lavarse los dientes es algo que hacemos varias veces al día. Por ello,
                           para evitar un excesivo consumo de agua es importante usar un vaso de enjuague. De esta forma,
                            puedes ahorrar hasta un 90% del agua empleada en el aseo personal.</p>
                    </div>
                  </div>
                </div>

                    <div class="col s12 m3">
                      <div class="card">
                        <div class="card-image">
                          <img src="img/afeitarse.jpg" height="200px">

                        </div>
                        <div class="card-content">
                          <span class="card-title black-text">Cerrar la llave del grifo cuando te estés afeitando</span>
                          <p>También supone un gran consumo de agua dejarlo abierto mientras te afeitas. 
                              Solo ábrelo cuando vayas a aclararte.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card">
                          <div class="card-image">
                            <img src="img/inodoro.jpg" height="200px">
                            
                          </div>
                          <div class="card-content">
                            <span class="card-title black-text" >No tirar productos contaminantes por el inodoro</span>
                            <p>No tires productos contaminantes al agua o productos como toallitas
                               que luego sean difícil de degradarse o que atasquen las tuberías.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col s12 m3">
                        <div class="card">
                          <div class="card-image">
                            <img src="img/lavamanos.jpg" height="200px">
                            
                          </div>
                          <div class="card-content">
                            <span class="card-title">Cerrar la llava mientras te enjabonas</span>
                            <p>Lavarnos las manos también es algo que hacemos muchas veces a lo largo del día. 
                              Recuerda que para evitar mucho consumo de agua y ahorrar litros de agua, es importante 
                              cerrar el grifo cuando te estés enjabonando. Solo tienes que tener el grifo abierto cuando 
                              te vayas a aclarar.</p>
                          </div>
                        </div>
                      </div>

                      <div class="col s12 m3">
                        <div class="card">
                          <div class="card-image">
                            <img src="img/jardin.jpg" height="200px">
                            
                          </div>
                          <div class="card-content">
                            <span class="card-title">Reduce al mínimo la evaporación</span>
                            <p>Riega las plantas durante las
                               horas tempranas de la mañana, cuando las temperaturas están más frescas
                                y los vientos son más ligeros.</p>
                          </div>
                        </div>
                      </div>

                      <div class="col s12 m3">
                        <div class="card">
                          <div class="card-image">
                            <img src="img/autolavado.jpeg" height="200px">
                          </div>
                          <div class="card-content">
                            <span class="card-title">Usa una cubeta</span>
                            <p>Usa cubetas con agua para lavar el coche en vez de utilizar una manguera.</p>
                          </div>
                        </div>
                      </div>

                      <div class="col s12 m3">
                        <div class="card">
                          <div class="card-image">
                            <img src="img/senora.jpeg" height="200px">
                          </div>
                          <div class="card-content">
                            <span class="card-title">Aprovecha el agua lluvia</span>
                            <p>Aprovecha el agua lluvia para regar tus plantas, principalmente en interiores.</p>
                          </div>
                        </div>
                      </div>

                     
                        <div class="col s12 m3">
                          <div class="card">
                            <div class="card-content">
                              <span class="card-title">Para mas consejos visita esta pagina</span>
                            </div>
                            <div class="card-action">
                              <a href="https://www.fundacionaquae.org/consejos-para-cuidar-del-agua/">Aquae Fundación</a>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>

              
              <a name="Screenshots"></a>
              <div class="card">
                  <br>
                  <div class="card-content green accent-3 row" style="padding-bottom: 40px">
                          <h1 style="margin-left: 50px">Screenshots
                          </h1>
                      
                  </div>
                  <br>
                  <div class="row">
                    <div class="col s4"><img src="/img/inicio.jpg" alt="" class="" width="380px" height="650px"></div>
                    <div class="col s4"><img src="/img/registro.jpg" alt="" class=""  width="380px" height="650px"></div>
                    <div class="col s4"><img src="/img/sesion.jpg" alt="" class=""  width="380px" height="650px"></div>
                    <br>
                    <div class="col s4"><img src="/img/datos.jpg" alt="" class=""  width="380px" height="650px"></div>
                    <div class="col s4"><img src="/img/consejos1.jpg" alt="" class="" width="380px" height="650px">></div>
                    <div class="col s4"><img src="/img/consejos2.jpg" alt="" class="" width="380px" height="650px"></div>
                  </div>
          

                        

        </div>
        <a name="App"></a>
        <div class="row col m6 ">
          <a href="https://drive.google.com/file/d/1bzMY34gkgplCgJBgo0ozr0uhVmg45qVT/view?usp=sharing" download="Descargar Archivo" class="btn-large green accent-3 text-sm text-black" style="margin-left: 590px; margin-top: 200px;">Descargar app</a>
        </div>
        <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="module">
     
    </script>




    </body>
</html>
