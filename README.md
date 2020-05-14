# CRM

a project by yii2

## Installation

first clone the repo

```bash
git clone https://github.com/joy007-py/crm.git
```

initialize the application in dev mode
```bash
php init
```
then choose development

Use composer to install CRM dependency.

```bash
composer install
```

change db config in /common/config/main-local.php

migrate database files

```bash
php yii migrate/up
```
now go to /backend/web and type
```bash
php -S localhost:8000
```
now backend ready in http://localhost:8000/ !n joy

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.