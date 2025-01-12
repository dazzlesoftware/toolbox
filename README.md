# DazzleSoftware Toolbox

[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://github.com/phpstan/phpstan)
[![Latest Version](http://img.shields.io/packagist/v/dazzlesoftware/toolbox.svg?style=flat)](https://packagist.org/packages/dazzlesoftware/toolbox)
[![Software License](https://img.shields.io/badge/license-GPLv3-brightgreen.svg?style=flat)](LICENSE)
[![Build Status](https://img.shields.io/travis/dazzlesoftware/toolbox/master.svg?style=flat)](https://travis-ci.org/dazzlesoftware/toolbox)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/dazzlesoftware/toolbox.svg?style=flat)](https://scrutinizer-ci.com/g/dazzlesoftware/toolbox/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/dazzlesoftware/toolbox.svg?style=flat)](https://scrutinizer-ci.com/g/dazzlesoftware/toolbox)
[![Total Downloads](https://img.shields.io/packagist/dt/dazzlesoftware/toolbox.svg?style=flat)](https://packagist.org/packages/dazzlesoftware/toolbox)

DazzleSoftware\Toolbox package contains a set of reusable PHP interfaces, classes and traits.

* ArrayTraits
* Blueprints
* DI
* File
* ResourceLocator
* Session
* StreamWrapper

## Installation

You can use [Composer](http://getcomposer.org/) to download and install this package as well as its dependencies.

### Composer

To add this package as a local, per-project dependency to your project, simply add a dependency on `dazzlesoftware/toolbox` to your project's `composer.json` file. Here is a minimal example of a `composer.json` file that just defines a dependency on Diff:

    {
        "require": {
            "dazzlesoftware/toolbox": "^1.0.0"
        }
    }


# Contributing

We appreciate any contribution to ToolBox, whether it is related to bugs or simply a suggestion or improvement.
However, we ask that any contribution follow our simple guidelines in order to be properly received.

All our projects follow the [GitFlow branching model][gitflow-model], from development to release. If you are not familiar with it, there are several guides and tutorials to make you understand what it is about.

You will probably want to get started by installing [this very good collection of git extensions][gitflow-extensions].

What you mainly want to know is that:

- All the main activity happens in the `develop` branch. Any pull request should be addressed only to that branch. We will not consider pull requests made to the `master`.
- It's very well appreciated, and highly suggested, to start a new feature whenever you want to make changes or add functionalities. It will make it much easier for us to just checkout your feature branch and test it, before merging it into `develop`


# Getting Started

* Have fun!!!


[gitflow-model]: http://nvie.com/posts/a-successful-git-branching-model/
[gitflow-extensions]: https://github.com/nvie/gitflow
