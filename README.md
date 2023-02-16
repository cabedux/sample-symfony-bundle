# fmo-logger-bundle

docker build -t fmo/fmo-logger-bundle .

docker run -d --rm -p 9334:8000 -v $(pwd):/app --name fmo-logger-bundle fmo/fmo-logger-bundle

## Docs

https://davegebler.com/post/php/how-to-create-a-symfony-5-bundle

https://symfony.com/doc/current/bundles/best_practices.html
