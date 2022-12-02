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
 

    
}
$compte1 = new CompteCourant('Benoit', 2000);

// On instancie en précisant le découvert
$compte2 = new CompteCourant('Benoit', 2000, 200);

