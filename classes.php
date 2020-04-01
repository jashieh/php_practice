<?php

class Comment {
    public $title;
    public $description;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function edit($comment) {
        //
    }
}


$test = new Comment('name');