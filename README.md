# WU2018 - Continuous Deployment 

https://docs.google.com/presentation/d/128zwUq90lWAtYrtqsvRy-qQiWKgrANjtmesutkvDiT4/edit?usp=sharing

## Prerequisites
- Github account
- Git Bash https://git-scm.com/downloads
- Docker https://docs.docker.com/install/
- Editor, one of 
  - VSCode https://code.visualstudio.com/ or 
  - Sublime https://www.sublimetext.com/
- CircleCI account https://circleci.com/
- AWS account https://aws.amazon.com/free
  
Read this https://phpunit.de/getting-started-with-phpunit.html

## Running project
```bash
docker-compose up --build
```
Access http://localhost:8000 to see example page

## Get into the webapp container
```bash
docker exec -it wu2018_webapp_1 bash
```

## Troubleshooting Docker for Windows
If cannot download the image due to "client timeout" try

https://github.com/docker/for-win/issues/611
