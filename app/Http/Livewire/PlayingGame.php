<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class PlayingGame extends Component
{
    public $cash;
    public $playing;
    public $played;
    public $numbers = [];
    public $correctNumber;
    public $selectedNumber;
    public $message;

    public function mount()
    {
        if (Session::missing('cash')) {
            Session::put('cash', 100);
        }
        $this->cash = Session::get('cash');
    }

    public function startPlaying()
    {
        $this->playing = true; // to show playing Model [Section]
        if ($this->cash > 1) {
            $this->played  = false;
            $this->generateRandomNumbers();
            $this->setCorrectNumber();
        } else {
            $this->message = "Sorry you can't play you have low cash:3... But if you want you Can Clear 'Cache'";
        }
    }

    public function goHome()
    {
        $this->playing = false;
    }

    public function generateRandomNumbers()
    {
        $this->numbers = [];

        while (count($this->numbers) < 10) {
            $randomNumber = rand(1, 100);

            if (!in_array($randomNumber, $this->numbers)) {
                $this->numbers[] = $randomNumber;
            }
        }
    }

    public function setCorrectNumber()
    {
        $index = rand(0, 9);
        $this->correctNumber = $this->numbers[$index];
    }

    public function chooseNumber($number)
    {
        if ($this->played == false) {
            $this->selectedNumber = $number;

            if ($number === $this->correctNumber) {
                $this->cash *= 2;
                $this->message = "Congratulations! You have won!";
            } else {
                $this->cash *= 0.75;
                $this->message = "Sorry, that's not the correct number. Please try again. Correct number was: " . $this->correctNumber;
            }
            $this->cash = number_format($this->cash, 3);
            Session::put('cash', $this->cash);
        } else {
            $this->message = "Click Play again";
        }
        $this->played = true;
    }

    public function playAgain()
    {
        $this->selectedNumber = null;
        $this->played == false;
        $this->message = null;
        $this->startPlaying();
    }

    public function render()
    {
        return view('livewire.playing-game', [
            'numbers' => $this->numbers
        ]);
    }
}
