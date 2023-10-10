  <?php

use Core\Authenticator;
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

  it('validates a string with "" ', function() {
    $result = Validator::string('');

    expect($result)->toBeFalse();
  });

  it('validate an email', function() {
    $result = Validator::email('foobar');

    expect($result)->toBeFalse();
  });

  it('validate email format', function() {
    $result = Validator::email('foobar@gmail.com');

    expect($result)->toBeTrue();
  });

  it('validate that a number is greater than a given amount', function() {
    $result = Validator::greaterThan(10,8);

    expect($result)->toBeTrue();
    // expect(Validator::greaterThan(10,12)->toBeTrue())

  })->only();

  it('validate that a number is not greater than a given amount', function() {
    $result = Validator::greaterThan(10,12);

    expect($result)->toBeFalse();

  })->only();

  it('login user', function() {
      // Start a session
      session_start();

      // Instantiate the Authenticator class
      $authenticator = new Authenticator();

      // Mock user data
      $user = ['email' => 'victor@example.com'];

      // Call the login method with the user array
      $authenticator->login($user);

      // Check if the session was set correctly
      expect($_SESSION['user']['email'])->toBe($user['email']);

      // End the session
      session_destroy();
  });
