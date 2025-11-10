<?php
final class Tigger {
    private static $instance;
    private int $roarCount = 0;

    private function __construct() {
        echo "Building character...\n";
    }

    private function __clone() {
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar() {
        echo "Grrr!\n";
        $this->roarCount++;
    }

    public function getRoarCount() {
        echo "Tigger has roared " . $this->roarCount . " times\n";
    }
}