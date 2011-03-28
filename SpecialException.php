<?php
/**
 * @name SpecialException
 * @filesource SpecialException.php
 * 
 * @author Cyril Nicodème
 * @license Gnu/Agpl
 * @version 0.1
 * 
 * @since 18/01/2008
 */
class SpecialException extends Exception {
	public function __construct ($iCode, $iParameter = null) {
		// Ici vous pouvez appeler un fichier xml pour aller dans le noeud __lang__>Class>Code
		// Class étant la classe à l'origine de l'erreur
		// Et le code le code retourné par l'erreur
		// Comme cela vous disposez d'une gestion d'erreur multilangue

		// C'est qu'une idée, c'est pour ca que je n'ai mis que des commentaires, que vous adaptiez la classe à vos besoins ! :)
	}
}
?>
