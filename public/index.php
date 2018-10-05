<?php
/**
 * Created by PhpStorm.
 * User: briannap
 * Date: 10/2/18
 * Time: 9:01 PM
 */

main::start("example.csv");

class main {

    static public function start() {
        $records= csv::getRecords();
        $table =html::generateTable($records);
        system::printPage($table);


    }
}

class csv {

    static public function getRecords() {

    }
}

class html {
    static public function generateTable($records) {

        $table = 'test';

        return $table;
    }
}




class system {
    static public function printPage($page) {

        echo $page;

    }
}
