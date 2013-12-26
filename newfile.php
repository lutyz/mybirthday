<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


/**
 * {0}
 *
 * @author
 * @version
 */
class a001 extends AbstractActionController
{
	/**
	 * The default action - show the home page
	 */
    public function indexAction()
    {
     	// TODO Auto-generated {0}::indexAction() default action
    	return new ViewModel();
    }
}