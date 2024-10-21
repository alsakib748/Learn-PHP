
<?php

    $language = [
        'front' => explode(', ' ,'html, css, bootstrap, javascript'),
        "back" => explode(", ","sql, php, laravel"),
        "tools" => explode(", ","git, seo, xampp")
    ]; 



    print_r($language);
    echo "<br/>";
    echo "<br/>";
    //var_dump($language);

    echo $language ['front'][2]."<br/>";
    echo $language['back'][1]."<br/>";

    array_push($language['back'], 'python', 'django'); 

    echo "<br/>";

    print_r($language);

    echo "<br/>";echo "<br/>";

    
    // $sample = [
    //     'text' => [
    //         'text-again' => [
    //             'a',
    //             'b',
    //             'c',
    //             'd',
    //             'e'
    //         ]
    //     ],
    // ];

    $sample = [ 'text' => [ 'text-again' => ['a','b','c','d','e'] ] ];

    echo $sample['text']['text-again'][2];

    $numbers = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12],
        [13,14,15,[5,7,9]] 
    ];

    echo "<br/>";echo "<br/>";
    
    print_r($numbers[3][3][2]);

?>