# Sprint 1 – s01-08 Testing

This folder contains a collection of PHP exercises focused on software testing and Test-Driven Development (TDD). The goal of this sprint is to practice:

* Unit testing with PHPUnit
* Test-Driven Development (TDD)
* Data Providers in PHPUnit
* Writing maintainable and reusable test cases
* Validating business logic through automated tests
* Structuring PHP projects for testing
* Developing reliable software through incremental testing

This sprint introduces testing methodologies and best practices in PHP by creating practical exercises that validate application behavior through automated tests.

---

## ⚙️ Requirements

To run these exercises you need:

* PHP installed (or XAMPP)
* Composer installed
* PHPUnit
* VS Code (recommended)
* Terminal / command line access

Install dependencies inside each project folder:

```bash
composer install
```

Run the tests:

```bash
vendor/bin/phpunit
```

Example:

```bash
cd ex-1-1-number-checker-testing
vendor/bin/phpunit
```

---

## 📁 Project structure

```text
s01-08-testing/
├── README.md
├── ex-1-1-number-checker-testing
│   ├── composer.json
│   ├── composer.lock
│   ├── src
│   │   └── numberChecker.php
│   └── tests
│       └── NumberCheckerTest.php
│
├── ex-1-2-speed-sensor-tdd
│   ├── composer.json
│   ├── composer.lock
│   ├── src
│   │   └── SpeedSensor.php
│   └── tests
│       └── SpeedSensorTest.php
│
├── ex-2-1-number-checker-dataprovider
│   ├── composer.json
│   ├── composer.lock
│   ├── src
│   │   └── numberChecker.php
│   └── tests
│       └── NumberCheckerTest.php
│
├── ex-2-2-speed-sensor-dataprovider
│   ├── composer.json
│   ├── composer.lock
│   ├── src
│   │   └── SpeedSensor.php
│   └── tests
│       └── SpeedSensorTest.php
│
└── ex-3-1-library-program
    ├── composer.json
    ├── composer.lock
    ├── src
    │   ├── Book.php
    │   ├── Genre.php
    │   └── Library.php
    └── tests
        └── LibraryTest.php
```
---

## 📚 PHP Concepts Practiced

This sprint focuses on testing and software quality concepts in PHP, including:

* PHPUnit
* Unit testing
* Test-Driven Development (TDD)
* Assertions
* Data Providers
* Parameterized tests
* Refactoring with tests
* Business logic validation
* Object-oriented testing
* Automated software verification

---

## 📌 Notes

* Each exercise is a standalone PHP project
* Each project contains its own Composer configuration
* Tests are located inside the `tests/` directory
* Source code is located inside the `src/` directory
* Use TDD principles whenever possible:
  * Red → Green → Refactor
* Keep tests small, isolated, and readable
* Use DataProviders to reduce duplicated test code
* Ensure business rules are fully covered by tests

---

## 🚀 Goal of this sprint

By the end of this sprint you should be comfortable with:

* Writing unit tests with PHPUnit
* Applying Test-Driven Development workflows
* Structuring PHP applications for testing
* Creating reusable and maintainable test suites
* Validating application behavior automatically
* Using DataProviders for scalable testing
* Building more reliable and maintainable software
* Thinking about software quality from the start