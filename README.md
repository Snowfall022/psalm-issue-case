# psalm-issue-case
basic implementation to repeat the error MethodSignatureMismatch
the error disappears if you remove phalcon stubs

steps to reprocuse:
1. `docker run --rm -it --volume $(pwd):/app prooph/composer:7.2 i`
2. `docker run --rm -i -v ${PWD}:/app -w /app php:7.4-cli bin/psalm.phar src/`
