# Scale

Scale is a suite of interfaces that can be used to replace hard-coded constants.

## Installation

To use Scale, simple run:

```bash
composer require flavioheleno/scale
```

## Usage

This library usage is straightforward.

```php
// before
usleep(30000);

// after
usleep(30 * Milliseconds::IN_MICROSECONDS)
```

```php
// before
$item->expiresAfter(86400);

// after
$item->expiresAfter(Days::IN_SECONDS);
```

## License

This library is licensed under the [MIT License](LICENSE).
