<?php
interface Hewan {
    public function Berjalan();
    public function Makan();
    public function Bersuara();
}

class Monyet implements Hewan {
    public function Berjalan() {
        echo "Monyet Berjalan";
    }
    public function Makan() {
        echo "Monyet Makan";
    }
    public function Bersuara() {
        echo "Monyet Bersuara";
    }
    
    private function Berkendara() {
        echo "Monyet Berkendara Naik Sepeda"; 
    }
    public function Lakukan($Aktivitas) {
        $this->$Aktivitas();
    }
}

$Monyet1 = new Monyet();
$Monyet1->Lakukan("Berjalan");
echo "<br>";
$Monyet1->Lakukan("Makan");
echo "<br>";
$Monyet1->Lakukan("Bersuara");
echo "<br>";
$Monyet1->Lakukan("Berkendara");
