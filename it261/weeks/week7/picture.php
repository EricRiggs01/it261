<?php
$people['Donald_Trump'] = 'trump_Former Preseident from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';
// variable .. key .....................value
// $name................................$image





?>




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
    <td><img src="./images/<?php echo substr($image, 0, 5);?>2.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>">      </td>
</tr>
<?php endforeach; ?>
</table>
    
</body>
</html>