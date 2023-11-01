<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
   <!--font awesome-->
   <script src="https://kit.fontawesome.com/f26e3938d1.js" crossorigin="anonymous"></script>
   <!--boostrap-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
  <!--favicon-->
 
   <!--style CSS-->
    <link rel="stylesheet" href="style.css">
    <title>Acceuil│ Spécialisé dans le marquage et l'emballage industrielle</title>
</head>
<body>
    <header>
    <nav>
        <?php include 'menu.php'; ?>
    </nav>
    </header>
    
    <main>
        <!--first carroussel-->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/foenix.png" class="d-block w-100" alt="ec-jet-chineese" width="50%" height="50%">
              </div>
              <div class="carousel-item">
                <img src="image/foenix tête.png" class="d-block w-100" alt="foenix" width="50%"; height="50%">
              </div>
              <div class="carousel-item">
                <img src="image/siat 2.png" class="d-block w-100" alt="petit caractere" width="50%" height="50%">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

     </main>
    
     <!--pieds de page-->
    <?php include 'footer.php';?>
    
</body>
</html>