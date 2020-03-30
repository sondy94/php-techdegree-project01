<?php
// PHP - Random Quote Generator

// Below is a multidimensional array containing a list of quotes, sources, citations and years.

$quotes = [

[
"quote"     => "The greatest glory in living lies not in never falling, but in rising every time we fall.",
"source"    => "Nelson Mandela"
],

[
"quote"     => "The way to get started is to quit talking and begin doing.",
"source"    => "Walt Disney"
],

[
"quote"     => "Good friends, good books, and a sleepy conscience: This is the ideal life.",
"source"    => "Mark Twain"
],

[
"quote"     => "If life were predictable it would cease to be life, and be without flavor.",
"source"    => "Eleanor Rosevelt"
],

[
"quote"     => "Never fear quarrels, but seek hazardous adventures.",
"source"    => "Alexandre Dumas",
"citation"  => "The three Muskeeters",
"year"      => "1844"
    ]

];



// A function called getRandomQuote created which purpose is to get random quote from the quotes array.

function getRandomQuote($array) {
return $array[rand(0, count($array) - 1)];

}


// A function called printQuote is created which purpose is to print the quotes in the HTML page. 

function printQuote($array) {
    $quoteElements = getRandomQuote($array);
    $quoteItem = '';

    $quoteItem .= "<p class=\"quote\">" . $quoteElements['quote'] . "</p>";
    $quoteItem .= "<p class=\"source\">" . $quoteElements['source'];

    if(isset($quoteElements['citation'])){
        $quoteItem .= "<span class=\"citation\">" . $quoteElements['citation'] . "</span>";
    }

    if(isset($quoteElements['year'])){
        $quoteItem .= "<span class=\"year\">" . $quoteElements['year'] . "</span></p>";

    }

    return $quoteItem;


}

