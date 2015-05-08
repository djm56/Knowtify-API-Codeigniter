<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This extends CI_Knowtify. 
 * 
 * @author Donovan Maidens
 * @date 30 March 2012
 * @version V1.0
 */
class Yourname_Knowtify extends CI_Knowtify { 
    
    public function __construct() {
        $this->_api = 'API KEY';  
        $this->_URL = 'http://www.knowtify.io/api/v1';
        $this->_data = "/data";
        $this->_contacts = "/contacts";
        $this->_add = '/add';    
        $this->_edit = '/edit';   
        $this->_upsert = '/upsert';   
        $this->_delete = '/delete';
        $this->_store = true;
    } 
    
    /**
     * Add or Edit Data for Knowtify
     * 
     * 
     * @param string $data
     * @return boolean 
     */
    public function AddKnowtifyData($data) {      
        return parent::_KnowtifyData($data, $this->_api, $this->_URL, $this->_data, $this->_edit, $this->_store);
    }
    
    /**
     * Add Contacts Knowtify
     * 
     * 
     * @param string $data
     * @return boolean 
     */
    public function AddKnowtifyContacts($data) {      
        return parent::_KnowtifyData($data, $this->_api, $this->_URL, $this->_contacts, $this->_add, $this->_store);
    }
    
    /**
     * Edit Contacts Knowtify
     * 
     * 
     * @param string $data
     * @return boolean 
     */
    public function EditKnowtifyContacts($data) {      
        return parent::_KnowtifyData($data, $this->_api, $this->_URL, $this->_contacts, $this->_edit, $this->_store);
    }
    
    /**
     * Update or Add Contacts Knowtify
     * 
     * 
     * @param string $data
     * @return boolean 
     */
    public function UpsertKnowtifyContacts($data) {      
        return parent::_KnowtifyData($data, $this->_api, $this->_URL, $this->_contacts, $this->_upsert, $this->_store);
    }
    
    /**
     * Edit Contacts Knowtify
     * 
     * 
     * @param string $data
     * @return boolean 
     */
    public function DeleteKnowtifyContacts($data) {      
        return parent::_KnowtifyData($data, $this->_api, $this->_URL, $this->_contacts, $this->_delete, $this->_store);
    }
}
