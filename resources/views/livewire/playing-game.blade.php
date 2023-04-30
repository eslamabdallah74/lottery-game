<div>
    <p>You have <span class="cash-amount">{{ $cash }}$</span> in your account.</p>
    @if ($playing)
        <div>
            <h2>Choose a Number:</h2>
            <div class="numbers">
                @foreach ($numbers as $number)
                    <button wire:click="chooseNumber({{ $number }})"
                        class="number-button {{ $selectedNumber === $number ? 'selected' : '' }}
                           {{ $number === $correctNumber && $selectedNumber != null ? 'correct-number' : '' }}">
                        {{ $number }}
                    </button>
                @endforeach

            </div>
            <button class="play-again" wire:click="playAgain">Play Again</button>
            <button class="go-home" wire:click="goHome">Go Home</button>
            @if ($message)
                <p class="message">{{ $message }}</p>
            @endif
        </div>
    @else
        <div>
            <h1>Welcome to the Lottery Game</h1>
            <p>Press the button below to start playing and win big!</p>
            <button wire:click="startPlaying">Start Playing</button>
        </div>
    @endif
</div>
