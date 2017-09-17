<?php
require('fpdf.php');

class PDF extends FPDF
{
// Load data
    function LoadData($array)
    {
        //print_r($array);
        $data = array();
        foreach($array as $line){            
        $tes = array();
            foreach ($line as $key ) {
                $tes[] = trim($key);
            }
            $data[] = $tes;
        }
        return $data;
    }

// Simple table
    function BasicTable($header, $data)
    {
    // Header
        $this->Ln();
        foreach($header as $col)
            $this->Cell(70,7,$col,1);
        $this->Ln();
    // Data
        foreach($data as $row)
        {
            foreach($row as $col)
                $this->Cell(70,6,$col,1);
            $this->Ln();
        }
    }

}
?>