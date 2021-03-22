<?php

namespace Tests\Http\Controllers\Api;

use App\Enums\UserRole;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function getUser(): Model
    {
        return User::factory()->create([
            'role' => UserRole::ADMIN
        ]);
    }

    /** @test */
    public function it_response_http_forbidden_if_without_token_for_list_product()
    {
        $response = $this->getJson(route('api.product'));
        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_response_http_forbidden_if_token_wrong_for_list_product()
    {
        $queryParams = [
            'searchable' => ['id', 'code'],
        ];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . Str::random(32),
        ])->getJson(route('api.product') . '?' . http_build_query($queryParams));

        $response
            ->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_can_list_product()
    {
        $product = Product::factory()->count(5)->create();

        $queryParams = [
            'searchable' => ['id', 'code'],
        ];

        $token = JWTAuth::fromUser($this->getUser());

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson(route('api.product') . '?' . http_build_query($queryParams));

        $response
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonCount($product->count(), 'rows');
    }
}
