# sapphirecat/slim4-http-interop-adapter

Auto-configures Slim 4.x to use `guzzlehttp/psr7` **version 1.x**.

## Installation and Usage

	composer require sapphirecat/slim4-http-interop-adapter

Dependencies and autoloading are both configured so that installation of the
package is the only necessary action.  Using the autoloader will register the
necessary support with Slim's `Psr17FactoryProvider`.

## Guzzle PSR-7 versions in Slim 4

Slim 4 requires a PSR-17 implementation.  Guzzle PSR-7 **version 1.x** does not
provide one, but **version 2.x** does.

Prior to 4.9.0, Slim 4 supported the Guzzle HTTP Factory,
`http-interop/http-factory-guzzle`, which provided the PSR-17 implementation.

Since 4.9.0, Slim 4 supports Guzzle PSR-7 2.x's PSR-17 implementation directly,
removing support for 1.x.  This
package—`sapphirecat/slim4-http-interop-adapter`—is primarily designed to
support version 1.x in the newer Slim 4 versions.  It continues to be
functional, but redundant, with Guzzle PSR-7 2.x and/or with Slim 4.8.1 and
older.

## License

MIT, copied verbatim from Slim 4.8.1.
