<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Moma</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/tailwind.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script defer="" src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Fonts -->
        <!--
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        -->
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
      
                
        <script src="https://cdn.tailwindcss.com"></script>
    


    </head>
    <body style="background-color: black;" cz-shortcut-listen="true">

<!-- home section -->
<section class="bg-black mb-20 md:mb-52 xl:mb-72">

    <div class="container max-w-screen-xl mx-auto px-4">

        <nav class="flex-wrap lg:flex items-center py-14 xl:relative z-10" x-data="{navbarOpen:false}">

            <div class="flex items-center justify-between mb-10 lg:mb-0">
                <img src="../images/Moma_Logo.png" alt="Logo img" class="" width="133.95px" height="33.83px">
            </div>

        </nav>

        <div class="flex items-center justify-center xl:justify-start">

            <div class="mt-28 text-center xl:text-left">
                <div class="" style="color: #FFFFFF;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 26px;line-height: 39px; ">À partir du 1er juillet 2022,</h4>
                <div class="" style="color: #FFFFFF;font-family: 'Poppins';font-style: normal;font-weight: 800;font-size: 32px;line-height: 36px;" >DÉVOUVREZ LES RICHESSES <br> DU MoMA À LA VILLETTE </div><br>
                <small style="color:#C2C2C2">Le célèbre musée New-Yorkais ouvre une antenne à Paris.</small><br><br>

                <button class="" style="
                    box-sizing: border-box;
                    border: 1px solid #D9B54A;
                    width: 186px;
                    height: 53px;
                    left: 208px;

                    font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 14px;
                    line-height: 21px;

                    top: 518px;
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                    padding: 16px 32px;
                    gap: 10px;
                ">PROGRAMMATION</button>
            </div>

            <div class="hidden xl:block xl:absolute z-0 top-0 right-0">
                <img src="../images/campbell-o.png" style=" width: 660px; height: 800px; left: 0px;" alt="Home img">
            </div>
        </div>
    </div>
</section>

<!-- /*---------[ NAVBAR ]---------*/
<div style="
            width: 1440px;
            height: 81px;
            left: 0px;
            top: 820px;
            background: rgba(0, 0, 0, 0.8);
                    ">
            <p style="color: #fff
            
            ">Adresse Porte de la villette   Horaires lundi -> dimanche  10h - 18h</p>

        <button class="" style="
                    box-sizing: border-box;
                    border: 1px solid #D9B54A;
                    width: 186px;
                    height: 53px;
                    left: 208px;

                    font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 14px;
                    line-height: 21px;

                    top: 518px;
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                    padding: 16px 32px;
                    gap: 10px;
                ">PROGRAMMATION</button>
        </div>
-->

<br><br>

<!-- gallery section -->
<section class="py-10 md:py-16">

    <div class="container max-w-screen-xl mx-auto px-28">
        <div class="flex space-x-4 md:space-x-6 lg:space-x-6">
            <div>
                <div>
                    <img src="../images/img1.png" alt="image" class="mb-12 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    <h3 style="color: #fff; font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 48px;line-height: 72px;">Expo 1</h3>
                    <p style="color: #C2C2C2;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;line-height: 26px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    
                    <p style="display: flex;
                    align-items: center; color: #FFFFFF;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 18px;line-height: 27px;">Plus d’informations  <span style="margin-left:10px;color:#c71900!important;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg></span></p>
                </div><br><br>
                    <img src="../images/img3.png" alt="image" class="mb-6 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    <h3 style="color: #fff; font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 48px;line-height: 72px;">Expo 3</h3>
                    <p style="color: #C2C2C2;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;line-height: 26px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p style="display: flex;
                    align-items: center; color: #FFFFFF;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 18px;line-height: 27px;">Plus d’informations  <span style="margin-left:10px;color:#c71900!important;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg></span></p>            </div><br><br>

            <div>
                <div>
                    <h1 class="" style="color:#FFFFFF; font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 80px;line-height: 120px;">PROG <small style="color: #D9B54A;">.</small></h1>
                    <img src="../images/img2.png" alt="image" class="mb-6 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    <h3 style="color: #fff; font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 48px;line-height: 72px;">Expo 2</h3>
                    <p style="color: #C2C2C2;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;line-height: 26px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p style="display: flex;
                    align-items: center; color: #FFFFFF;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 18px;line-height: 27px;">Plus d’informations  <span style="margin-left:10px;color:#c71900!important;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg></span></p>                </div><br><br>

                <div>
                    <img src="../images/img4.png" alt="image" class="mb-6 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    <h3 style="color: #fff; font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 48px;line-height: 72px;">Expo 4</h3>
                    <p style="color: #C2C2C2;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;line-height: 26px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p style="display: flex;
                    align-items: center; color: #FFFFFF;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 18px;line-height: 27px;">Plus d’informations  <span style="margin-left:10px;color:#c71900!important;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg></span></p>                </div>
            </div>
        </div>

    </div> <!-- container.// -->

</section>

