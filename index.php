
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body >
     <h1 class="font-bold text-yellow-900">Learning PHP</h1>
     <h2 class="font-serif text-red-700 text-center">Mon Example</h2>
   <div class="container mx-auto">
      <?php 
    include "header.php";
   echo "<br>";    

    include "body.php";
   echo "<br>";

   include "footer.php";  
   echo "<br>";
      ?>
   </div>
</body>
</html>
