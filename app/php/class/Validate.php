<?php

class Validate{

	public function ValidateName($name){
		
		if(count($name) > 5){
			
			return "true";

		}else{
			
			return "false";

		}

	}

	public function ValidateEmail($email){

	}

	public function ValidateLogin($login){

	}

	public function ValidatePassword($password){

		if(count($password) >= 6){
			
			return "true";

		}else{
			
			return "false";

		}

	}

	public function ValidateTerm(){

	}

	public function ValidateTypeAccount(){

	}

}

?>