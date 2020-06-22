<?php
//Loading from file
//XML (eXtensible Markup Language) is a markup language used for storing and transporting data.

// $xml = simplexml_load_string("filePath.xml");

// $xml = simplexml_load_string("https://example.com/doc.xml");


// $xmlReader = simplexml_load_string($xmlString);
$xml = simplexml_load_file('example.xml'); // or die('Failed to create an object');

echo "<pre>";
print_r($xml);
echo "</pre>";

// echo $xml->book[0]->name . "<br>";
// echo $xml->book[1]->name; 

foreach($xml->children() as $books) {       	
    echo $books->name . ", ";     
    echo $books->by . ", ";     
    echo $books->released . ", ";      	
    echo $books->pricing . "<br>";
  }

  echo $xml->book[0]['category'] . "<br>";
  echo $xml->book[1]->name['lang']; 


  foreach($xml->children() as $books) {       	
    echo $books->name['lang'];    
    echo "<br>"; 
  }

  //RSS ( composer project)

 // homestead in project folder with composer.json 
 // composer require dg/rss-php

 use Feed;
 $url = "http://rss.cnn.com/rss/edition.rss";

 $rss = Feed::loadRss($url);
 
echo "<pre>";
print_r($rss);
echo "</pre>";

 