<?php

$names = ['a', 'b','c'];

foreach($names as $name) {
    echo $name . ', '; //period to seperate variables from str 
}

$person = [
    'age' => 23,
    'hair' => 'brown'
];

$task = [
    'title' => 'Finish Hw',
    'due' => 'today',
    'assigned_to' => 'me',
    'complete' => false
];

$task['title'] = 'asdaklsd';
$task[0] = "pos 0";

function dumper($one) {
    var_dump($one);
}

// dumper($task);

echo $task['title'];


$greeting = "test";

class Person {
    protected $description;
    protected $completed = "false";
    public function __construct($description) {
        $this-> description = $description;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function getDescription() {
        return $this->description;
    }
}

$per = new Person("desc");
echo $per->getDescription();
echo $per->isComplete();

require 'index.view.php';