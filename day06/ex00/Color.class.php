<?php
    class Color { 
        public $red;
        public $green;
        public $blue;
        public static $verbose = false;
        /*
            bits in php are represented in FULL endian
            all the bits (up to 63 bits) are shown

            red = 0xff0000      OR      255,0,0     OR      11111111 00000000 00000000
            green = 0x00ff00    OR      0,255,0     OR      00000000 11111111 00000000
            blue = 0x0000ff     OR      0,0,255     OR      00000000 00000000 11111111
        */
        public function __construct($rgbkey){
            //FORMAT: 'rgb' => #code
            //isset checks if value exists in dict AND that it is not NULL
            if(isset($rgbkey['rgb'])){
                $rgb = intval($color["rgb"]);
                $this->red = $rgb & 0xff;         //no padding, adready 24 bits 
                $this->green = ($rgb << 8)& 0xff; // padding, is 16 bits
                $this->blue = ($rgb << 16) & 0xff; // padding, is 8 bits
            }
            //FORMAT: 'red' => #code
            else {
                $red = intval($rgbkey['red']);
                $green = intval($rgbkey['green']);
                $blue = intval($rgbkey['blue']);
            }
            if (self::$verbose){
                echo ;
            }
            function __toString(){
                
            }

            function doc(){
                $file = file_get_contents('Color.doc.txt');
                if( $file == false ) {
                echo ( "Error in opening file" );
                exit();
                }
                is_wsstring();

                fclose( $file );
                echo $file;
            }

    } 
?>