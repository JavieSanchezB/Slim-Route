# CHANGELOG.md

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).
Prior to v1.0.2, this included coverage of PHP versions.  Due to changes in the
wider PHP ecosystem, since v1.0.2, minor versions of this package MAY remove
supported versions of dependencies.

## 1.1.0 (2023-01-13)

Fixed:

- Compatible with and requires Slim 4.11+ and PHP 7.4+ (tested on 7.4.33)

Changes:

- Due to the branch, future 1.0.x releases will not appear in this CHANGELOG

## 1.0.2 (2023-01-13)

Fixed:

- Refuses to install with incompatible Slim 4.11

## 1.0.1 (2021-10-19)

Fixed:

- Dependencies updated to fully support PHP 7.1 (tested on 7.1.33)

## 1.0.0 (2021-10-18)

Features:

- Support for http-interop/http-factory-guzzle 1.x with guzzlehttp/psr7 **1.x**
- With guzzlehttp/psr7 2.x, this package should work, but is unnecessary

