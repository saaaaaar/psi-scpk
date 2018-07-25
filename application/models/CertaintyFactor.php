<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CertaintyFactor extends CI_Model {
	//Perhitungan CF
	function hitung($mb1,$md1,$mb2,$md2,$mb3,$md3,$mbtb,$mdtb){
        $mb = $mb1 + $mb2 * (1 - $mb1); //Perhitungan pertama->KS AND KL
        $md = $md1 + $md2 * (1 - $md1);
        $mb = $mb + $mb3 * (1 - $mb); //Perhitungan kedua->KS AND KL AND KM
        $md = $md + $md3 * (1 - $md);
        $mb = $mb + $mbtb * (1 - $mb); //Perhitungan ketiga->KS AND KL AND KM AND TB
        $md = $md + $mdtb * (1 - $md);

        //Perhitungan mb akhir dan md akhir
        $cf = $mb - $md;
        return $cf;
    }
}

?>