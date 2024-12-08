<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
<?php  
function multiplication($number) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = ["no" => $i, "multiplier" => $number, "answer" => $i * $number];
    }
    return $results;
}

$number = 5; // Example multiplier
$multiplicationTable = multiplication($number);
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Multiplier</th>
        <th>Answer</th>
    </tr>
    <?php foreach ($multiplicationTable as $row) { ?>
        <tr>
            <td><?php echo $row["no"]; ?></td>
            <td><?php echo $row["multiplier"]; ?></td>
            <td><?php echo $row["answer"]; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
