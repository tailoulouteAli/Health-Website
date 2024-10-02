<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
   <h1 class="text-4xl font-bold text-green-500 mb-4">Learning PHP</h1>
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
