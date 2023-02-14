# fmo-logger-bundle

docker build -t fmo/logger-bundle .

docker run -d --rm -p 9333:8000 -v $(pwd):/app --name fmo-logger-bundle fmo/logger-bundle

## Docs

https://davegebler.com/post/php/how-to-create-a-symfony-5-bundle
