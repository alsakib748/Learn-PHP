<?php
require_once("vendor/autoload.php");
use Sunra\PhpSimple\HtmlDomParser;

$word = "science";
$endpoint = "https://www.vocabulary.com/dictionary/{$word}";
echo "<h1>Meaning of {$word}</h1>";
$ch = curl_init($endpoint);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
$dom = HtmlDomParser::str_get_html( $result );
// $dom = HtmlDomParser::str_get_html( $str );
$short = $dom->getElementByTagName("p.short");
echo "<strong>Short Meaning</strong>:{$short}<br/>";
$long = $dom->getElementByTagName("p.long");
echo "<strong>Long Meaning</strong>:{$long}";

?>