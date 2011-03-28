(**Script originally created in 2008/04/20** for a french website : [http://www.phpcs.com/codes/PHP5-CLASSE-UPLOAD_45454.aspx](http://www.phpcs.com/codes/PHP5-CLASSE-UPLOAD_45454.aspx "PHP CS"))

Oui je sais, ca fait encore une de plus ! :)
Mais personnellement je n'ai rien trouvé qui me convienne en Php5.

Cette classe essaye au maximum d'éviter des attaques lors de l'upload : gestion des erreurs retournées par http, vérification de la taille avec filesize, aboli l'usage de caractères dangeureux (permettant des actions pas très saines !), et vérification de toutes les étapes importantes lors du transfert.

De plus vous avez la possibilité de choisir si vous voulez déposer le fichier dans un endroit particulier, avec un nom particulier, si vous voulez créer les dossiers et sous dossiers ou ira votre fichier, si vous souhaitez renommer le fichier s'il existe déjà un fichier du même nom, et si vous voulez avoir un fichier ayant un nom propre (alphanumérique, ., _ et -)

Regardez la source pour plus de compréhension :)

<?php
	// A simple exemple
	if (isset ($_FILES['fichier'])) {
		require_once ('../Alternativ/Helpers/UploadHelper.php');
		$oU = new UploadHelper ();
	
		// Vous devez spécifier un répertoire de destination !
		$oU->destinationFolder = "./repertoire/dupload/";
	
		// Ensuite vous pouvez spécifier un nom de fichier, s'il n'y en a pas,
		// ce sera celui fournit par l'utilisateur qui sera pris
		$oU->fileName = "nomdefichier.extension";
	
		// Au lieu d'utiliser la commande $oU->destinationFolder + $oU->fileName
		// Vous pouvez utiliser celle-ci, strictement identique !
		$oU->filepath = "./repertoire/dupload/nomdefichier.extension";
	
		// Vous pouvez spécifier un tableau d'extensions autorisées
		$oU->allowedExt = array ('png', 'bmp', 'gif', 'jpg', 'jpeg');
		// Vous pouvez aussi passer par les fonctions addAllowedExtension en indiquant un tableau d'extensions 
		// ou juste une extension. Dans les deux cas, les valeurs seront ajoutées au tableau en cours
		// Pour vider le tableau, vous faites $oU->allowedExt = array (); ou vous appelez la méthode
		$oU->cleanAllowedExtension ();
	
		// Si le tableau est vide, toutes les extensions seront autorisées
	
	
		// Si rename est à true, cela permet de renommer le fichier en ajoutant un (x) (ou x = 0 à n)
		// avec n un nombre tant que le fichier existe, ce qui peux donner fichier.txt, ou s'il existe
		// fichier(0).txt, ou s'il existe, fichier(1).txt, etc
		$oU->rename = true;
		// Valeur par défaut : false;
	
		// Si cleanFileName est à true, cela aura pour effet de remplacer tous les caractères autre que 
		// alphanumérique, dot et _ par leur équivalent alphanumérique (é=>e par exemple) ou par un _
		$oU->cleanFileName = true;
		// Valeur par défaut : false;
	
		// Si le repertoire dans lequel le fichier sera déposé n'exisite pas et que createSubFolders et à true
		// alors la classe créera tous les dossiers et sous dossiers nécéssaires.
		$oU->createSubFolders = true;
		// Valeur par défaut : true;
	
		// Limite la taille de chargement, et fait une vérification sur la taille réelle du fichier
		// (n'interprete pas les valeurs du navigateur (car elles peuvent être faussées))
		$oU->maxFileSize=512000;

		// Si ce parametre est à true, va appeler la méthode isImage afin de vérifier l'en tête du fichier pour tester si c'est bien une image !
		$oU->isImage = true;
	
		// On lance l'upload ! :)
		$oU->upload ($_FILES['fichier']);
	
	}
	else {
	?>
	<form action="index.php" method="post" enctype="multipart/form-data">
	<p><input type="file" name="fichier" /><input type="submit" value="Envoyer" /></p>
	</form>
	<?php
	}
	?>

Bon, ce n'est pas quelque chose de très sorcier, mais ca peux toujours servir.

Si toutefois vous avez des remarques, conseils et autre, n'hésitez pas ! :)
