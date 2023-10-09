# Laracasts Course - Session 6

This repository is for the Laracasts Course on Refactoring Techniques.

GitHub Repository: [Refactoring Techniques GitHub Repository](https://github.com/victor90braz/refactoring-techniques.git)

## Laravel Setup with Laragon

### Installation Steps:

1. **Download Laragon:**
   Download Laragon, a development environment, from [laragon.org](https://laragon.org/download/index.html).

2. **Choose the Desired Version:**
   Select a version that suits your needs:
   - [Download Laragon Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

- **Check Available PHP Commands:**
  You can check the available PHP commands using the following in the terminal:

  ```sh
  php -h
  ```

- **Start a Local PHP Server:**
  To start a local PHP server, use the following command in the terminal:
  ```sh
  php -S localhost:8888 -t public
  ```

To initialize a session in the application (usually at the beginning of `index.php` in the `public` folder), use:

```php
session_start();
$_SESSION['name'] = 'victor braz';
<?= $_SESSION['name'] ?? $heading ?>
```

- To get PHP information, run:

  ```sh
  php --info
  ```

- To find where session data has been saved if it's not temporary, check the session save path using:

  ```sh
  session.save_path
  ```

- If you want to find a session in the docs, create a file named `get_tmpdir.php` and save the following content:

  ```php
  <?php
  echo sys_get_temp_dir();
  ?>
  ```

  Run the command to get the path:

  ```sh
  php get_tmpdir.php
  ```

// run composer in the terminal (cd)
php composer.phar

composer init

Welcome to the Composer config generator

This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [braz9/session-6]:
Description []:
Author [victor braz <victor.90braz@gmail.com>, n to skip]:
Minimum Stability []:
Package Type (e.g. library, project, metapackage, composer-plugin) []:
License []:

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no
Add PSR-4 autoload mapping? Maps namespace "Braz9\Session6" to the entered relative path. [src/, n to skip]: no

{
"name": "braz9/session-6",
"authors": [
{
"name": "victor braz",
"email": "victor.90braz@gmail.com"
}
],
"require": {}
}

Do you confirm generation [yes]? yes
Would you like the vendor directory added to your .gitignore [yes]? yes

$ composer install
No composer.lock file present. Updating dependencies to latest instead of installing from lock file. See https://getcomposer.org/install for more information.
Loading composer repositories with package information
Updating dependencies
Nothing to modify in lock file
Writing lock file
Installing dependencies from lock file (including require-dev)
Nothing to install, update or remove
Generating autoload files

- $ composer dump-autoload

{
"name": "braz9/session-6",
"authors": [
{
"name": "victor braz",
"email": "victor.90braz@gmail.com"
}
],
"require": {},
"autoload": {
"psr-4": {
"Core\\": "Core/"
}
}
}
