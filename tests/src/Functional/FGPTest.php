<?php

namespace Drupal\Tests\fgp\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests FGP installation profile expectations.
 *
 * @group fgp
 */
class FGPTest extends BrowserTestBase {

  /**
   * Installation profile.
   *
   * @var string
   */
  protected $profile = 'fgp';

  /**
   * Test for the login.
   */
  public function testOpenDataLogin() {
    // Create a user to check the login.
    $user = $this->createUser();

    // Log in our user.
    $this->drupalLogin($user);

    // Verify that logged in user can access the logout link.
    $this->drupalGet('user');

    $this->assertLinkByHref('/user/logout');
  }

}
