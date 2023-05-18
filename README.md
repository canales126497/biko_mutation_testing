# PHP 8 mutation testing boilerplate
___

## Requisitos previos:
- PHP 8
- Composer
- Pecl

___

## Instalación:
- Ejecuta: `composer install`
- Ejecuta: `sudo pecl install pcov`
  - Si estás usando un Mac y tienes un error de `mkdir`:
    - Ejecuta: `pecl config-get ext_dir | pbcopy`
    - Ejecuta: `mkdir -p {valor_copiado}`

___

## Infection:
- Ejecuta: `./vendor/infection/infection/bin/infection`

___

## Grum:
- Ejecuta: `./vendor/bin/grumphp run`
- También puedes ejecutar Grum como pre-commit automáticamente.

___

## Kata:
### Tennis game kata:

Esta kata trata de modelar un partido de tenis :)

La forma de llevar el tanteo en tenis puede ser complicado, por este motivo la ATP nos ha contratado para construir un
marcador que sea capaz de mostrar el resultado actual de un partido.

Nuestro trabajo consiste en escribir un programa "TennisGame" que contenga la lógica del sistema de tanteo y que muestre
el resultado correcto en formato de texto para mostrarlo en las pantallas.

Cuando un jugador gane un punto, el programa contendrá un método al que se le podrá llamar para poder indicarle qué jugador
ha sido el ganador del punto. Además, el sistema recibirá llamadas de las pantallas a un método "score()" que devolverá
cuál es el resultado actual. Este método debería devolver un texto con el resultado.

Este es un resumen explicamos cómo funciona el tanteo en tenis, pero si necesitas más información puedes visitar el siguiente [enlace](https://en.wikipedia.org/wiki/Tennis#Scoring):

1. Un juego se gana cuando uno de los jugadores gana al menos 4 puntos en total y al menos dos puntos más que el oponente.
2. El tanteo parcial se lleva de una manera un tanto (¡BOOM!) "especial": respectivamente "Love", "Fifteen", "Thirty", y "Forty".
3. Si al menos cada uno de los jugadores ha ganado 3 puntos y el resultado está empatado, el resultado es "Deuce".
4. Si al menos cada uno de los jugadores ha ganado 3 puntos y uno de lo jugadores tiene un punto más que su rival, el
   resultado del juego es "Advantage" para el jugador que va en cabeza.

Sólo necesitas reportar el resultado del juego actual. Este es un primer desarrollo, por lo tanto, ahora los sets y
juegos quedan fuera del contexto. ¡Más vale!

___
