<?php

//if(isset($_SESSION["role"] && $_SESSION["role"] == ""))


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanaat Beladi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
  <header>
    <nav class="w-lg-75 mx-2 mx-lg-auto position-relative z-2 px-lg-3 py-0 shadow-5 p-0">
        <div class="navbar navbar-expand-lg navbar-dark pt-3 pb-3" id="navbar">
            <div class="container px-sm-0 ">
                <a class="navbar-brand d-inline-block w-lg-64" href="#">
                    LOGO
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarCollapse">
                    <ul class="navbar-nav gap-3 mx-lg-auto">
                            <li class="nav-item ">
                                <a class="nav-link rounded-pill" href="index.php" aria-current="page">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill" href="./views/marketplace.php">Marketplace</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill" href="./views/Artisan.php">Artisant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill" href="./views/musee.php">Musee</a>
                            </li>
                        </ul>
                    <div class="navbar-nav align-items-lg-center justify-content-end gap-2 ms-lg-4 w-lg-64">
                        <a href="signup.php" class="btn btn-sm btn-white nav-link border-0 rounded-pill w-100 w-lg-auto mb-4 mb-lg-0" id="lastElementInNavbar">Get started</a>
                        <a href="./logaut.php">Logout</a>
                      </div>
                </div>
            </div>
          </div>
      </nav>
