# BEAR.MonologModule

## Installation

### Composer install

    $ composer require kuma-guy/monolog-module
 
### Module install

```php
use Ray\Di\AbstractModule;
use BEAR\MonologModule\MonologModule;

class AppModule extends AbstractModule
{
    protected function configure()
    {
        $this->install(new MonologModule());
    }
}
```
