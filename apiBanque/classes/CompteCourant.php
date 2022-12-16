<?php
    class CompteCourant extends Compte
    {
    /*
     * Découvert autorisé
     * @var int
     */
    private $decouvert;

    /*
     * Constructeur du compte courant
     * @param string $titulaire Titulaire du compte
     * @param float $solde Solde du compte
     * @param int $decouvert Découvert autorisé
     * @return void 
     */
    public function __construct(string $titulaire, float $solde, int $decouvert = 500)
    {
        // On appelle le constructeur du parent
        parent::__construct($titulaire, $solde);

        // On définit les propriétés "locales"
        $this->decouvert = $decouvert;
        $this->titulaire = $titulaire;
        $this->solde = $solde;

    }


    public function retirer($montant){
        // On vérifie si le découvert permet le retrait
        if($this->solde - $montant > -$this->decouvert){
            $this->solde -= $montant;
        }else{
            echo 'Solde insuffisant';
        }
    }


    public function getDecouvert()
    {
        return $this->decouvert;
    }

    public function setDecouvert(int $decouvert) : self
    {
        $this->decouvert = $decouvert;

        return $this;
    }
 
    public static function getById(int $idUser, int $idCompteCourant)
    {
        // Prepare the SELECT statement
        $sql = "SELECT * FROM compteCourant WHERE id_user = :idUser AND idCompteCourant = :idCompteCourant";
        // Préparation de la requete
        $query = db()->prepare($sql);
        // Bind the parameters
        $query->bindParam(':idUser', $idUser);
        $query->bindParam(':idCompteCourant', $idCompteCourant);
        // Execution de la requete
        $query->execute();
        // Récuperation des données s'il y en a 
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        // Retourne le tableau avec les données
        if ($result) {
            $compteCourant = new CompteCourant($result['titulaire'], $result['solde'], $result['decouvert']);
            return $compteCourant;
        }

        // Otherwise, return null
        return null;
    }

    public function getSolde()
    {
    return $this->solde;
    }


    
}
$compte1 = new CompteCourant('Benoit', 2000);

// On instancie en précisant le découvert
$compte2 = new CompteCourant('Benoit', 2000, 200);

