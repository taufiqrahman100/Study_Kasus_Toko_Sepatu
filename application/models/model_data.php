<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class model_data extends CI_Model
{
    public $harga;

    public function proses($data)
    {
        if ($data == "NIKE") {
            $this->harga = 375000;
        } elseif ($data == 'ADIDAS') {
            $this->harga = 300000;
        } elseif ($data == "KICKERS") {
            $this->harga = 250000;
        } elseif ($data == "EIGER") {
            $this->harga = 275000;
        } else {
            $this->harga = 400000;
        }

        return $this->harga;
    }
}