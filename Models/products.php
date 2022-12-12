<?php
class Product
{
    public $animale;
    public $nome;
    public $prezzo;
    public $immagine;


    public function __construct(string $animale, string $nome, int $prezzo, string $immagine)
    {
        $this->animale = $animale;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
    }

    public function getPrice()
    {
        echo $this->prezzo;
    }
}

class Cibo extends Product
{
    public $peso;
    public $ingrediente;

    /**
     * 
     */
    public function __construct(string $animale, string $nome, int $prezzo, string $immagine, int $peso, string $ingrediente)
    {
        parent::__construct($animale, $nome, $prezzo, $immagine);
        $this->peso = $peso;
        $this->ingrediente = $ingrediente;
    }
}

class Gioco extends Product
{
    public $colore;
    public $materiale;

    /**
     * 
     */
    public function __construct(string $animale, string $nome, int $prezzo, string $immagine, string $colore, string $materiale)
    {
        parent::__construct($animale, $nome, $prezzo, $immagine);
        $this->colore = $colore;
        $this->materiale = $materiale;
    }
}

class Cuccia extends Product
{
    public $colore;
    public $materiale;
    public $grandezza;

    /**
     * 
     */
    public function __construct(string $animale, string $nome, int $prezzo, string $immagine, string $colore, string $materiale, string $grandezza)
    {
        parent::__construct($animale, $nome,  $prezzo,  $immagine);
        $this->colore = $colore;
        $this->materiale = $materiale;
        $this->grandezza = $grandezza;
    }
}

$cibocane = new Cibo("cane", "Cibo in scatolame", "12", "https://www.pacopetshop.it/9470-thickbox_default/aequilibriavet-mini-cibo-umido-per-cani.jpg", "15", "pesce");


$giocogatto = new Gioco("gatto", "Gioco in animale", "45", "https://www.jonicamangimi.com/1368-thickbox_default/palline-bitorzolute-gomma-gioco-per-gatti-set-da-4-pz-cm-35.jpg", "blu", "gomma");


$cucciacane = new Cuccia("cane", "cuccia in scatolame", "120", "https://m.media-amazon.com/images/I/71-tsDiw8iL._AC_SY355_.jpg", "gialla", "stoffa", "120mm");



$prodotti = [
    $cibocane,
    $giocogatto,
    $cucciacane
];
var_dump($prodotti);
