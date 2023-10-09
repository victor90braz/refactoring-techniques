<?php

use Core\Container;

test('It can resolve something out of the container', function () {
    // arange
    $container = new Container();

    $container->bind('foo', fn() => 'bar');

    // act
    $result = $container->resolve('foo');

    // assert/expect
    expect($result)->toEqual('bar');
});
