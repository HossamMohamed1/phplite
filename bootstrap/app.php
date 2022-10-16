<?php
 
use phplite\Bootstrap\App;
 class Application {
    /**constructor */
    private function __construct(){

    }
    /**run function */
    public static function run(){
        /**define */
        define('Root',realpath(path:__DIR__.'/..'));
        define('DS',DIRECTORY_SEPARATOR);
        /**Run the App */
        App::run();
    }
 }