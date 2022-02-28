### Panda Video PHP SDK

###### Como utilizar

Importe este repositório no seu projeto utilizando o composer:

```
"repositories": [
  {
    "url": "https://github.com/rodolfobarretoweb/panda-videos-php-sdk.git",
    "type": "git"
  }
]
```

```
"require": {
  "panda-videos/php-sdk": "dev-master"
}
```

###### Exemplos

Um exemplo de uso para pegar as propriedades de um vídeo específico
```
<?php
use PandaVideosPhpSdk\PandaVideo;

$video = new PandaVideo([
  'apiKey' => Env::PANDA_VIDEOS_API_KEY,
  'referer' => 'dominio-cadastrado-no-dashboard.com.br'
]);

$videoResponse = $video->getVideoById('video-id');
```

--------------------------------------------------

Utilizando os links extraídos do vídeo
```
<?php
use PandaVideosPhpSdk\PandaVideo;

$video = new PandaVideo([
  'apiKey' => Env::PANDA_VIDEOS_API_KEY,
  'referer' => 'dominio-cadastrado-no-dashboard.com.br'
]);

$videoResponse = $video->getVideoById('video-id');
$thumbStream = $video->getVideoResourceFromUrl($videoResponse->thumbnail);
```

###### Recado para desenvolvedores que desejam ajudar
Esse projeto só foi iniciado e possui uma estrutura que permite facilmente incluir as outras rotas disponíveis na API. Sinta-se livre para entrar em contato comigo para solicitar informações em como colaborar.

Meu email: rodolfobarretoweb@gmail.com