# Laracasts Course - Session 6

This repository is part of the Laracasts Course on Refactoring Techniques.

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
  To explore available PHP commands, execute the following in the terminal:

  ```sh
  php -h
  ```

- **Start a Local PHP Server:**
  Start a local PHP server using the following command in the terminal:

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

### Composer Setup and Usage:

- **Run Composer in the Terminal (cd):**

  Run the following command to initialize a new composer.json file:

  ```sh
  composer init
  ```

  Follow the on-screen prompts to generate the configuration.

- **Composer Installation:**

  Install the necessary dependencies using the following command:

  ```sh
  composer install
  ```

- **Composer Autoload:**

  After installation, generate the autoload files with:

  ```sh
  composer dump-autoload
  ```

- **Add Vendor Directory to .gitignore:**

  It's recommended to add the vendor directory to .gitignore:

  ```sh
  echo '/vendor/' >> .gitignore
  ```

### Package Management:

- **Getting Packages:**

  There are two ways to acquire a package:

  - **Using Terminal:**
    Run the following command to search for packages:

    ```sh
    composer search package_name
    ```

  - **Direct Download:**
    Visit [Packagist - The PHP Package Repository](https://packagist.org) and search for the package you need. You can then download it manually or install it via Composer.

- **Installing Packages:**

  Use the following command to install a package via Composer:

  ```sh
  composer require package_name
  ```

---

https://pestphp.com/docs/installation

composer search test
composer require pestphp/pest
./vendor/bin/pest --init

- run test
  vendor/bin/pest

// about pest
https://github.com/pestphp/pest
