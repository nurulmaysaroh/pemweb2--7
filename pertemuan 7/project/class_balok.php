<?php
    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;

        const PHI = 3.14;
    
        public function __construct($p, $l, $t) {
            $this->panjang = $p;
            $this->lebar = $l;
            $this->tinggi = $t;
        }
    
        public function getLuasPermukaanBalok() {
			$luas = 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
            return $luas;
		}

        public function getVolume() {
            return $this->panjang * $this->lebar * $this->tinggi;
        }
    }
?>