<?php
    //Classe utilisateur
    class Utilisateur {
        //Membres privés
        private $_nom;
        private $_prenom;
        private $_email;
        private $_mdp;

        //Attribut (publique)
        public $age;

        //Méthode (setter, mutateur)
        public function setNom($nom) {
            $this->_nom = $nom;
            //$this représente l'instance
            //le $ du membre disparaît avec $this
        }

        public function setPrenom($prenom) {
            $_prenom = $prenom;
        }

        //Méthode (getter,  accesseur)
        public function getNom() {
            return $_nom;
        }

        public function getPrenom() {
            return $_prenom;
        }

        public function NomComplet() {
            "return $this->_prenom $this->_nom";
        }
    }
?>

<?php
    $utilisateur1 = new Utilisateur();
    $utilisateur2 = new Utilisateur();

    $utilisateur1->setNom("Dupont");
    $utilisateur1->setPrenom("Jean");

    echo $utilisateur1->NomComplet();

    $utilisateur2->setNom("Brun");
    $utilisateur2->setPrenom("Peter");

    echo $utilisateur2->NomComplet();
?>