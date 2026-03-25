<?php
namespace Tests\Unit;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class UserModelTest extends TestCase {
    use RefreshDatabase;
    public function test_it_has_correct_fillable_attributes(): void {
        $user = new User();
        $expected = ['name', 'email', 'password', 'is_admin'];
        $this->assertEquals($expected, $user->getFillable());
    }
    public function test_it_hides_sensitive_attributes(): void {
        $user = new User();
        $expected = ['password', 'remember_token'];
        $this->assertEquals($expected, $user->getHidden());
    }
    public function test_password_is_automatically_hashed(): void {
        $user = User::factory()->create(['password' => 'plaintext']);
        $this->assertNotEquals('plaintext', $user->password);
        $this->assertTrue(strlen($user->password) > 50); // Hashed passwords are longer
    }
}