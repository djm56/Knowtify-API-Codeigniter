<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CI_Knowtify
 * =======================
 * This class is designed is used to communicate with knowtify's API  (www.knowtify.io)
 * 
 * @author Donovan Maidens <donovan@anomalous.co.za>
 * @date 16 June 2014
 * @version V1.0
 */

class CI_Knowtify {
    
    /**
     * API Key supplied by Knowtify
     * @var string
     **/
    protected $_api = null;
    /**
     * Base URL to Knotify 
     * @var string
     **/
    protected $_URL = null;
    /**
     * Extra URL for data
     * @var string
     **/
    protected $_data = null;
    /**
     * Extra URL for contacts
     * @var string
     **/
    protected $_contacts = null;
    /**
     * Extra URL for Adding Contact 
     * @var string
     **/
    protected $_add = null;
    /**
     * Extra URL for editing contact
     * @var string
     **/
    protected $_edit = null;
    /**
     * Extra URL for adding new or editing existing contact
     * @var string
     **/
    protected $_upsert = null;
    /**
     * Extra URL for deleting a contact
     * @var string
     **/
    protected $_delete = null;
    
    /**
     * This protected function communicates Knowtify
     * 
     * @access	protected
     * @param	string $data  
     * @param   string $api 
     * @param   string $url 
     * @param   string $type 
     * @param   string$crud
     * @return	void|boolean
     */
    
    protected function _KnowtifyData($data,$api,$url,$type,$crud) {
        $location = $url . $type . $crud;
        $header = array(
            'Content-Type: application/json', 
            'Authorization: Token token="' . $api . '"'
        );
        $json_data = json_encode($data);
        $ch = curl_init($location);                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);                                                                                                                   
        
        $output = curl_exec($ch);

        $result = json_decode($output);
        
        var_dump($result);
    }
}