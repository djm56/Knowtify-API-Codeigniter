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
        // Load the libraries
        $this->load->library('CI_Knowtify','Yourname_Knowtify');
    }
    
    public function index() {
    	
        
        // Create a notification object using 
        $notificationKnowtify = new Yourname_Knowtify();
        $leadclient = $notificationKnowtify->AddKnowtifyData($data = array(
            "data" => array("data" => "Added Data")
        ));
    }
    
    // Add contact Example
    public function addcontact() {
        
        $notificationKnowtify = new Yourname_Knowtify();
        
        $addclient = $notificationKnowtify->UpsertKnowtifyContacts($data = array(
            "contacts" => array(
                "name" => "John",
                "email" => "john@test.com",
                "data" => array(
                    "category" =>"sports",
                    "followers" =>300
                )
            )
        ));  
    }
    
    // Delete a set of congtacts
    public function deletecontact() {
        
        $notificationKnowtify = new Yourname_Knowtify();
        
        $addclient = $notificationKnowtify->DeleteKnowtifyContacts($data = array(
            "contacts" => array(
                "john@test.com",
                "sam@test.com",
                "sarah@test.com",
                "mike@test.com",
                "jill@test.com",
                "ashley@test.com",
                "frank@test.com",
                "bill@test.com"
            )
        ));  
    }
    
    
}