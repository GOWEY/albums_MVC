<?php namespace models\album;

    function get($id = 0)
    {
        return \database\get("albums", $id);
    }

    function random() {
        return \database\random("albums");
    }

    function del($id) {
        \database\del("albums",$id);
    }

    function set($nom) {
        \database\set("albums",["nomAlb"=>$nom]);
    }
?>


