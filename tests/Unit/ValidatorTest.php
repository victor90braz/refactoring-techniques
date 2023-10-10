<?php

use Core\Validator;

// $value, $min = 1, $max = INF
it('validate a string', function() {
  $result = Validator::string('foobar');

  expect($result)->toBeTrue();
});

it('validates a string with minimum length', function() {
  $result = Validator::string('foobar', 20);

  expect($result)->toBeFalse();
});

it('validates a string with maximum length', function() {
  $result = Validator::string('foobar', 1, 20);

  expect($result)->toBeTrue();
});