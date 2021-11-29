<!-- Snack 2
Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
    e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->
<?php

$posts = [

    '10-01-2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10-02-2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15-05-2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>

    <ul>
        <?php
        $days = array_keys($posts);
        //array delle date 
        // var_dump($days);

        for ($i = 0; $i < count($days); $i++) {
            $key = $days[$i];
            //cicla le l'array delle date e associa ogni singola data alla variabile $key
            //  var_dump($key);

            echo " 
                <li>
                    <h2>$key</h2>
            ";


            for ($j = 0; $j < count($posts[$key]); $j++) {
                $post = $posts[$key][$j];
                //cicla l'array posts per ogni singola data e associa alla variabile post l'array di ogni singolo post 
                // var_dump($post);
                
                //per ogni post associo ad una variabile il valore di ogni proprietà per poi stamparlo in HTML
                $title = $post["title"];
                $author = $post["author"];
                $text = $post["text"];

                /*  var_dump($title);
           var_dump($author);
           var_dump($text); */

                echo "
                        <h3>$title</h3>
                        <h4>$author</h4>
                        <p>$text</p>
                    </li>
                ";
            }
        }



        ?>
    </ul>

</body>

</html>