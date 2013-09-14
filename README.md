### Setup in IDE PhpStorm

 Menu "File" -> "Settings" -> "PHP" -> _Select path to folder "php-yaf-doc"_

### Setup in IDE NetBeans

 * Right click your project -> "Properties"
 * Select the "PHP Include Path" category
 * Click "Add Folder..."
 * Select your checkout of php-yaf-doc
 * Click "Open"
 * Click "OK"

### Setup in Zend Studio IDE (Eclipse PDT)

 * Open "Window" -> "Preferences"
 * In preferences dialog open "PHP" -> "PHP Libraries"
 * Click "New" button, in "User library name" enter "PHP-Yaf", click "OK"
 * Select newly created "PHP-Yaf", library Click "Add external folder", select path to the folder which contains your checkout of php-yaf-doc or you can download single "yaf.php" file https://raw.github.com/elad-yosifon/php-yaf-doc/master/yaf.php
 * Include your custom library in your project: open "Project" -> "Properties" -> "PHP Include Path", click add library, select "User library", click "Next", check "PHP-Yaf", click "Finish"