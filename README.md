# Knowtify-API-Codeigniter


Class for Codeigniter to use Knowtify (http://www.knowtify.io/). Knowtify is the smartest and easiest way to engage your users with email.

## How to Install

* Copy the contents of the library folder to the corresponding library folder in CodeIgniter
* Then create a new controller file - in my example I called mine knowtify.php
 
## Editing the files Yourname_Knowtify.php

Add the API key from Knowtify

```php
 public function __construct() {
  $this->_api = 'API KEY';
  $this->_URL = 'http://www.knowtify.io/api/v1';
  $this->_data = "/data";
  $this->_contacts = "/contacts";
  $this->_add = '/add';
  $this->_edit = '/edit';
  $this->_upsert = '/upsert';
  $this->_delete = '/delete';
  $this->_store = true;  // If you want to store everything in logs
} 
```

## Storing events in log

Create a new table in your database called knowtify_logs, the create statements are in the sql folder

```sql

CREATE TABLE `knowtify_log` (
  `idknowtify_log` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` varchar(45) DEFAULT NULL,
  `emaildata` longtext,
  `ip_address` varchar(45) DEFAULT NULL,
  `email_type` varchar(45) DEFAULT NULL,
  `action` varchar(45) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`idknowtify_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

```

In the Yourname_Knowtify change the $this->_store to be true.

### How to work with data.

**Adding Data**
This is the function to add data.
```php
public function AddKnowtifyData($data) {
return parent::_KnowtifyData($data, $this->_api, $this->_URL, $this->_data, $this->_edit);
}
```
How to use the add data function
```php
$notificationKnowtify = new Yourname_Knowtify();
$leadclient = $notificationKnowtify->AddKnowtifyData($data = array("data" => array("data" => "Added Data")));
```

**Adding Contact**
This is the function to insert or update data. If the contact is not in the database, the user is added to Knowtify if the user is already in Knowtify the contact details are updated. I did create functions for add and edit but by using upsert you avoid the hassel of knowing if the contact is in the database.
```php
 public function AddKnowtifyContacts($data) {
return parent::_KnowtifyData($data, $this->_api, $this->_URL, $this->_contacts, $this->_add);
}
```
How to use the add contact function
```php
$addKnowtify = new Yourname_Knowtify();
$addclient = $addKnowtify->UpsertKnowtifyContacts($data = array("contacts" => array("name" => "Fred Fox", "email" => "fred@fredfoc.com")));
```

## Author:

Donovan Maidens ( [@Anomalous_Bot](http://twitter.com/Anomalous_Bot) / [anomalous.co.za](http://anomalous.co.za) )