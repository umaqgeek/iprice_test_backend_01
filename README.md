# IPrice Test Backend

## Setup guide

1. Make sure you have `php` command that can running globally.
2. Clone this project and put it in your any development folder.
3. Run this command for installing composer dependencies:
```
$ composer install
```

## Execution

1. Running this command in the terminal and pass your string or sentenses as its arguments:
1.1. Format:
```
$ php index.php <your sentence or any string>
```
1.2. Example:
```
$ php index.php hello world
```
2. After you ran above command, it should prompt like this result:
```
HELLO WORLD
hElLo wOrLd
CSV created!
```
3. It also create a CSV file in the same folder named `csv_data.csv`. The results of above command was stored in that CSV file.
4. If you want to change the name of that CSV file, modify file `index.php` at line 36 and add file name as a second parameter of the function `printToCsv()`.

## Unit Test

1. Execute below command to run the unit test:
```
$ ./vendor/phpunit/phpunit/phpunit test.php
```
2. After that test, you should get a success test result as below:
```
PHPUnit 8.5.2 by Sebastian Bergmann and contributors.
......  6 / 6 (100%)
Time: 19 ms, Memory: 4.00 MB
OK (6 tests, 6 assertions)
```
