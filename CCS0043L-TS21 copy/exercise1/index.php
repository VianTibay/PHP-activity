<!DOCTYPE html>
<html>
<head>
    <title>Sorted People Table</title>
    <link rel="stylesheet" href="../exercise1/style.css">
</head>
<body>

<h2 style="text-align:center;">People Information (Sorted Alphabetically)</h2>

<?php
$people = [
    ["name" => "Carlos", "image" => "img1.png", "age" => 25, "birthday" => "1999-03-21", "contact" => "09171234567"],
    ["name" => "Angela", "image" => "img2.png", "age" => 22, "birthday" => "2002-11-10", "contact" => "09181234567"],
    ["name" => "Brian", "image" => "img3.png", "age" => 28, "birthday" => "1996-01-15", "contact" => "09191234567"],
    ["name" => "Diana", "image" => "img4.png", "age" => 24, "birthday" => "2000-07-08", "contact" => "09201234567"],
    ["name" => "Edward", "image" => "img5.png", "age" => 27, "birthday" => "1997-04-18", "contact" => "09211234567"],
    ["name" => "Fiona", "image" => "img6.png", "age" => 21, "birthday" => "2003-05-20", "contact" => "09221234567"],
    ["name" => "George", "image" => "img7.png", "age" => 23, "birthday" => "2001-09-02", "contact" => "09231234567"],
    ["name" => "Hannah", "image" => "img8.png", "age" => 26, "birthday" => "1998-02-12", "contact" => "09241234567"],
    ["name" => "Ivy", "image" => "img9.png", "age" => 29, "birthday" => "1995-08-30", "contact" => "09251234567"],
    ["name" => "Jack", "image" => "img10.png", "age" => 20, "birthday" => "2004-12-05", "contact" => "09261234567"]
];

// Sort by name
usort($people, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
    </tr>
    <?php foreach ($people as $index => $person): ?>
    <tr>
        <td><?= $index + 1 ?></td>
        <td><?= $person['name'] ?></td>
        <td><img src="images/<?= $person['image'] ?>" alt="<?= $person['name'] ?>"></td>
        <td><?= $person['age'] ?></td>
        <td><?= $person['birthday'] ?></td>
        <td><?= $person['contact'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
