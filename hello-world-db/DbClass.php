<?php

class DbClass implements InterfaceRest {
	/* 
	 * @see InterfaceRest::messageReceived()
	 */
	public function messageReceived($from, $message) {
		
        global $db;
        $message = trim($message);
		
        $message = strtolower($message);
        
        $query = 'SELECT response FROM example_table where request="'.$message.'"';
		$result = $db->read_query($query);
        
        if ($result->num_rows > 0){
   	        $arr = $result->fetch_assoc();
	      	return $arr['response'];    
	
	    }else{
	    	return 'Command not found in database';
	    }
        
		
		
        
        
		return "You sent \n ".$message;
	}
	
	/* 
	 * @see InterfaceRest::subscriptionCreated()
	 */
	public function subscriptionCreated($userName) {
		return "Welcome to test DB bot on Nimbuzz!";
	}
	
    /* 
	 * @see InterfaceRest::subscriptionDeleted()
	 */
	public function subscriptionDeleted($userName) {
		// When someone deletes your chat buddy
        return "Add me again soon!";
	

	}

}