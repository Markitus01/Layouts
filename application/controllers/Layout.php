<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Layout extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $data_h = array 
        (
            "nom" => "Markitos",
        );

        $data_f = array 
        (
            "foot" => "EL GRAN QUESO",
        );
        //Null implica que no hi ha arguments, i true carrega el string a la variable sense fer l'echo
        $this->header = $this->load->view("common/header", $data_h, true);
        $this->footer = $this->load->view("common/footer", $data_f, true);
    }
    
    public function index()
    {
        $this->load->helper('form');
        $this->load->helper('download');

        force_download("C:\Users\marks\Desktop\INFO.png", NULL);

        $data_i = array
        (
            "input" => array
            (
                "id" => "nom",
                "name" => "nom"
            ),

            "joves" => array
            (
                "Canuto" => "Canutito",
                "Canelon" => "Camarao",
            ),

            "vells" => array
            (
                "Turko" => "Turkaco",
                "Dane" => "Pane"
            )
        );

        if (isset($_POST["send"]))
        {
            var_dump($_POST);
        }

        echo $this->header;
        echo $this->load->view("layout/index", $data_i, true);
        echo $this->footer;
    }
}