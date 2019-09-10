<?php
include_once 'Note.php';

class LinkedList
{
private $firstNote;
private $lastNote;
private $count;
public function __construct()
{
    $this->firstNote = NULL;
    $this->lastNote = NULL;
    $this->count = 0;
}
public function insertFirst($data){
    $link = new Note($data);
    $link->next = $this->firstNote;
    $this->firstNote = $link;
    if ($this->lastNote == NULL){
        $this->lastNote = $link;
    }
    $this->count++;
}
public function insertLast($data){
    if ($this->firstNote != NULL){
        $link = new Note($data);
        $this->lastNote->next = $link;
        $link->next = NULL;
        $this->lastNote = $link;
        $this->count++;
    }else{
        $this->insertFirst($data);
    }
}
public function totalNote(){
    return $this->count;
}
public function readList(){
    $listData = array();
    $current = $this->firstNote;

    while ($current != NULL){
        array_push($listData, $current->readNote());
        $current = $current->next;
    }
    return $listData;
}
}
