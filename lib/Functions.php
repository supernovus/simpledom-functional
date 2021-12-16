<?php

/**
 * Alias for simplexml_load_file() that returns a SimpleDOM instance.
 *
 * @return SimpleDOM
 */
function simpledom_load_file(string $filename): ?SimpleDOM
{
  $args = func_get_args();

  if (isset($args[0]) && !isset($args[1]))
  {
    $args[1] = 'SimpleDOM';
  }

  return call_user_func_array('simplexml_load_file', $args);
}

/**
 * Alias for simplexml_load_string() that returns a SimpleDOM instance.
 *
 * @return SimpleDOM
 */
function simpledom_load_string(string $string): ?SimpleDOM
{
  $args = func_get_args();

  if (isset($args[0]) && !isset($args[1]))
  {
    $args[1] = 'SimpleDOM';
  }

  return call_user_func_array('simplexml_load_string', $args);
}

/**
 * Alias for simplexml_load_dom() that returns a SimpleDOM instance.
 *
 * @return SimpleDOM
 */
function simpledom_import_dom(object $dom): ?SimpleDOM
{
  $args = func_get_args();

  if (isset($args[0]) && !isset($args[1]))
  {
    $args[1] = 'SimpleDOM';
  }

  return call_user_func_array('simplexml_import_dom', $args);
}

/**
 * Create a SimpleXML object from a SimpleDOM object.
 */
function simpledom_import_simplexml(object $simplexml): ?SimpleDOM
{
  $dom = dom_import_simplexml($simplexml);
  return simpledom_import_dom($dom);
}


