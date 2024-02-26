#Kalkulačka

## Marek Zelinka


## Struktura HTML stránky:

<!DOCTYPE html> definuje verzi HTML, kterou dokument používá (v tomto případě HTML5).
<html lang="en"> označuje začátek HTML dokumentu s deklarací jazyka (v tomto případě angličtina).
V <head> části jsou definovány meta informace, jako kódování znaků (<meta charset="UTF-8">), viewport pro responsivní design (<meta name="viewport" content="width=device-width, initial-scale=1.0">), název stránky (<title>kalkulator </title>) a odkaz na externí CSS soubor (<link rel="stylesheet" href="styles.css">).
<body> obsahuje obsah stránky, včetně formuláře a výsledku kalkulace.

## Vložení PHP skriptu:

<?php include("script.php");?> vloží obsah PHP skriptu uloženého v souboru script.php. Tato část může obsahovat logiku pro výpočty.

## Formulář pro kalkulaci:

<form method="post" action=""> definuje formulář, který bude odesílat data pomocí metody POST na stejnou stránku (action="").
Vstupní pole pro první číslo (<input type="number" name="num1" required>), operátor (<select name="operator" required>...</select>), a druhé číslo (<input type="number" name="num2" required>) jsou vloženy do formuláře.
Tlačítko pro odeslání formuláře (<input type="submit" name="calculate" value="Calculate">) spustí odeslání formuláře.
