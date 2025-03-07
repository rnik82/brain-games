# Brain-games

### Hexlet tests and linter status:
[![Actions Status](https://github.com/rnik82/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/rnik82/php-project-45/actions)

[![Maintainability](https://api.codeclimate.com/v1/badges/7bddc2c0d162ff0074a0/maintainability)](https://codeclimate.com/github/rnik82/php-project-45/maintainability)

## About the Project

"Brain-Games" is a collection of five console-based games designed following the principle of popular brain-training mobile apps. Each game poses questions that require correct answers. After three correct answers, the game is considered completed. Incorrect answers end the game and prompt the player to try again.

## Requirements:
- Linux
- PHP 8.3
- Composer


## Installation Instructions

Follow these steps sequentially:

1. Clone the repository:
   ```bash
    git clone git@github.com:rnik82/brain-games.git brain-games
    ```
   
2. Navigate to the project directory:
   ```bash
    cd brain-games
    ```
   
3. Install dependencies:
   ```bash
    make install
    ```
   
4. Grant execute permissions to the files in the bin directory:
   ```bash
    chmod +x ./bin/*
    ```

## Launching the Games

Commands to launch the games:

- `make brain-even` — start the "Even Check" game.
- `make brain-calc` — start the "Calculator" game.
- `make brain-gcd` — start the "Greatest Common Divisor" game.
- `make brain-progression` — start the "Arithmetic Progression" game.
- `make brain-prime` — start the "Is it a Prime Number?" game.

## Game Demonstrations

### Brain-even
[![asciicast](https://asciinema.org/a/666681.svg)](https://asciinema.org/a/666681)

### Brain-calc
[![asciicast](https://asciinema.org/a/666938.svg)](https://asciinema.org/a/666938)

### Brain-gcd
[![asciicast](https://asciinema.org/a/667041.svg)](https://asciinema.org/a/667041)

### Brain-progression
[![asciicast](https://asciinema.org/a/667133.svg)](https://asciinema.org/a/667133)

### Brain-prime
[![asciicast](https://asciinema.org/a/667149.svg)](https://asciinema.org/a/667149)
