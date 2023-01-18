# Laravel Nova 4 Slovak language

This package translate base Laravel Nova 4 files to Slovak language

```
.
├── resources
│   ├── lang
│   │   ├── sk
│   │   │   ├── auth.php
│   │   │   ├── pagination.php
│   │   │   ├── passwords.php
│   │   │   └── validation.php
│   │   ├── vendor
│   │   │   ├── nova
│   │   │   │   ├── sk
│   │   │   │   │   └── validation.php
│   │   │   │   └── sk.json
└── └── └── sk.json
```


## Requirements

- `laravel/nova: ^4.0`


## Installation

```bash
composer require wamesk/laravel-nova-slovak-lang
```

```bash
php artisan vendor:publish  --provider="Wame\LaravelNovaSlovakLang\PackageServiceProvider"
```
