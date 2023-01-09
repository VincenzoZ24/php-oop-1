<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Movie
    {
        public $titolo;
        public $durata;
        public $genere;

        public function __construct($titolo, $durata, $genere)
        {
            $this->titolo = $titolo;
            $this->setdurata($durata);
            $this->genere = $genere;
        }


        public function setdurata($durata)
        {
            if (is_integer($durata) && $durata >= 0) {
                $this->durata = $durata;
            }
            return $durata;
        }
    }

    $film1 = new Movie('Spiderman', 180 , 'Animazione');
    $film2 = new Movie('Top Gun', 200 , 'Azione');
    var_dump($film1);
    var_dump($film2);

    ?>
</body>

</html>