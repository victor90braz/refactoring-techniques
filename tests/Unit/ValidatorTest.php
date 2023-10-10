<?php

use Core\Validator;

// $value, $min = 1, $max = INF
it('validate a string', function() {
  $result = Validator::string('foobar', 1, 10);

  expect($result)->toBeTrue();
});