</header>
    <section class="container-fluid text-white sliderParent">
      <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item w-100 active p-5 allSliders" style="background-image: url(img/swipImg.jpg);">
              <div class="d-flex flex-column align-items-center">
                <span class="w-50 mt-5">Découvrez l'essence du Maroc</span>
                <h1 class="display-1 w-50 mb-5">Bienvenue à Sanaat Beladi - Là où la tradition rencontre l'art</h1>
              </div>
            </div>
            <div class=" carousel-item w-100 p-5 allSliders" style="background-image: url(img/swapImg2.jpg);">
              <div class="d-flex flex-column align-items-center">
                <span class="w-50 mt-5">Découvrez l'essence du Maroc</span>
                <h1 class="display-1 w-50 mb-5">Bienvenue à Sanaat Beladi - Là où la tradition rencontre l'art</h1>
              </div>
            </div>
            <div class="ms-0 w-100 p-5 allSliders" style="background-image: url(img/swapImg3.jpg);">
              <div class="d-flex flex-column align-items-center">
                <span class="w-50 mt-5">Découvrez l'essence du Maroc</span>
                <h1 class="display-1 w-50 mb-5">Bienvenue à Sanaat Beladi - Là où la tradition rencontre l'art</h1>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </section>
    <section id="allBlogs">
      <div class="container d-flex flex-column align-items-center card p-5 mt-5">
        <div>
            <h2 class="display-1 text-center pb-2">Découvrez l'essence du Maroc</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 d-flex align-content-center justify-content-center">
                <p class="w-100 p-5 text_for_section1">Plongez dans le monde vibrant de l'artisanat marocain. Chez Sanaat Beladi, nous vous proposons une sélection de trésors authentiques, fabriqués à la main. Des souks animés au seuil de votre porte, découvrez le riche patrimoine et l'artisanat exquis du Maroc.</p>
            </div>
            <div class="col-lg-6 col-sm-12">
                <img src="img/Image1BlogIndex.png" class="w-100" alt="">
            </div>
        </div>
      </div>
      <div class="container mt-5">
            <div class="row  mb-5">
                <div class="col-lg-6 col-sm-12 card p-5">
                    <div >
                        <img src="img/Image2BlogIndex.png" class="w-100" alt="">
                    </div>
                    <div>
                        <h3>Parer de mystère marocain</h3>
                        <p>Des pièces d'inspiration berbère aux créations contemporaines, notre sélection de bijoux incarne l'élégance et le patrimoine.</p>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12 card p-5">
                    <div>
                        <img src="img/Image3BlogIndex.png" class="w-100" alt="">
                    </div>
                    <div>
                        <h3>Découvrez l'élégance</h3>
                        <p>Plongez dans notre collection de céramiques peintes à la main, où chaque pièce raconte une histoire de tradition et d'art.</p>
                    </div>
                </div>
            </div>
            <div id="our_Shop_Here" class="d-flex justify-content-end mt-5">
                <a class="btn btn-lg btn-dark rounded-5 display-1">Our Shop Here</a>
            </div>
      </div>
    </section>
        <section class="container text-white mt-5 mb-5 p-5" style="background-image: url(img/AuthenticitéImg.png);">
            <h2 class="text-center display-6 pb-5">Authenticité et qualité</h2>
            <div class="d-flex justify-content-center w-100 pt-3">
                <p class="w-75 h3">Chez Sanaat Beladi , nous nous engageons à ne proposer que les meilleurs produits artisanaux marocains. Chaque article est trié sur le volet, ce qui garantit son authenticité et sa qualité.</p>
            </div>
        </section>
        <section id="meet_The_Makers" class="container">
            <div class="d-flex justify-content-center p-5">
                <h2>Meet the Makers: The Soul of Moroccan Artistry</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class="w-100" src="img/meetThemakersImg1.png" alt="">
                </div>
                <div class="col-lg-6 col-sm-12 p-5">
                    <p class="text_for_section">Each handcrafted piece in our collection tells a story of tradition, passion, and unparalleled skill. In our 'Artisan Spotlight', we take you behind the scenes to meet the remarkable individuals whose hands and hearts bring Moroccan artisanate to life. Discover their stories, their inspirations, and the heritage that shapes their work.</p>
                </div>
            </div>
        </section>
        <section id="meet_One_Of_our_team" class="container bg-dark text-white">
            <div class="text-center mt-5 pt-5">
                <h3 class="display-3">Meet one of our team</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 p-5">
                    <img class="w-100" src="img/ourteamimg1.png" alt="">
                </div>
                <div class="col-lg-6 col-sm-12 p-5">
                        <h4 class="display-4">Her Story</h4>
                        <p class="display-6">Amina El Fassi, a master ceramicist from Fes, carries on a family tradition steeped in over 25 years of history. From a young age, she watched her father transform clay into beautiful art, instilling in her a deep passion for Moroccan ceramics. Today, Amina skillfully blends this inherited expertise with her own artistic vision, creating pieces that not only reflect the rich heritage of Fes but also tell the story of her family's enduring legacy in the world of artisanal craft.</p>
                        <span>Craft : Master Ceramicist</span>
                        <br>
                        <span>Location: Fes, Morocco</span>
                </div>
            </div>
        </section>
        <section id="faq_Section" class="container">
          <div class="mt-5 mb-5 text-center">
            <h2 class="display-1">frequently asked question</h2>
          </div>
          <div class="container faqSection">
            <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn ">What is Senaat-Beladi?</span>
            <div class="active_toggle">
              <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
            </div>
          </div>
          <div class="container">
            <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">What kind of products does Senaat-Beladi offer?</span>
            <div class="active_toggle">
              <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
            </div>
          </div>
          <div class="container faqSection">
            <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">Are all the products sold on Senaat-Beladi authentic?</span>
            <div class="active_toggle">
              <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
            </div>
          </div>
          <div class="container faqSection">
            <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">Do you offer international shipping?</span>
            <div class="active_toggle">
              <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
            </div>
          </div>
          <div class="container faqSection">
            <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">What payment methods are accepted on Senaat-Beladi?</span>
            <div class="active_toggle">
              <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
            </div>
          </div>
          <div class="container faqSection">
            <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">How long does it take to receive my order?</span>
            <div class="active_toggle">
              <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
            </div>
          </div>
          <div class="container faqSection">
            <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">Can I return or exchange a product?</span>
            <div class="active_toggle">
              <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
            </div>
          </div>
        </section>
        <footer class="container-fluid my-5">
            <div class="text-center text-lg-start text-white" >
                <!-- style="background-color: #45526e -->
              <div class="container p-4 pb-0">
                <section class="">
                  <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold"> Sanaat Beladi </h6>
                      <p>
                        Plongez dans le monde vibrant de l'artisanat marocain. 
                        Chez Sanaat Beladi, nous vous proposons une sélection 
                        de trésors authentiques.
                      </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Les pages</h6>
                      <p>
                        <a class="text-white">Accueil</a>
                      </p>
                      <p>
                        <a class="text-white">Marketplace</a>
                      </p>
                      <p>
                        <a class="text-white">Artisant</a>
                      </p>
                      <p>
                        <a class="text-white">Musee</a>
                      </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">
                        Useful links
                      </h6>
                      <p>
                        <a class="text-white">Your Account</a>
                      </p>
                      <p>
                        <a class="text-white">Get started</a>
                      </p>
                      <p>
                        <a class="text-white">Shipping Rates</a>
                      </p>
                      <p>
                        <a class="text-white">Help</a>
                      </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                      <p><i class="fas fa-home mr-3"></i> Youssofia, 6FWH+X8 Youssoufia, Morocco</p>
                      <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                      <p><i class="fas fa-phone mr-3"></i> + 212 6 00 00 00 00</p>
                      <p><i class="fas fa-print mr-3"></i> + 212 6 00 00 00 00</p>
                    </div>
                  </div>
                </section>
                <hr class="my-3">
                <section class="p-3 pt-0">
                  <div class="row d-flex align-items-center">
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                      <div class="p-3">
                        © 2023 Copyright: 2b || !2b
                        <a class="text-white" href="#"></a>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
        </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>
