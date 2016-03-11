# package-skeleton

[![Build Status](https://travis-ci.org/jkirkby91/package-skeleton.svg?branch=master)](https://travis-ci.org/jkirkby91/package-skeleton) [![Test Coverage](https://codeclimate.com/github/jkirkby91/package-skeleton/badges/coverage.svg)](https://codeclimate.com/github/jkirkby91/package-skeleton/coverage) [![Code Climate](https://codeclimate.com/github/jkirkby91/package-skeleton/badges/gpa.svg)](https://codeclimate.com/github/jkirkby91/package-skeleton)

A php PSR-0/4 compliant skeleton package, pre-configured with phpunit + coverage

Comes pre configured with phpunit and travis ci out the box

# Install

    $ git clone git@github.com:jkirkby91/package-skeleton.git .
    $ rm -Rf .git
    $ rm composer.json
    $ mv composer.json.dist composer.json
    $ git init

Next you need to rename your package namespaces
    lib/AppNameSpace to lib/YourApp
    lib/AppNameSpace/AppClassName to lib/YourApp/YourClassName

Then the same with the test directory. These namespaces need to match but appending 'Test' to the name

    Tests/AppNameSpaceTest to Tests/YourAppTest
    Tests/AppNameSpace/AppClassNameTest to Tests/YourApp/YourClassNameTest

# PHPunit tests

To run php unit tests

    $ phpunit

To run php unit tests with coverage

    $ phpunit --coverage-html coverage

# Composer Scripts

To help with mundane tasks, there are some pre-configured composer scripts to speed up repetative tasks

    $ composer gaa
runs the $ git add --all command

    $ composer pu
runs a standard phpunit test

    $ composer pu-c
runs a phpunit test with coverage


and you will see the outcome of your tests

# Composer setup

Dont forget to setup your composer file other wise installs wont work

    {
      "name": "AUTHOR/PACKAGE-NAME",
      "type": "library",
      "description": "",
      "keywords": [ "" ],
      "homepage": "",
      "license": "MIT",
      "authors": [
        { "name": "", "email": "" }
      ],

Email: jkirkby91 {at} gmail {dot} com
Twitter: @jkirkby91

# @TODO

add a gulp/grunt script to server a local webserver showing coverage dashboard
add bower/npm/grunt scaffolds