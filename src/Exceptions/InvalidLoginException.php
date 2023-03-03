<?php

namespace billingserv\DirectAdmin\Exceptions;

class InvalidLoginException extends \Exception
{
	protected $message = 'Invalid authenication details were supplied.';
}
