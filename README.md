# SimpleDOM Global Functions

## Summary

The `simpledom_*` global functions for [SimpleDOM](https://github.com/supernovus/simpledom) 

## Description

Versions of SimpleDOM prior to 3.0 exported these global functions automatically. As of version 3.0, the main library has moved to using static class methods instead. For legacy code still using the global functions, this package adds them back.

It's obviously not a standalone package, but an extension of SimpleDOM.

## Functions

```php
simpledom_load_file(string $filename): ?SimpleDOM; // see simplexml_load_file()
simpledom_load_string(string $string): ?SimpleDOM; // see simplexml_load_string()
simpledom_import_dom(object $dom): ?SimpleDOM;     // see simplexml_import_dom()
simpledom_import_simplexml(object $simplexml): ?SimpleDOM;
```

## Tests

Run `make test` to run the tests using PHPUnit.

## License

[MIT License](http://www.opensource.org/licenses/mit-license.php)

