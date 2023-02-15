<?php
// A l'aide d'une boucle foreach clef/valeur , parcourir le fichier colors.json , afin  d'obtenir le resultat de la capature d'ecran : resultat-travaux-03.png

$color  = '[
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
