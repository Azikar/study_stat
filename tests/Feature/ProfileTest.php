<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function BasicProfileTest()
    {
        $user = new User();

        $response = $this->get('/Profile/' . $user->first()->nickname . '');

        $response->assertStatus(200);
    }

    /** @test */
    public function BasicApiTest()
    {
        $user = new User();

        $response = $this->get('/api/certificates/' . $user->first()->nickname . '/3');

        $response->assertStatus(200);
    }
    /** @test */
    public function BasicApiData()
    {
        $user = new User();
        $userkeys = ['id', 'name', 'about', 'current_xp', 'lvl'];
        $certificatekeys = ['id', 'title', 'author_id', 'complexity_id', 'certified'];
        $response = $this->get('/api/certificates/' . $user->first()->nickname . '/3')->decodeResponseJson();
        $this->assertArrayHasKey('certificate_info', $response);
        $this->assertArrayHasKey('user_info', $response);
        foreach ($userkeys as $key) {
            $this->assertArrayHasKey($key, $response['user_info']);
        }
        if (count('certificate_info') != 0) {
            foreach ($certificatekeys as $key) {
                $this->assertArrayHasKey($key, $response['certificate_info'][0]);
            }
        }

    }
}
