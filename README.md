# package-skeleton

Create PSR-0/4 compliant packages and projects easily with this skeleton

Comes pre configured to work with phpunit out the box

Run PHPUnit

Open a Terminal
cd to your project root

run

$ composer pu

and you will see the outcome of your tests

to run tests with code coverage run

composer pu-coverage

You should see something like...

    PHPUnit 3.7.19 by Sebastian Bergmann.

    Configuration read from /(directory)/phpunit-skeleton/phpunit.xml

    ....

    Time: 0 seconds, Memory: 3.00Mb

    OK (4 tests, 4 assertions)


We included some pre-configured composer scripts to ease mundane/repetitive tasks

Customizing package Skeleton

Once you've successfully installed package Skeleton, you'll probably want to customize it to your application.

How do I change the name of the application?

Once you have the name of your application which we shall refer to as YourApp, then do the following:

First you have to change the entry Application in the composer.json file to YourApp under the object psr-0:

  "require-dev": {
    "phpunit/phpunit": "^4.7",
    "phpunit/dbunit": ">=1.2",
    "phpunit/php-invoker": "^1.1",
    "phpunit/test-listener-xhprof": "dev-master",
    "lox/xhprof": "dev-master@dev",
    "raveren/kint": "^1.0"
  },
  "autoload": {
    "psr-4": {
      "APP\\": "lib"
    },
    "psr-0": {
      "APP": "lib"
    }
  },

Next, rename the following two directories from APPNameSpace to YourApp:

Rename /lib/APPNameSpace/ to /lib/YourApp/
Rename /tests/APPNameSpace/ to /tests/YourApp/

Finally update the namespace inside the following php files:

Inside /lib/YourApp/Example.php update namespace Application; to namespace YourApp;
Inside /tests/YourApp/ExampleTest.php update $this->obj = new Application\Example; to $this->obj = new YourApp\Example;

Run php composer update again to update the sources
Run pu again to make sure all tests are passing again

Email: jkirkby91 {at} gmail {dot} com
Twitter: @jkirkby91

# @TODO

add a gulp/grunt script to server a local webserver showing coverage dashboard
add bower/npm/grunt scaffolds