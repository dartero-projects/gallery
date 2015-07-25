<?php

/**
 * ownCloud - gallery
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Olivier Paroz <owncloud@interfasys.ch>
 *
 * @copyright Olivier Paroz 2014-2015
 */

namespace OCA\Gallery\Middleware;

/**
 * Thrown when one of the tests in the "check" middlewares fails
 *
 * @package OCA\Gallery\Middleware
 */
class CheckException extends \Exception {

	/**
	 * Constructor
	 *
	 * @param string $msg the message contained in the exception
	 * @param int $code the HTTP status code
	 */
	public function __construct($msg, $code = 0) {
		parent::__construct($msg, $code);
	}

}
