

<?php include ("Quotes.php")?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <p class="quote">
      <?php 
    
    echo $randomQuotes['quote']
// here is where the unique quote is displayed
      ?>
      </p>
      
      <p class="source">
      <?php 
    echo $randomQuotes['source'] // here is where the source is displayed
    ?>
      <span class="citation">Twitter</span><span class="year">2016</span></p>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
  <script src="script.js"></script>
</body>
</html>
