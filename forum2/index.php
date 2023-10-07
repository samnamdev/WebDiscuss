<!doctype html>
<html lang="eg">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Forun--2</title>
  </head>
  <body>

         <?php include 'dbconnect.php'?>
         <?php include 'header.php'?>




    <h3 class="text-center my-3">Forum-practice</h3>

<div class="container my-4 text-center">
    <p class="d-inline-flex gap-1">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="https://en.wikipedia.org/wiki" role="button" aria-expanded="false" aria-controls="collapseExample">
    Click Here
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Rabindranath Tagore
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  Rabindranath Tagore FRAS (/rəˈbɪndrənɑːt tæˈɡɔːr/ ⓘ; pronounced [roˈbindɾonatʰ ˈʈʰakuɾ];[1] 7 May 1861[2] – 8 August 1941[3]) was an Indian poet, writer, playwright, composer, philosopher, social reformer and painter.[4][5][6] He reshaped Bengali literature and music as well as Indian art with Contextual Modernism in the late 19th and early 20th centuries. Author of the "profoundly sensitive, fresh and beautiful" poetry of Gitanjali,[7] he became in 1913 the first non-European and the first lyricist to win the Nobel Prize in Literature.[8] Tagore's poetic songs were viewed as spiritual and mercurial; where his elegant prose and magical poetry were widely popular in the Indian subcontinent.[9] He was a fellow of the Royal Asiatic Society. Referred to as "the Bard of Bengal",[10][5][6] Tagore was known by sobriquets: Gurudeb, Kobiguru, and Biswokobi
  </div>
</div>
</div>


<div class="container">

<?php include 'tabu.php'?>
</div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
  </body>
</html>