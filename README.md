# Kirby + Vite template

[Kirby CMS template](https://github.com/stuymedova/kirby-rollup-postcss) adapted to be used with Vite.

## Overview

```shell
.
├── public
│   ├── assets
│   │   ├── css
│   │   │   └── main.css
│   │   ├── fonts
│   │   ├── icons
│   │   ├── images
│   │   └── js
│   │       └── main.js
│   ├── media
│   └── index.php
├── site
│   ├── blueprints
│   ├── config
│   │   ├── config.kirby-vite.test.php
│   │   └── config.php
│   ├── plugins
│   │   ├── kirby3-robots-txt
│   │   └── kirby3-xmlsitemap
│   ├── snippets
│   └── templates
├── src
│   ├── css
│   │   ├── main.css
│   │   └── reset.css
│   ├── js
│   │   └── main.js
│   └── index.js
├── storage
│   ├── accounts
│   ├── cache
│   └── sessions
├── package.json
└── vite.config.js
```

## Prerequisites

- [PHP](https://www.php.net) and [Composer](https://getcomposer.org)  
- [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/)

## Setup

Run in terminal:
```shell
composer install
valet link # for Laravel Valet users, otherwise an alternative

npm install
npm run dev # or "npm run build"
```
