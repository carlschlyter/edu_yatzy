<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yatzy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
    <table>
        <tr>   
            <th></th>
            <th>Player1</th>
            <th>Player2</th>
            <th>Player3</th>
            <th>Player4</th>
        </tr> 
        <tr>   
            <td>Ones</td>
            <td><input type="number" id="player1_ones"></td> 
            <td><input type="number" id="player2_ones"></td> 
            <td><input type="number" id="player3_ones"></td> 
            <td><input type="number" id="player4_ones"></td> 
        </tr>
        <tr>   
            <td>Twos</td>
            <td><input type="number" id="player1_twos"></td> 
            <td colspan='3'></td> 
        </tr>
        <tr>   
            <td>Threes</td>
            <td><input type="number" id="player1_threes"></td> 
            <td colspan='3'></td> 
        </tr>
        <tr>   
            <td>Fours</td>
            <td><input type="number" id="player1_fours"></td> 
            <td colspan='3'></td> 
        </tr>        
        <tr>   
            <td>Fives</td>
            <td><input type="number" id="player1_fives"></td> 
            <td colspan='3'></td> 
        </tr>        
        <tr>   
            <td>Sixes</td>
            <td><input type="number" id="player1_sixes"></td> 
            <td colspan='3'></td> 
        </tr>    
        <tr>   
            <td>Sum</td>
            <td id='player1_sum'></td> 
            <td colspan='3'></td> 
        </tr>    
    </table>

    <br><button id='calc'>Calculate</button>    
</body>
</html>

<?php

?>