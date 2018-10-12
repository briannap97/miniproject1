<?php
/**
 * Created by PhpStorm.
 * User: briannap
 * Date: 10/2/18
 * Time: 9:01 PM
 */

main::start("example.csv");

class main {
    static public function start($filename) {

        $records = csv::getRecords($filename);

        $record = recordFactory::create();

        print_r($record);
    }
}


class csv {

    static public function getRecords($filename) {

        $file = fopen($filename, "r");

        while(! feof($file))
        {
            $record = fgetcsv($file);

            $records[] = $record;
        }

        fclose($file);

        return $records;
    }
}

class record{

}

class recordFactory{

    public static function create(Array $array = null) {

        $record = new record();

        return $record;
    }
}