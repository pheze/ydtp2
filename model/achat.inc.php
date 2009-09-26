<?php

require 'db.php';


class Achat {
    public $id;

    public function load($id) {
        $row = query_get("Achats", "id = $id");
        $this->$id = $row['id'];
    }
}

$achat = Achat();

$achat->load();

echo $achat;

?>
