<p align="center">
<a href="https://laventure.ru" target="_blank">
 <img src="./public/assets/img/logo/laventure.png" width="500">
</a>
</p>

<p align="center">
<a href="https://packagist.org/packages/laventure/framework">
  <img src="https://img.shields.io/packagist/dt/laventure/framework" alt="Total Downloads">
</a>
<a href="https://packagist.org/packages/laventure/framework">
  <img src="https://img.shields.io/packagist/v/laventure/framework" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/laventure/framework">
    <img src="https://img.shields.io/packagist/l/laventure/framework" alt="License">
</a>
</p>

### About
```
Laventure is a web application framework using architecture mvc with simple implementation.
```

**Related core package**: https://github.com/jeandev84/laventure-framework


### Prerequisites 
- PHP >= 8.1


### Installation
```
composer require laventure/application
```


### Usage

1. Make new file ```.env``` and configure
```
### APPLICATION  ###
APP_NAME=Laventure
APP_ENV=dev
APP_URL=http://localhost:8000
APP_SECRET=db5771cb3fc2c84749f103f819d9402c
APP_DEBUG=true

### DATABASE ###
DB_TYPE=YOUR_DRIVER
DB_HOST=YOUR_HOST
DB_PORT=YOUR_PORT
DB_NAME=YOUR_DATABASE
DB_USER=YOUR_USERNAME
DB_PASS=YOUR_PASSWORD
```

2. Create database via next command: 
```bash
php laventure database:create
```


3. Run migrations via next command : 
```bash
php laventure migration:migrate
```


4. Run local server via next command ```php laventure server:run```
- Server will be listened on the port :8000
- Open to your browser next link http://localhost:8000



5. List all available commands
```
php laventure
```



### Run tests via
```bash
php laventure test:run or ./vendor/bin/phpunit tests
```







