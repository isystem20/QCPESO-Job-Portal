<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/dompdf-master/src/Dompdf.php';

class Dompdf extends Dompdf
{
    function __construct()
    {
        parent::__construct();
    }
}