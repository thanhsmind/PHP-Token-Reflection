<?php
/**
 * PHP Token Reflection
 *
 * Version 1.0.2
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this library in the file LICENSE.
 *
 * @author Ondřej Nešpor
 * @author Jaroslav Hanslík
 */

namespace TokenReflection\Exception;

use TokenReflection\IReflection;

/**
 * Runtime exception raised when working with a reflection element.
 */
final class RuntimeException extends BaseException
{
	/**
	 * The property/element already exists.
	 *
	 * @var integer
	 */
	const ALREADY_EXISTS = 3001;

	/**
	 * The property/method is not accessible.
	 *
	 * @var integer
	 */
	const NOT_ACCESSBILE = 3002;

	/**
	 * The reflection element that caused this exception to be raised.
	 *
	 * @var \TokenReflection\IReflection
	 */
	private $sender;

	/**
	 * Constructor.
	 *
	 * @param \TokenReflection\IReflection $sender Reflection element
	 * @param string $message Exception message
	 * @param integer $code Exception code
	 */
	public function __construct(IReflection $sender, $message, $code)
	{
		parent::__construct($message, $code);

		$this->sender = $sender;
	}

	/**
	 * Returns the reflection element that caused the exception to be raised.
	 *
	 * @return \TokenReflection\IReflection
	 */
	public function getSender()
	{
		return $this->sender;
	}
}
