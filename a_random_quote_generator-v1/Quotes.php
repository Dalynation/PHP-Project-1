<?php
$quotes[] = array(
  'quote' => 'Talk is cheap. Show me the code.',
  'source' => 'Linus Torvalds',
);
$quotes[] = array(
  'quote' => 'Some days are just bad days, thats all. You have to experience sadness to know happiness, and I remind myself that not every day is going to be a good day, thats just the way it is!',
  'source' => 'Dita Von Teese',
);
$quotes[] = array(
  'quote' => 'Be sure what you want and be sure about yourself. Fashion is not just beauty, its about good attitude. You have to believe in yourself and be strong',
  'source' => 'Adriana Lima',
);
$quotes[] = array(
  'quote' => 'True friendship multiplies the good in life and divides its evils. Strive to have friends, for life without friends is like life on a desert island... to find one real friend in a lifetime is good fortune; to keep him is a blessing', 
  'source' => 'Baltasar Gracian',
);
  $quotes[] = array(
  'quote' => 'A tree is known by its fruit; a man by his deeds. A good deed is never lost; he who sows courtesy reaps friendship, and he who plants kindness gathers love',
  'source'=> 'Saint Basil.',
  );
  $quotes[] = array(
  'quote' => 'A primary cause of complexity is that software vendors uncritically adopt almost any feature that users want.',
  "source" => 'Niklaus Wirth'
  );
  // I pushed all thw quotes with their sources into the $quotes array

  $randomQuotes = $quotes[array_rand($quotes)];

// I used a function that chooses a random array and stored that into a variable.

?>