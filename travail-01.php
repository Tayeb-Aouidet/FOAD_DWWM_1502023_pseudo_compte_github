<?php
/*
## Travail-01 : 

- Réaliser un script qui convertit une température de degré Celsius °C en degré Fahrenheit °F 
- Afficher les résultats dans un tableau html `table` , utiliser la fonction php `round` pour arrondir à l'unité supérieur
- Voici le tableau de conversion que vous devez avoir :

```
| °C | °F |
|--- |--- |
| 25 | 77 |
| 03 | 37.4 |
| 35 | 95 |
| 11 | 51.8 |

```
 */


$celsius = [25,3,35,11];
$far =[];
?>

<table>
    <thead>
        <tr> 
            <th colspan="2">C° / F°</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <?php foreach ($celsius as $key => $val) {
        ?>
            <tr>
                <td><?= $celsius[$key]; ?></td>
                <td><?= ((float)(($celsius[$key] * 9 / 5) + 32));
                    ?></td>
            </tr>
        <?php }  ?>
        <td></td>


    </tr>
    </tbody>
</table>
<style>
table , th , td {
	border:solid 1px black;
}	
td {
	padding: .5rem;	
}
</style>
