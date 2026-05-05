PHP: Hypertext Preprocessor

Originally, PHP stood for “Personal Home Page”

Later it was renamed to “Hypertext Preprocessor” (recursive acronym)

PHP is a server-side scripting language used to build dynamic websites

---------------------------------------------------------
PHP is used for

Web development     → build dynamic websites(e.g. WordPress)

Backend logic       → handle login, forms, data

Database work       → store & fetch data

APIs                → connect apps & services

CLI scripts         → automation in terminal

Simple: PHP = backend language for websites and servers

--------------------------------------------------------
Install PHP (CLI) On Manjaro Linux:

    sudo pacman -S php

Verify installation

    php -v

Run PHP from terminal

    php -r "echo 'Hello, Shiv!';"
--------------------------------------------------------
**benefits of Core PHP (plain PHP without frameworks)**

* **Easy to learn**

  Simple syntax, beginner-friendly

* **Fast & lightweight**

  No extra framework overhead

* **Full control**

  You write everything → better understanding

* **Runs everywhere**

  Works on almost all servers (Linux, Windows)

* **Strong database support**

  Easily connects to MySQL, PostgreSQL, etc.

* **Widely used**

  Powers platforms like WordPress

  Frameworks like Laravel are built on top of Core PHP

  Simple idea
    core/ → your logic engine

    Laravel → UI + routing + structure

    project/
    │
    ├── core/                ← your core PHP code
    │   ├── math.php
    │   └── user.php
    │
    ├── laravel-app/         ← your framework (Laravel)
    │   ├── app/
    │   ├── routes/
    │   └── ...
    │
    └── shared/ (optional)

    In Laravel controller:

    require_once base_path('../core/math.php');

    $result = add(2, 3);

* **Good for small projects**

  Quick scripts, tools, simple websites

## Simple idea:

Core PHP = **learn basics + full control + lightweight**
