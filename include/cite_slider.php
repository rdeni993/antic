<?php 
/**
 * =============================================================
 * =============================================================
 * Cite Slider
 * =============================================================
 * =============================================================
 * 
 */

 class Cite_Slider{

    public function __construct(){
        
        // Get Resource File
        $res_file = file_get_contents( get_template_directory_uri() . "/js/resources.json");

        if( $res_file ){

            $json_res_file = json_decode($res_file);

            for( $i = 0; $i < sizeof($json_res_file->antic); $i++ ){

                echo $json_res_file->antic[$i]->cite;

            }

        }else{
            echo "We cannot access to this file!";
        }

    }

 }