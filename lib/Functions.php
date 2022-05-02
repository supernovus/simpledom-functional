<?php

const SMPLDOM = 'SimpleDOM';

/**
 * Alias for simplexml_load_file() that returns a SimpleDOM instance.
 *
 * @return SimpleDOM
 */
function simpledom_load_file(string $filename): SimpleDOM|false
{
  return call_user_func('simplexml_load_file', $filename, SMPLDOM);
}

/**
 * Alias for simplexml_load_string() that returns a SimpleDOM instance.
 *
 * @return SimpleDOM
 */
function simpledom_load_string(string $string): SimpleDOM|false
{
  return call_user_func('simplexml_load_string', $string, SMPLDOM);
}

/**
 * Alias for simplexml_load_dom() that returns a SimpleDOM instance.
 *
 * @return SimpleDOM
 */
function simpledom_import_dom(object $dom): ?SimpleDOM
{
  return call_user_func('simplexml_import_dom', $dom, SMPLDOM);
}

/**
 * Create a SimpleXML object from a SimpleDOM object.
 */
function simpledom_import_simplexml(object $simplexml): ?SimpleDOM
{
  $dom = dom_import_simplexml($simplexml);
  return simpledom_import_dom($dom);
}

