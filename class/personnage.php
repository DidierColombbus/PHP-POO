<?php   
    // Pour créer une class, on va utiliser le mot-clé class suivi du nom de notre classe, avec une majuscule. Le nom du fichier, lorsqu'il contient une class doit prendre une majuscule. Attention un fichier de class ne contient que les informations relatives à la classe à l'intérieur, l'affichage se fera sur une autre page.

    class Personnage
    {
        // on définit des caractéristiques de nos personnages grâce à des propriétés. 
        protected $vie = 80;
        public $atk = 20;
        // c'est sûrement par convention et pour s'y retrouver dans le code qu'on déclare notre propriété à cet endroit (on pourrait définir le nom directement dans la page affichage.php mais c'est fortement déconseillé).
        protected $nom;
        // public est la visibilité de notre variable, on en reparlera plus tard pour définir ce qu'elle veut dire, mais il existe aussi par exemple protected.

        // lorsque l'on crée une instance de classe, on fait appel à un constructeur. Si on veut initialiser une donnée dés la création il faudra utiliser la méthode __construct grâce à cette méthode tous les paramètres qui seront passés entre parenthèses permettront de définir les données voulues.

        // En l'occurence, nous voulons définir le nom de notre personnage dés sa création

        public function __construct($nom){
            // grâce à la façon de faire qui suit nous allons pouvoir sauvegarder le nom du personnage passé lors de l'instanciation. Le constructeur permet en fait d'implémenter des propriétés de manière initiale
            $this->nom=$nom;
        }

        // Les GETTERS

    public function getNom(){
        return $this-> nom;
    }

        // Les SETTERS

    public function setNom($nom){
        $this->nom = $nom;
    }

    





    }

?>