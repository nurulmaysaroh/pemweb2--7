<?php

    class bola {
        // Property
        private $r;
        const PHI = 3.14;

        // Method
        function __construct($jari){
            $this->r = $jari;
        }

        function getLuasPermukaanBola() {
            $luas = 4 * self::PHI * pow($this->r,2);
            return $luas;
        }

        function getVolBola() {
            $vol = 4/3 * self::PHI * pow($this->r,2);
            return $vol;
        }
    }

?>