<br>
<section class="py-10 md:py-16">

    <div class="container max-w-screen-xl mx-auto px-28">
        <div class="flex space-x-4 md:space-x-6 lg:space-x-6">
            <div>
                <div>
                    <h5 style="color: #fff; position: absolute;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 70px;line-height: 60px;">UN FOND <br> D'ART MODERNE</h3>
                </div>
                <div>
                    <br><br><br><br><br>
                    <p style="color: #C2C2C2;position: absolute;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;line-height: 26px;">
                    Depuis 1929, le Museum of Modern Art de New <br>York est une référence mondiale en terme d’arts<br> moderne et contemporain. Retrouvez une partie <br>de son incroyable collection à Paris - La Villette.</p>
                </div><br><br><br><br><br><br><br>
                    <img src="../images/img6.png" alt="image" style="width: 292px; height: 457px;" class="mb-6 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    <img src="../images/img7.png" alt="image" style="width: 608px;height: 182px;" class="">
            </div><br><br>

            <div>
                <div>
                    <img src="../images/img5.png" alt="image" style="width: 1400px;height: 721px;" class="mb-6 md:mb-6 lg:mb-8 hover:opacity-75 transition ease-in-out duration-500">
                    <h3 style="color: #fff; font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 60px;line-height: 60px;text-align: right;text-transform: uppercase;">UNE RICHESSE INÉGALÉE</h3>
                    <p style="color: #FFF; font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;line-height: 24px;text-align: right;"> Dessins, peintures, chef d’oeuvres de design,<br> photographies, sculptures... Autant de trésors que <br> vous pourrez désormais admirer au sein des <br>26 000 m2 de la halle de la Villette.</p>
                </div><br>
            </div>
        </div>
    </div>
</section>

<!-- gallery section //end -->

<!-- testimoni section -->
<section class="bg-black py-10 md:py-16">

    <div class="container max-w-screen-xl mx-auto px-28">

        <div class="" style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 40px;line-height: 60px;color: #FFFFFF;">DEVENEZ MEMBRE <br>
            <small style="font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 74px;line-height: 111px;"> dU MoMA </small>
        </div>
        <p style="color: #C2C2C2;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 18px;line-height: 27px;"> Découvrez nos offres d’abonnement et leurs avantages<br> pour une expérience artistique et culturelle incomparable.</p>
        <br><br><br>

        <div class="flex flex-col md:flex-row md:items-center justify-center md:space-x-8 lg:space-x-12 mb-10 md:mb-20">
            
        <div class="bg-gray-100 rounded-lg mb-10 md:mb-0" style="width: 397px;height: 481px; margin-top:-100px;"><br>
        <p class="text-center" style="color:black; font-weight: bold; font-size:22px;"> ART ENTHUSIAST </p>
                    <p style="color:black; font-weight: bold; font-size:22px;" class="text-center">100€/an</p><br>
                    <hr class="text-center" style="border: 1px solid #000000;width: 331px;height: 0px; margin-left: 30px;"><br>

                    <div class="items-center gap-5 mx-8">
                        <p class="" style="display: flex;
                        align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg></span>Coupe-file</p> <p class="" style="display: flex;
                          align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg></span>Avant-prèmiere</p><p class="" style="display: flex;
                            align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg></span>Ligne dédiée</p>
                    </div>
                    <p class="font-normal text-sm lg:text-md text-gray-400 mx-8 my-8">
                    Possibilité d’inviter un ami<br>
                    Accès aux collections privées<br><br>
                    Visites exclusives en compagnie des<br>
                    commissaires des expositions<br><br>
                    Invitations régulières à des visites<br>
                    découvertes et événements privés<br>
    
                    <h3 class="text-center" style="font-family: 'Montserrat';font-style: normal;font-weight: 700;font-size: 18px;color: #000000;text-transform: uppercase;line-height: 22px;">DEVENEZ MEMBRE</h3>
                
        </div>

            <div class="bg-gray-100 rounded-lg mb-10 md:mb-0" style="width: 397px;height: 481px; margin-top: 85px;"><br>
                    <p class="text-center" style="color:black; font-weight: bold; font-size:22px;"> ART ENTHUSIAST </p>
                    <p style="color:black; font-weight: bold; font-size:22px;" class="text-center">100€/an</p><br>
                    <hr class="text-center" style="border: 1px solid #000000;width: 331px;height: 0px; margin-left: 30px;"><br>

                    <div class="items-center gap-5 mx-8">
                        <p class="" style="display: flex;
                        align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg></span>Coupe-file</p> <p class="" style="display: flex;
                          align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg></span>Avant-prèmiere</p><p class="" style="display: flex;
                            align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg></span>Ligne dédiée</p>
                    </div>
                    <p class="font-normal text-sm lg:text-md text-gray-400 mx-8 my-8">
                    Possibilité d’inviter un ami<br>
                    Accès aux collections privées<br><br>
                    Visites exclusives en compagnie des<br>
                    commissaires des expositions<br><br>
                    Invitations régulières à des visites<br>
                    découvertes et événements privés<br>
    
                    <h3 class="text-center" style="font-family: 'Montserrat';font-style: normal;font-weight: 700;font-size: 18px;color: #000000;text-transform: uppercase;line-height: 22px;">DEVENEZ MEMBRE</h3>
                </div>

        </div>



        <div class="flex flex-col md:flex-row md:items-center justify-center md:space-x-8 lg:space-x-12 mb-10 md:mb-20; margin-top:-520px;">
            
            <div class="bg-gray-100 rounded-lg mb-10 md:mb-0" style="width: 397px;height: 481px;margin-top:-210px;"><br>
                    <p class="text-center" style="color:black; font-weight: bold; font-size:22px;"> ART ENTHUSIAST </p>
                    <p style="color:black; font-weight: bold; font-size:22px;" class="text-center">100€/an</p><br>
                    <hr class="text-center" style="border: 1px solid #000000;width: 331px;height: 0px; margin-left: 30px;"><br>

                    <div class="items-center gap-5 mx-8">
                        <p class="" style="display: flex;
                        align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg></span>Coupe-file</p> <p class="" style="display: flex;
                          align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg></span>Avant-prèmiere</p><p class="" style="display: flex;
                            align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg></span>Ligne dédiée</p>
                    </div>
                    <p class="font-normal text-sm lg:text-md text-gray-400 mx-8 my-8">
                    Possibilité d’inviter un ami<br>
                    Accès aux collections privées<br><br>
                    Visites exclusives en compagnie des<br>
                    commissaires des expositions<br><br>
                    Invitations régulières à des visites<br>
                    découvertes et événements privés.<br>
    
                    <h3 class="text-center" style="font-family: 'Montserrat';font-style: normal;font-weight: 700;font-size: 18px;color: #000000;text-transform: uppercase;line-height: 22px;">DEVENEZ MEMBRE</h3>
                </div>
    
                <div class="bg-gray-100 rounded-lg mb-10 md:mb-0" style="width: 397px;height: 481px; margin-top: -30px;"><br>
                    <p class="text-center" style="color:black; font-weight: bold; font-size:22px;"> ART ENTHUSIAST </p>
                    <p style="color:black; font-weight: bold; font-size:22px;" class="text-center">100€/an</p><br>
                    <hr class="text-center" style="border: 1px solid #000000;width: 331px;height: 0px; margin-left: 30px;"><br>

                    <div class="items-center gap-5 mx-8">
                        <p class="" style="display: flex;
                        align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg></span>Coupe-file</p> <p class="" style="display: flex;
                          align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg></span>Avant-prèmiere</p><p class="" style="display: flex;
                            align-items: center;"> <span style="margin-right:5px;color:#D8B64D!important;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg></span>Ligne dédiée</p>
                    </div>
                    <p class="font-normal text-sm lg:text-md text-gray-400 mx-8 my-8">
                    Possibilité d’inviter un ami<br>
                    Accès aux collections privées<br><br>
                    Visites exclusives en compagnie des<br>
                    commissaires des expositions<br><br>
                    Invitations régulières à des visites<br>
                    découvertes et événements privés<br>
    
                    <h3 class="text-center" style="font-family: 'Montserrat';font-style: normal;font-weight: 700;font-size: 18px;color: #000000;text-transform: uppercase;line-height: 22px;">DEVENEZ MEMBRE</h3>
                </div>
    
            </div>
    </div> <!-- container.// -->

