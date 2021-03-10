<?php 
// function  gets the number of matched 
$array=['abdallah','mohamed','ali','ahmed','abdallah','karim','ali','abdallah'];
function getNumMatches($word) {
    $numMatches=0;
    global $array;
    foreach ($array as $k) {
        if ( $k == $word ) {
            global $numMatches;
            $numMatches++;
        }
    }
    if ( $numMatches > 0 ) {
        if ( $numMatches == 1 ) {
            return " the word you entered appeared only once ";
        } else {
            $result = "Tha number of matches :". " " . $numMatches-1;
            return $result;
        }
    } else {
        return " the word is not appeared ";

    }
}

echo getNumMatches('mohamed');

echo  "<br><br><hr><br>";

// function return price with discount

function getdiscount($price){
    if ( $price < 1000 ) {
        $priceAfterDis = $price / 10 * 9 ;
        return $priceAfterDis ;
    } elseif ( $price >= 1000 ) {
        return $price / 100 * 95 ;
    } else {
        return " price is not valid ";
    }
}

echo getdiscount(999);