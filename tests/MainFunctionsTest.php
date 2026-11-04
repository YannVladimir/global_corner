<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../includes/main_functions.php';

/**
 * Covers the pure, DB-free helpers in includes/main_functions.php.
 * Everything else in that file opens its own mysqli connection inline and
 * isn't practically unit-testable without a live database and a larger
 * refactor (see README "Known issues").
 */
final class MainFunctionsTest extends TestCase
{
    protected function setUp(): void
    {
        $_SESSION = [];
        $_POST = [];
    }

    public function testGenerateUserMarksSessionAsGuest(): void
    {
        generateUser();
        $this->assertSame('0', $_SESSION['u']);
    }

    public function testCheckUserMarksSessionAsLoggedIn(): void
    {
        checkUser();
        $this->assertSame('1', $_SESSION['is_user']);
    }

    public function testCheckAdminMarksSessionAsNotUser(): void
    {
        checkAdmin();
        $this->assertSame('0', $_SESSION['is_user']);
    }

    public function testCheckIsStringSetPostIsTrueForNonEmptyString(): void
    {
        $_POST['name'] = 'Yann';
        $this->assertTrue(checkIsStringSetPost('name'));
    }

    public function testCheckIsStringSetPostIsFalseWhenMissing(): void
    {
        $this->assertFalse(checkIsStringSetPost('missing'));
    }

    public function testCheckIsStringSetPostIsFalseForEmptyString(): void
    {
        $_POST['name'] = '';
        $this->assertFalse(checkIsStringSetPost('name'));
    }

    public function testCheckIsIntSetPostIsTrueForNumericString(): void
    {
        $_POST['age'] = '42';
        $this->assertTrue(checkIsIntSetPost('age'));
    }

    public function testCheckIsIntSetPostIsFalseForNonNumeric(): void
    {
        $_POST['age'] = 'abc';
        $this->assertFalse(checkIsIntSetPost('age'));
    }

    public function testEncodeUrlReturnsFalseForEmptyInput(): void
    {
        $this->assertFalse(encodeUrl(''));
    }

    public function testEncodeUrlPercentEncodesANonEmptyUrl(): void
    {
        // Regression test: this used to recurse into itself forever on any
        // non-empty input instead of actually encoding anything.
        $this->assertSame(urlencode('a b&c'), encodeUrl('a b&c'));
    }

    public function testLogUserOutClearsSessionIdentityFields(): void
    {
        $_SESSION = [
            'id' => 7,
            'username' => 'Yann',
            'phone' => '0788000000',
            'email' => 'yann@example.com',
            'priority' => 1,
        ];

        // Suppressed: session_destroy() warns about an uninitialized session
        // under the PHPUnit CLI SAPI with no real session started; the array
        // key removal this test actually checks happens regardless.
        @log_user_out();

        $this->assertArrayNotHasKey('id', $_SESSION);
        $this->assertArrayNotHasKey('username', $_SESSION);
        $this->assertArrayNotHasKey('phone', $_SESSION);
        $this->assertArrayNotHasKey('email', $_SESSION);
        $this->assertArrayNotHasKey('priority', $_SESSION);
    }
}
