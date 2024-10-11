<?php
    class productturunan extends product
    {
        public function info()
        {
            echo "NAME $this->name";
            echo "<br>";
            echo "PRICE $this->price";
        }
    }
?>