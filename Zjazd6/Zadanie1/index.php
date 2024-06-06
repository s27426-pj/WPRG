<?php

class NoweAuto {
    private $model;
    private $cenaEuro;
    private $kursEuroPLN;
    public function __construct(string $model, float $cenaEuro, float $kursEuroPLN) {
        $this->model = $model;
        $this->cenaEuro = $cenaEuro;
        $this->kursEuroPLN = $kursEuroPLN;
    }

    public function getModel(): string {
        return $this->model;
    }
    public function getCenaEuro(): float {
        return $this->cenaEuro;
    }
    public function getKursEuroPLN(): float {
        return $this->kursEuroPLN;
    }
    public function setKursEuroPLN(float $kursEuroPLN) {
        $this->kursEuroPLN = $kursEuroPLN;
    }
    public function obliczCene(): float {
        return $this->cenaEuro * $this->kursEuroPLN;
    }
}

class AutoZDodatkami extends NoweAuto {
    private $alarm;
    private $radio;
    private $klimatyzacja;
    public function __construct(string $model, float $cenaEuro, float $kursEuroPLN, float $alarm, float $radio, float $klimatyzacja) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }

    public function getAlarm(): float {
        return $this->alarm;
    }
    public function getRadio(): float {
        return $this->radio;
    }
    public function getKlimatyzacja(): float {
        return $this->klimatyzacja;
    }
    public function obliczCene(): float {
        $cenaPodstawowaPLN = parent::obliczCene();
        return $cenaPodstawowaPLN + $this->alarm + $this->radio + $this->klimatyzacja;
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    private $Ubezpieczenie;
    private $Wiek;

    public function __construct(string $model, float $cenaEuro, float $kursEuroPLN, float $alarm, float $radio, float $klimatyzacja, float $Ubezpieczenie, int $Wiek) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja);
        $this->Ubezpieczenie = $Ubezpieczenie;
        $this->Wiek = $Wiek;
    }
    public function getUbezpieczenie(): float {
        return $this->Ubezpieczenie;
    }
    public function getWiek(): int {
        return $this->Wiek;
    }
    public function obliczCene(): float {
        $cena = parent::obliczCene();
        $znizka = 1 - ($this->Wiek / 100);
        return $this->Ubezpieczenie * ($cena * $znizka);
    }
}
/*
                Test
$noweAuto = new NoweAuto("Model XYZ", 40000, 4.5);
echo "Model XYZ: " . $noweAuto->obliczCene() . " PLN";
$autoZDodatkami = new AutoZDodatkami("Model ZYX", 44000, 4.5, 4000, 500, 4000);
echo "<br>Model ZYX: " . $autoZDodatkami->obliczCene() . " PLN";
$ubezpieczenie = new Ubezpieczenie("Model D", 440000, 4.5, 4400, 4000, 4400, 0.05, 4);
echo "<br>Model D: " . $ubezpieczenie->obliczCene() . " PLN";*/
?>
