<?php


class Note
{
public $data;
public $next;
function __construct($data)
{
    $this->data = $data;
    $this->next = NULL;
}
function readNote(){
    return $this->data;
}
}