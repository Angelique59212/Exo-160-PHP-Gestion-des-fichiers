<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
file_put_contents('text.txt', $text);

/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$table = [
    "Lorem ipsum dolor sit amet.",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus est ipsum nobis?",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
    "Lorem ipsum dolor.",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet esse, quae.",
    "Lorem ipsum dolor sit amet.",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus est ipsum nobis?",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
    "Lorem ipsum dolor.",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet esse, quae.",
];
$file = fopen('text.txt', 'a+b');
foreach ($table as $elements) {
    fwrite($file, $elements ."\n");
}
fclose($file);
//ou

//$string = implode($table);
//file_put_contents('text.txt',"\n" .$string, FILE_APPEND);
/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
$index = 'index.php';
if (file_exists($index)) {
    $info = pathinfo($index);
    echo $info['extension'] . "<br>";
}


/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
$file = "toto";
if (!file_exists($file)) {
    echo "Le fichier toto n'existe pas";
}


/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.
$file = 'text.txt';
if (file_exists($file)) {
    $file = str_replace('a', '@', $file);
//    file_put_contents('text.txt', $file);
}
