<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This extends CI_Controller. 
 * 
 * @author Donovan Maidens
 * @date 30 March 2012
 * @version V1.0
 */

class Knowtify extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
    	// Load the libraries
        $this->load->library('CI_Knowtify','Yourname_Knowtify');
        // Create a notification object using 
        $notificationKnowtify = new Xpanda_Knowtify();
        $leadclient = $notificationKnowtify->AddKnowtifyData($data = array("data" => array("data" => "Added Data"));
    }
}