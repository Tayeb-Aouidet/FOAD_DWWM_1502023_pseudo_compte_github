<?php
// A l'aide d'une boucle foreach clef/valeur , parcourir le fichier colors.json , afin  d'obtenir le resultat de la capature d'ecran : resultat-travaux-03.png

/* $color  = '[
	{
		"color": "red",
		"value": "#f00"
	},
	{
		"color": "green",
		"value": "#0f0"
	},
	{
		"color": "blue",
		"value": "#00f"
	},
	{
		"color": "cyan",
		"value": "#0ff"
	},
	{
		"color": "magenta",
		"value": "#f0f"
	},
	{
		"color": "yellow",
		"value": "#ff0"
	},
	{
		"color": "black",
		"value": "#000"
	}
]';

$jsoncolor = json_decode($color, true);

foreach($jsoncolor as $key => $value){
    echo '<div style="width:200px;height:200px;background-color:' . $value['value'] . '; display:flex;
    justify-content:center; align-items:center; color:white;font-weight:bold;font-size:2rem;"> '. $value['color'] . '</div>';
}
 */


 $color = '[
	{
		"color": "violet",
		"value": "#8F00FF"
	},
	{
		"color": "gold",
		"value": "#FFD700"
	},
	{
		"color": "silver",
		"value": "#C0C0C0"
	},
	{
		"color": "maroon",
		"value": "#800000"
	},
	{
		"color": "royalblue",
		"value": "#4169E1"
	},
	{
		"color": "kaki",
		"value": "#F0E68C"
	},
	{
		"color": "lightgrey",
		"value": "#D3D3D3"
	}		
	]';

	$jsoncolor = json_decode($color,true);
	foreach($jsoncolor as $key => $value){
		echo '<div style="width:200px;height:100px;background-color:' . $value['value'] . ';display:flex;justify-content:center; align-items:center;font-size:2rem;text-decoration:underline;box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">' . $value['color'] . '</div>';
	}
	