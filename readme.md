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

Um exemplo de uso
```
$video = new PandaVideo(Env::PANDA_VIDEOS_API_KEY);
$videoResponse = $video->getVideoById('video-id');
```

###### Recado para desenvolvedores que desejam ajudar
Esse projeto só foi iniciado e possui uma estrutura que permite facilmente incluir as outras rotas disponíveis na API. Sinta-se livre para entrar em contato comigo para solicitar informações em como colaborar.

Meu email: rodolfobarretoweb@gmail.com