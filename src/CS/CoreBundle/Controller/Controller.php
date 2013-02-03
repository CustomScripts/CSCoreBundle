<?php

/*
 * This file is part of the CSCoreBundle package.
 *
 * (c) Pierre du Plessis <info@customscripts.co.za>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as CoreController;

class Controller extends CoreController {

	/**
	 * Return a instance of the doctrine entity manager
	 *
	 * @return \Doctrine\Orm\EntityManager
	 */
	public function getEm()
	{
		// TODO : get entity manager from configuration (So we can use odm entity anagers as well)
		return $this->get('doctrine.orm.entity_manager');
	}

	/**
	 * Adds a message to the session flash
	 *
	 * @param string $message The message to add to the session flash
	 * @param string $type The flash message type (notice, success, error etc)
	 *
	 * @return Controller
	 */
	public function flash($message, $type = 'notice')
	{
		$this->get('session')->getFlashBad()->add($type, $message);

		return $this;
	}

	/**
	 * Translates a message
	 *
	 * @param string $message
	 * @return string
	 */
	public function trans($message)
	{
		return $this->get('translator')->trans($message);
	}
}
