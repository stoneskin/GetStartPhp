## Get Start of PHP

### 1 install php [reference](https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/)

1.1 download from <https://windows.php.net/download>
    - select non thread safe window  `VS16 x64 Non Thread Safe`
  
1.2 unzip to c:\php folder

1.3 Add c:\php to system environment Path

### 2 install vscode php extension 

2.1 install the `Php Server`
2.2 install `PHP` (All-in-One PHP support)
2.3 selected the index.php and chose `Php Server:Serve project`

![phpextension](./vscode_phpExtension.png)

2.4 Load my first php page

```php
    <!DOCTYPE html>
    <html>
    <body>

    <?php
    echo "My first PHP script!<br>";
    $version = phpversion();
    echo "version=";
    ?>
    <?=$version ?>
    <br>
    </body>
    </html>
```

![myfirstphp](./MyfirstPhp.png)

### 3 Examples

- Basic samples
  - [index.php](./index.php)
  - [array](./samples_array.php)
  - [class](./samples_class.php)
  - [Json](./samples_json.php)

- Form example 1 (2 page)
  - [form_welcome.php](./1_form/form_welcome.php)
  - [welcome.php](./1_form/welcome.php)

- Form example 2 (self post)
  - [form_self.php](./1_form/form_self.php)