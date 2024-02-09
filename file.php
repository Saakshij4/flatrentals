<html lang = "en">
  <head>
    <title> Process the popcorn3.html form </title>

    <meta charset = "utf-8" />
    <style type = "text/css">
      td, th, table {border: thin solid black;}
    </style>
  </head>
  <body>

<?php
$name = $_POST['name']';
$phone = $_POST['phone'];
$description= $_POST['description'];
$question = $_POST['question'];
$question = $_POST['question'];
?>
<table>
      <caption> Renter Information </caption>
 <tr>
        <th> Name</th>
        <th> Phone Number</th>
        <th> Description </th>
        <th> Question </th>
      </tr>
     <tr>
     <td> <?php printf ("$ %s", $name); ?>
        </td>
        <td> <?php printf ("$ %s", $phone); ?>
        </td><td> <?php printf ("$ %s", $description); ?>
        </td><td> <?php printf ("$ %s", $question); ?>
        </td>
        </tr>
    </table>
    </body>
    </html>
  
