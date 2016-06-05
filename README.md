# Gravatar

[![Latest Stable Version](https://poser.pugx.org/misterpaladin/gravatar/v/stable)](https://packagist.org/packages/misterpaladin/gravatar) [![Total Downloads](https://poser.pugx.org/misterpaladin/gravatar/downloads)](https://packagist.org/packages/misterpaladin/gravatar) [![Latest Unstable Version](https://poser.pugx.org/misterpaladin/gravatar/v/unstable)](https://packagist.org/packages/misterpaladin/gravatar) [![License](https://poser.pugx.org/misterpaladin/gravatar/license)](https://packagist.org/packages/misterpaladin/gravatar)

Get user's gravatar by email

```php
MisterPaladin\Gravatar::get('e@mail.com', 250);
MisterPaladin\Gravatar::avatar('e@mail.com', 250);
```

Get user's profile object

```php
MisterPaladin\Gravatar::profile('e@mail.com');
```