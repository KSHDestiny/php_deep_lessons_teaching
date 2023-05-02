<?php
    class MySelf {
        public function name(){
            echo "I am Destiny. ";
            return $this;
        }

        public function age(){
            echo "I am 23. ";
            return $this;
        }

        public function job(){
            echo "I am a web developer. ";
            return $this;
        }
    }

    $destiny = new Myself;
    $destiny->name()->age()->job();
?>