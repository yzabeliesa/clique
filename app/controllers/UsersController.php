<?php
 
class UsersController extends BaseController {

    protected $layout = "main";

    public function getRegister() {
    	$this->layout->content = View::make('users.register');
	}
}
?>