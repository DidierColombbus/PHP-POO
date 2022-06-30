<?php   
    // Pour créer une class, on va utiliser le mot-clé class suivi du nom de notre classe, avec une majuscule. Le nom du fichier, lorsqu'il contient une class doit prendre une majuscule. Attention un fichier de class ne contient que les informations relatives à la classe à l'intérieur, l'affichage se fera sur une autre page.

    class Personnage
    {
        // on définit des caractéristiques de nos personnages grâce à des propriétés. 
        protected $vie = 80;
        public $atk = 20;
        // c'est sûrement par convention et pour s'y retrouver dans le code qu'on déclare notre propriété à cet endroit (on pourrait définir le nom directement dans la page affichage.php mais c'est fortement déconseillé).
        protected $nom;
        // public est la visibilité de notre variable, on en reparlera plus tard pour définir ce qu'elle veut dire.





    }

?>