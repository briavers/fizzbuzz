<?php


namespace FizzBuzz;

interface IGame {
    function play();
}
class Game implements IGame
{
    public function play()
    {
        $times = 100;
        // loop for an x amount of times (in this case 100)
        for ($i=1; $i <= $times; $i++){
            //check if dividable by 3 and 5, or only by 5 or only by 3
            if($i % 5 === 0 && $i % 3 === 0){
                echo "FizzBuzz";
            }elseif ($i % 5 === 0){
                echo "Buzz";
            }elseif ($i % 3 === 0){
                echo "Fizz";
            }else{
                echo $i;
            }
            //echo a line brake after each iteration
            echo PHP_EOL;
        };
    }
}

$game = new Game();
$game->play();