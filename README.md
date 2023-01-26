# Twitter @KitsuneCode

###### Twitter is an extremely compact and easy-to-use component. You just need to configure it by inserting the keys and token in the constructor to use and then start using the methods.

Twitter é um componente extremamente compacto e fácil de usar. Você só precisa configurar inserindo as chaves e token no construtor para utilizar e depois começar a utilizar os métodos.

## About KitsuneCode

###### KitsuneCode is a set of small and optimized PHP components for common tasks. Held by Enos S. S. Silva and the Kitsune team. With them you perform routine tasks with fewer lines, writing less and doing much more.

KitsuneCode é um conjunto de pequenos e otimizados componentes PHP para tarefas comuns. Mantido por Enos S. S. Silva e a equipe Kitsune. Com eles você executa tarefas rotineiras com poucas linhas, escrevendo menos e fazendo muito mais.

## DOC Oficial Twitter
[Official Documentation](https://developer.twitter.com/en/docs)

## Installation

Paginator is available via Composer:

```bash
"kitsunecode/twitter": "^1.0.*"
```

or run

```bash
composer require kitsunecode/twitter
```

## Documentation

###### For details on how to use the twitter, see the sample folder with details in the component directory

Para mais detalhes sobre como usar o twitter, veja a pasta de exemplo com detalhes no diretório do componente

## Installation
Start making API requests.
```php
$twitter = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $twitter->get("account/verify_credentials");
```

## Usage

###### Unlike many Twitter API libraries, TwitterOAuth doesn't provide a custom function for every API method. Instead there are a couple of generic functions so that as Twitter adds features to the API you don't need to update the library. Here is an example of [GET statuses/home_timeline](https://developer.twitter.com/en/docs/tweets/timelines/api-reference/get-statuses-home_timeline).

Ao contrário de muitas bibliotecas de API do Twitter, o TwitterOAuth não fornece uma função personalizada para cada método de API. Em vez disso, há algumas funções genéricas para que, à medida que o Twitter adiciona recursos à API, você não precise atualizar a biblioteca. Aqui está um exemplo de [GET statuses/home_timeline](https://developer.twitter.com/en/docs/tweets/timelines/api-reference/get-statuses-home_timeline).

#### HTTP
```code
GET https://api.twitter.com/1.1/statuses/home_timeline.json?count=25&exclude_replies=true
```

#### TwitterOAuth
```php
$statuses = $twitter->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
```

## Suport v2 API

###### v2 API methods are supported by setting the API Version. E.g. [GET /2/users](https://developer.twitter.com/en/docs/twitter-api/users/lookup/api-reference/get-users)

Os métodos de API v2 são compatíveis com a configuração da versão da API. Por exemplo. [GET /2/users](https://developer.twitter.com/en/docs/twitter-api/users/lookup/api-reference/get-users)

#### HTTP
```code
GET https://api.twitter.com/2/users?id=12
```

#### TwitterOAuth
```php
$twitter = new TwitterOAuth(...);
$twitter->setApiVersion('2');
$response = $twitter->get('users', ['ids' => 12]);
```

```php
<?php

define("CONSUMER_KEY", "apikey");
define("CONSUMER_SECRET", "apikeysecret");
define("ACCESS_TOKEN", "accesstoken");
define("ACCESS_TOKEN_SECRET", "secrettoken");

require __DIR__ . "/../vendor/autoload.php";

use KitsuneCode\Twitter\TwitterOAuth;

$twitter = new TwitterOAuth(consumerKey: CONSUMER_KEY, consumerSecret: CONSUMER_SECRET, oauthToken: ACCESS_TOKEN, oauthTokenSecret: ACCESS_TOKEN_SECRET);
$twitter->setApiVersion(2);
//method post
$res = $twitter->post(path: 'tweets', parameters: ['text' => 'enviando'], json: true);

print_r($res);
```

##### Result

````code
stdClass Object ( [data] => stdClass Object ( [id] => 1618440653582786563 [text] => enviando ) )
````

## Support

###### Security: If you discover any security related issues, please email devenos@icloud.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para devenos@icloud.com em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Enos S. S. Silva](https://github.com/enosfox) (Developer)

## License

The MIT License (MIT). Please see [License File](https://github.com/enosfox/paginator/blob/master/LICENSE) for more information.