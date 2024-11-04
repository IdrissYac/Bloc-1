<?php
require_once 'pages/include/fonctions.php'

echo title('titre de niveau 1');
echo title('titre de niveau 2','',2);
echo title('titre de niveau 2'level:2);
echo title('titre de niveau 3','Le sous-titre',3);
echo title('Titre de niveau 1', 'toUpper' true);

$nb_get('nb');