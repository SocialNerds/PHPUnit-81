# Why Do You Need Unit Testing?

An example of unit testing in PHP. And pretty much every other language that supports
unit testing. (<-All languages)

# Check the full explanation video (GR)
[![Unit Testing, Γιατί το Κάνουμε; #81, live](https://img.youtube.com/vi/DTdYndNp8vw/0.jpg)](https://youtu.be/DTdYndNp8vw)

# Installation
Requirements
- You need to have [Docker](https://docs.docker.com/engine/installation/) installed

Run in root folder,
~~~~
cp .env.example .env
docker-compose build && docker-compose up -d
~~~~

Login to the container,
~~~~
docker exec -it -u serveruser app_fpm /bin/bash -c "TERM=$TERM exec bash"
~~~~

To check it works,
~~~~
php hello.php
~~~~

To check the tests,
~~~~
cd 3
composer install
phpunit
~~~~

You should see something like this,
~~~~
PHPUnit 8.1.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.3.5
Configuration: /home/serveruser/data/3/phpunit.xml

.                                                                   1 / 1 (100%)

Time: 106 ms, Memory: 10.00 MB

OK (1 test, 4 assertions)
~~~~

Exit the container,
~~~~
exit
~~~~

# By SocialNerds
* [SocialNerds.gr](https://www.socialnerds.gr/)
* [YouTube](https://www.youtube.com/SocialNerdsGR)
* [Facebook](https://www.facebook.com/SocialNerdsGR)
* [Twitter](https://twitter.com/socialnerdsgr)