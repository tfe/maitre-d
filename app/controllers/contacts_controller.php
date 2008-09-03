<?php

class ContactsController extends AppController {
	
	var $name = 'Contacts';
	
	public function add() {
	  if (!empty($this->data)) {
	    if ($this->Contact->save($this->data)) {
	      $this->flash('Thanks!', '/');
	    }
	  }
	}

}

?>