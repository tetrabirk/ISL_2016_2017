<?php

namespace Crearchitex\Controller;

use Crearchitex\Model\AbstractManager;
use Crearchitex\View\AbstractView;

abstract class AbstractController {
    
    
    /** @var  AbstractManager */
	
	public abstract function executeAction($parameters = null);
}