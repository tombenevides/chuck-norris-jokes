# Chuck Norris Jokes

Create a Cuchk norris jokes in your next PHP projects .

## Installation

Require package using composer:

```bash
composer require tombenevides/chuck-norris-jokes
```

## Usage

```php
use Tombenevides\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
