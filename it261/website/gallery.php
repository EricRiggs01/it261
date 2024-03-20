<?php
$people['Goku_Son'] = 'gokuu_Defender of the Earth! A Sayan from outer space!.';
$people['Naruto_Uzumaki'] = 'narut_A ninja from the Hidden Leaf Village!';
$people['Inuyasha_Higurashi'] = 'inuya_A half demon from the feudal era!';
$people['Rurouni_Kenshin'] = 'kensh_A samuri how carries a backwards sword!';
$people['Ash_Ketchum'] = 'ashke_A Pokemon Trainer who\'s best friend is Pikachu!';

// variable .. key .....................value
// $name................................$image





?>

<?php include('config.php');?>
<?php include('./includes/header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7 class exercise</title>
    <style>
        table {
            border:1px solid red;
            border-collapse:collapse;
        }
        td {
            border:1px solid red;

        }
        </style>
</head>
<body>
<table>
<?php foreach($people as $name => $image): ?>
<tr>
    <td><img src="./images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>">      </td>
    <td><?php echo str_replace('_', ' ', $name); ?></td>
    <td><?php echo substr($image, 6);?></td>
    
</tr>
<?php endforeach; ?>
</table>
    
<?php 
 include('./includes/footer.php'); ?>