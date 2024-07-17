<?php 
    $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

    foreach ($pronouns as $pronoun){
            echo $pronoun . '<br>';
    };

    echo '<br>';

    foreach ($pronouns as $pronoun){
        if($pronoun == 'He/She') {
            echo $pronoun . ' codes<br>';
        }else {
            echo $pronoun . ' code<br>';
        }
    };   

    echo '<br>';

    $number = 1;

    while($number <= 120){
        echo $number . ' ';

        $number++;
    };

    echo '<br>';

    for($number = 1; $number <= 120; $number++){
        echo $number . ' ';
    };

    echo '<br>';

    $people = ['Ed', 'Alan', 'Jo'];

    foreach($people as $person){
        echo $person . '<br>';
    };
?>