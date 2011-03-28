<?php
/**
 * @name InvalidParameterException
 * @filesource InvalidParameterException.php
 * 
 * @author Cyril Nicodème
 * @license Gnu/Agpl
 * @version 0.1
 * 
 * @since 18/01/2008
 */
class InvalidParameterException extends SpecialException {
	const BOOLEAN_NEEDED 	= 0;
	const INT_NEEDED 	= 1;
	const STRING_NEEEDED 	= 2;
	const ARRAY_NEEDED 	= 4;
	const RESOURCE_NEEDED 	= 8;
	const OBJECT_NEEDED 	= 16;
	const INVALID_KEY	= 32;
}
?>
