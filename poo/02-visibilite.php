<!doctype html>
<html lang="fr">
  <head>
    <title>Visibilité - cours programmation orientée objet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">POO : la programmation orientée objet</h1>
            <p class="lead text-center mt-3">La visibilité</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Introduction</h2>
                <p>La visibilité représente la portée de nos propriétés et de nos méthodes, elle définie à quel moment on pourra y accéder et à quel moment cela nous sera impossible.</p>

                <h3 class="text-secondary text-center">La visibilité <em>public</em></h3>
                <p>La visibilité <em>public</em> est celle que l'on utilise par défaut au sein de nos classes. Elle va permettre de définir qu'une propriété ou une méthode est accessible dans la classe en faisant <code>$this</code> mais aussi sur une page externe lorsque l'on fait un <em>require</em> de notre classe, comme on a pu le faire pour accéder à nos différents fichiers</p>
             
            </div> <!-- Fin de la col-12 -->
            
            <div class="col-12">
                <h2 class="text-center">Les propriétés</h2>
                <p>Sur nos différents objets (ou instanciations) nous allons avoir des propriétés, des variables. Un objet pourra contenir plusieurs propriétés mais aussi plusieurs méthodes: sur une classe MaDate on pourra imaginer des propriétés pour afficher le nombre de jours mais aussi des méthodes pour ajouter des jours ou des mois.</p>
            </div><!-- Fin de la col-12 -->

            <div class="col-12">
                <h2 class="text-center">Les méthodes</h2>
                <p>Comme nous en avons parlé au-dessus, les classes peuvent aussi contenir des méthodes. Ces dernières sont en effet des fonctions, appelées méthodes dans le cadre de la POO. Elles ont donc la même nomenclature qu'en procédural : <code>nomMethode();</code></p>
            </div><!-- Fin de la col-12 -->
            
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>