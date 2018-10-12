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



    }
}


class csv {

    static public function getRecords($filename) {

        $file = fopen($filename, "r");

        while(! feof($file))
        {
            $record = fgetcsv($file);

            $records[] = recordFactory::create($record);
        }

        fclose($file);

        return $records;
    }
}

class record{
    public function  __construct(Array $record = null)
    {
        

        $this->createProperty();

        print_r($this);
    }
    public function createProperty($name = 'first', $value = 'Brianna') {

        $this->{$name} = $value;

    }
}

class recordFactory{

    public static function create(Array $array = null) {

        $record = new record($array);

        return $record;
    }
}