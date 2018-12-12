# sun_ra_blog
a blog for sun ra fans

# Project Requirements and Fulfilment

## MVC

Laravel is an MVC framework

Controllers can be found in the app/http/controllers directory

## ORM

Laravel uses eloquent as its ORM

The models and their relationships can be viewed in the app directory

## Dependency Injection

All controllers and some services have a contract dependency injected into them.

These contracts and services can be viewed in the app/contracts directory and the app/services directory.

A contract is binded to a service in the app/providers directory

## SPA

Vue, VueX, and Vue-Router were used to make the front of this application a SPA

The code for these is found in the resources/js/ directory

## Authentication with JWT

Authentication for the app is handled with an external library that adds JWT tokens to post requests in order to authenticate a use

# Unit testing

The back end for this app is tested using phpunit. Both controller and service tests have been written

## Controller tests

The following the result of running all of the controller tests

![Alt text](https://github.com/liadGolan/sun_ra_blog/blob/master/public/images/controller_tests.png "Controller Tests")

The code for these tests are in the tests/controllers directory

## Service tests

The following the result of running all of the service tests

![Alt text](https://github.com/liadGolan/sun_ra_blog/blob/master/public/images/service_tests.png "Service Tests")

The code for these tests are in the tests/services directory.

These tests also include bounded exhaustive testing which explains the high assertion count
