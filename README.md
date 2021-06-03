# Laraver Identicon

Create identcion avatar for Laravel

## perview

![Preview](https://camo.githubusercontent.com/25e9d155d6c508d119fdd9ad5d4e5e4fc9778f9d1d138cf7ec31e7bd7a1bdbd9/68747470733a2f2f6a64656e7469636f6e2e636f6d2f686f737465642f6769746875622d73616d706c65732e706e67)

### Installation

> $ composer require "lshorz/laravel-identicon":"dev-master"

### Example
Display image

```php
Identicon::identiconImage('user');
```
or use helper

```php
identicon_img('Hello');
```


Get the base64 uri

```php
<img src="{!! Identicon::identiconBase64('user', 120, '#FFFFFF', 0.08) !!}" />
```


