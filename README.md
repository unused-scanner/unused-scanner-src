# Unused Scanner

A CLI tool to analyze composer dependencies and identify packages that are not used and could potentially be removed.

# Fork Notice

This project is a fork of the original [Insolita/unused-scanner](https://github.com/Insolita/unused-scanner), originally created by https://github.com/Insolita. Unfortunately, https://github.com/Insolita has passed away, and as a result, the original repository is no longer actively maintained. In an effort to keep the project alive and address any potential issues, this fork has been initiated. I extend my heartfelt gratitude to https://github.com/Insolita for her invaluable contributions. The original repository can be found [here](https://github.com/Insolita/unused-scanner) in memory of https://github.com/Insolita.

### Installation

`composer require --dev unused-scanner/unused-scanner`

### Usage

prepare configuration file, see [scanner_config.example.php](scanner_config.example.php)

put it in project root (or other place)

run `composer dumpautoload` in your project directory

run `unused_scanner /path/to/configuration/file/scanner_config.php`

since 1.1 you can run it without  argument, if scanner_config.php existed in current working directory, it will be used
by default

**For auto-testing**:

Add --silent option for skip progress output and return exit code = 16, when unused packages detected

run `unused_scanner --silent /path/to/configuration/file/scanner_config.php`

**Docker**:

https://github.com/juanmrad/docker-unused-scanner

![Demo screenshot](unused.png)

### Licence

This project uses the [MIT licence](https://choosealicense.com/licenses/mit/).
