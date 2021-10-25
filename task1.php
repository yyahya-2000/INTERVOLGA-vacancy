<?php
$link = 'https://www.hse.ru/en/info/';
$a = 'Consistently ranked as one of Russia’s top universities, HSE University is a leader in Russian education and one of the preeminent economics and social sciences universities in eastern Europe and Eurasia. Having rapidly grown into a well-renowned research university over two decades, HSE University sets itself apart with its international presence and cooperation.';
if (!empty($a) && !empty($link)) {
 $b = mb_strlen($a) > 180 ? mb_substr($text, 180) : $a;
 
 $words = explode(' ', $b);
 $bForLink = implode(' ', array_splice($words, -2)). '...';
 echo '<p style="font-size: 18px">'.$b.' </p>';
 echo '<p style="font-size: 18px">'.$bForLink.' </p>';
}
//What can go wrong:
// 1. If there is a link in the text, then it can be cut off, and, accordingly, brokens
// 2. There may be a problem with the Russian language 
?>

