<?php

/*  */

echo 'hello world!';
echo serverAnswer();

function getLog() {

    var_dump('<pre>', $_SERVER);
}

function serverAnswer () {
    return "\n".'And see u soon!';
}

/**
 * Class Feature
 */
class Feature {
    private $password = 'YnNhm';

    public function __construct()
    {
        $this->password = '123';
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**/
}function name () {

}