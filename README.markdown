(Script originally created in 2008/07/10 for a french website : [http://www.phpcs.com/codes/PHP5-CLASSE-UPLOAD_45454.aspx](http://www.phpcs.com/codes/PHP5-CLASSE-UPLOAD_45454.aspx "PHP CS"))

Oui je sais, ca fait encore une de plus ! :)
Mais personnellement je n'ai rien trouvé qui me convienne en Php5.

Cette classe essaye au maximum d'éviter des attaques lors de l'upload : gestion des erreurs retournées par http, vérification de la taille avec filesize, aboli l'usage de caractères dangeureux (permettant des actions pas très saines !), et vérification de toutes les étapes importantes lors du transfert.

De plus vous avez la possibilité de choisir si vous voulez déposer le fichier dans un endroit particulier, avec un nom particulier, si vous voulez créer les dossiers et sous dossiers ou ira votre fichier, si vous souhaitez renommer le fichier s'il existe déjà un fichier du même nom, et si vous voulez avoir un fichier ayant un nom propre (alphanumérique, ., _ et -)

Regardez la source pour plus de compréhension :)

Bon, ce n'est pas quelque chose de très sorcier, mais ca peux toujours servir.

Si toutefois vous avez des remarques, conseils et autre, n'hésitez pas ! :)
