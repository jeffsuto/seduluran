<?php

  class Enkripsi extends CI_Encryption
  {
    function enkrip($str)
    {
        return str_replace(array('+', '=', '/', '%'), array('!', '*', '~', '^'), $str);
    }

    function dekrip($str)
    {
        return str_replace(array('!', '*', '~', '^'), array('+', '=', '/', '%'), $str);
    }
  }


?>
