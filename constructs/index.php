<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\04\\";
require_once $basePath . "functions.php";

abstract class ArchievementType {

    public function name() {

        $class = (new ReflectionClass($this))->getShortName();

        // FirstThousandPoints -> First Thousand Points

        return trim(preg_replace('/[A-Z]/', '$0', $class));
    }

    public function icon() {
        return strtolower(str_replace(' ', '-', $this->name() . '.png'));
    }

    abstract public function qualifier($user);
}

class FirstThousandPoints extends ArchievementType {

    public function qualifier($user) {

    }
}

class FirstBestAnswer extends ArchievementType {

    // public function qualifier($user) {}
}


$show = new FirstBestAnswer();

dd($show->qualifier('victor'));