</section>
<!-- book section //end -->

<!-- footer -->
<footer style= "background-color: #D2D5DA" class=" py-10 md:py-16">

    <div class="container max-w-screen-xl mx-auto px-4">

        <div class="flex flex-col lg:flex-row justify-between">
            <div class="text-center lg:text-left mb-10 lg:mb-0">
                <div class="flex justify-center lg:justify-start mb-5">
                    <img src="assets/image/footer-logo.png" alt="Image">
                </div>

                <p class="font-light text-gray-400 text-xl mb-10">Get your dream house with <br> D’house</p>

                <div class="flex items-center justify-center lg:justify-start space-x-5">
                    <a href="#" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-green-800 hover:text-white transition ease-in-out duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>

                    <a href="#" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-green-800 hover:text-white transition ease-in-out duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                    </a>

                    <a href="#" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-green-800 hover:text-white transition ease-in-out duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                </div>
            </div>

            <div class="text-center lg:text-left mb-10 lg:mb-0">
                <h4 class="font-semibold text-gray-900 text-2xl mb-6">Sitemap</h4>

                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Home</a>

                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Features</a>
                
                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Gallery</a>
                
                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Testimoni</a>
                
                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Book a meeting</a>
            </div>

            <div class="text-center lg:text-left mb-10 lg:mb-0">
                <h4 class="font-semibold text-gray-900 text-2xl mb-6">Landing</h4>

                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Mobile App</a>

                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Property</a>
                
                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Personal Website</a>
                
                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Web Developer</a>
                
                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Online Course</a>

                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Donation</a>
            </div>

            <div class="text-center lg:text-left">
                <h4 class="font-semibold text-gray-900 text-2xl mb-6">Utility</h4>

                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">FAQ</a>

                <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Terms &amp; Conditions</a>
            </div>
        </div>

    </div> <!-- container.// -->

</footer>
<!-- footer //end -->

<script>
    feather.replace()
</script>


</body>
</html>
