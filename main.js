
document.addEventListener('DOMContentLoaded', function(e) {
    let btnCalc = document.getElementById('calc');

    function getValueFromField(element) {
        if (!isNaN(element.value)){
            return parseInt(element.value);
        } else {
            return 0;
        }
    }

    btnCalc.addEventListener('click', function(event) {
        let sum = 0;
          
        sum += getValueFromField(document.getElementById('player1_ones'));
        sum += getValueFromField(document.getElementById('player1_twos'));

        // let player1_twos = document.getElementById('player1_twos');
        // if (!isNaN(sum) && !isNaN(player1_twos.value)){
        //     sum += parseInt(player1_twos.value);
        // }

        // let player1_threes= document.getElementById('player1_threes');
        // if (!isNaN(sum) && !isNaN(player1_threes.value)){
        //     sum += parseInt(player1_threes.value);
        // }

        // let player1_fours = document.getElementById('player1_fours');
        // if (!isNaN(sum) && !isNaN(player1_fours.value)){
        //     sum += parseInt(player1_fours.value);
        // }

        // let player1_fives = document.getElementById('player1_fives');
        // if (!isNaN(sum) && !isNaN(player1_fives.value)){
        //     sum += parseInt(player1_fives.value);
        // }

        // let player1_sixes = document.getElementById('player1_sixes');
        // if (!isNaN(sum) && !isNaN(player1_sixes.value)){
        //     sum += parseInt(player1_sixes.value);
        // }
        console.log(sum); 
        // console.log(player1_ones.value);
    });
}); 