#Quick Shoot - Party Mode

###TLDR: How to run tests
####1. Feature test
`php ./vendor/phpunit/phpunit/phpunit --configuration ./phpunit.xml --filter "/(::testBasicTest)( .*)?$/" Tests\Feature\ExampleTest ./tests/Feature/ExampleTest.php --teamcity`

####2. Unit test
`php ./vendor/phpunit/phpunit/phpunit --configuration ./phpunit.xml --filter "/(::testBasicTest)( .*)?$/" Tests\Unit\ExampleTest ./tests/Unit/ExampleTest.php --teamcity`

####3. DB Test
`php ./vendor/phpunit/phpunit/phpunit --configuration ./phpunit.xml --filter "/(::testExample)( .*)?$/" Tests\Unit\DBUnitTest ./tests/Unit/DBUnitTest.php --teamcity`