# Lottery Game

This is a simple lottery game built with Laravel Livewire. The game generates a list of 10 random numbers between 1 and 100 and the user has to choose one of the numbers. If the selected number is equal to the correct number, the user wins the game.

![Alt Text](relative/path/to/image/file-name.png)

## Installation

To install this project, follow these steps:

1. Clone the repository to your local machine:

```
git clone https://github.com/your-username/lottery-game.git
```

2. Navigate into the project directory:

```
cd lottery-game
```

3. Install dependencies:

```
composer install
npm install && npm run dev
```

4. Create a `.env` file by copying the example file:

```
cp .env.example .env
```

5. Generate a new application key:

```
php artisan key:generate
```

6. Start the development server:

```
php artisan serve
```

7. Visit `http://localhost:8000` in your web browser to see the application.

## Usage

To play the lottery game, simply select one of the numbers displayed on the screen. If the number you chose matches the correct number, you win the game.

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository.

2. Create a new branch for your feature:

```
git checkout -b feature/my-new-feature
```

3. Make your changes and commit them:

```
git commit -am 'Add some feature'
```

4. Push your changes to your forked repository:

```
git push origin feature/my-new-feature
```

5. Create a new pull request from your branch to the main branch of the original repository.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT). Feel free to use it for any purpose.
