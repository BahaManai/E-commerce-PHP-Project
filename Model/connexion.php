<?php
class connexion
{
    private $connexion;
    function __construct()
    {
        $dns = 'mysql:host=localhost;dbname=e_commerce';
        $user = 'root';
        $mdp = '';
        try {
            $this->connexion = new PDO($dns, $user, $mdp);
        } catch (Exception $e) {
            echo "Problème de connexion !<br>" . $e->getMessage();
        }
    }

    public function getConnexion() //PDO
    {
        return $this->connexion;
    }
}
