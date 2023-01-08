<?php

class Notes
{
    protected $note;
    protected $data;

    function __construct($note, $data)
    {
        $this->data = $data;
        $this->note = $note;
    }

    /*
     *
     *                  GETTERS
     *
     */
    function getNotes() {
        return $this->note;
    }

    function getData() {
        return $this->data;
    }


    /*
    *
    *                  SETTERS
    *
    */
    function setNotes($note) {
        $this->note = $note;
    }

    function getInfo(){
        return "<div style='background-color: ".$this->color."'><p>".$this->note."</p><p>".$this->label."</p></div>";
    }

    function __destruct()
    {
        unset($this->note);
        unset($this->label);
    }

}