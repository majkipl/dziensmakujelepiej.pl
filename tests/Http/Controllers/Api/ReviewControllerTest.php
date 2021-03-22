<?php

namespace Tests\Http\Controllers\Api;

use App\Enums\UserRole;
use App\Models\Collection;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class ReviewControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function getUser(): Model
    {
        return User::factory()->create([
            'role' => UserRole::ADMIN
        ]);
    }

    /* index */

    /** @test */
    public function it_response_http_forbidden_if_without_token_for_list_review()
    {
        $response = $this->getJson(route('api.review'));
        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_response_http_forbidden_if_token_wrong_for_list_review()
    {
        $queryParams = [
            'searchable' => ['id', 'customer'],
        ];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . Str::random(32),
        ])->getJson(route('api.review') . '?' . http_build_query($queryParams));

        $response
            ->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_can_list_review()
    {
        $review = Review::factory()->count(5)->create();

        $queryParams = [
            'searchable' => ['id', 'customer'],
        ];

        $token = JWTAuth::fromUser($this->getUser());

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson(route('api.review') . '?' . http_build_query($queryParams));

        $response
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonCount($review->count(), 'rows');
    }

    /* add */

    /** @test */
    public function it_response_http_forbidden_if_without_token_for_add_review()
    {
        $response = $this->postJson(route('api.review.add'));
        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_response_http_forbidden_if_token_wrong_for_add_review()
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . Str::random(32),
        ])->postJson(route('api.review.add'));

        $response
            ->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_can_add_review()
    {
        $token = JWTAuth::fromUser($this->getUser());
        $collection = Collection::factory()->create();

        /** @var Collection $collection */
        $reviewData = [
            'customer' => $this->faker->firstName,
            'content' => $this->faker->realText(512),
            'collection_id' => $collection->id
        ];

        $response = $this->withHeaders(['Authorization' => 'Bearer ' . $token])->postJson(route('api.review.add'), $reviewData);

        $response
            ->assertStatus(Response::HTTP_OK)
            ->assertJson([
                'status' => 'success',
            ]);

        $this->assertDatabaseHas('reviews', $reviewData);
    }

    /** @test */
    public function it_handles_unprocessable_entity_when_fails_to_add_review()
    {
        $token = JWTAuth::fromUser($this->getUser());

        $invalidData = [];

        $response = $this->withHeaders(['Authorization' => 'Bearer ' . $token])->postJson(route('api.review.add'), $invalidData);

        $response
            ->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY)
            ->assertJson([
                'message' => 'The given data was invalid.',
                'errors' => [
                    'customer' => [
                        'Pole jest wymagane.',
                    ],
                    'content' => [
                        'Pole jest wymagane.',
                    ],
                    'collection_id' => [
                        'Pole jest wymagane.',
                    ],
                ],
            ]);

        $this->assertDatabaseCount('reviews', 0);
    }

    /* update */

    /** @test */
    public function it_response_http_forbidden_if_without_token_for_update_review()
    {
        $response = $this->putJson(route('api.review.update'));
        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_response_http_forbidden_if_token_wrong_for_update_review()
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . Str::random(32),
        ])->putJson(route('api.review.update'));

        $response
            ->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_can_update_review()
    {
        $token = JWTAuth::fromUser($this->getUser());

        $review = Review::factory()->create();

        /** @var Review $review */
        $updateData = [
            'id' => $review->id,
            'customer' => $this->faker->firstName,
            'content' => $this->faker->realText(512),
            'collection_id' => $review->collection->id
        ];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->putJson(route('api.review.update'), $updateData);

        $response
            ->assertStatus(Response::HTTP_OK)
            ->assertJson([
                'status' => 'success',
            ]);

        $this->assertDatabaseHas('reviews', $updateData);
    }

    /** @test */
    public function it_handles_unprocessable_entity_when_fails_to_update_review()
    {
        $token = JWTAuth::fromUser($this->getUser());

        $review = Review::factory()->create();

        /** @var Review $review */
        $invalidData = [
            'id' => $review->id,
        ];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->putJson(route('api.review.update'), $invalidData);

        $response
            ->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY)
            ->assertJson([
                'message' => 'The given data was invalid.',
                'errors' => [
                    'customer' => [
                        'Pole jest wymagane.',
                    ],
                    'content' => [
                        'Pole jest wymagane.',
                    ],
                    'collection_id' => [
                        'Pole jest wymagane.',
                    ],
                ],
            ]);
    }

    /* delete */

    /** @test */
    public function it_response_http_forbidden_if_without_token_for_delete_review()
    {
        $review = Review::factory()->create();

        /** @var Review $review */
        $response = $this->deleteJson(route('api.review.delete', ['review' => $review->id]));
        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_response_http_forbidden_if_token_wrong_for_delete_review()
    {
        $review = Review::factory()->create();

        /** @var Review $review */
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . Str::random(32),
        ])->deleteJson(route('api.review.delete', ['review' => $review->id]));

        $response
            ->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_can_delete_review()
    {
        $token = JWTAuth::fromUser($this->getUser());

        $review = Review::factory()->create();

        /** @var Review $review */
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->deleteJson(route('api.review.delete', ['review' => $review->id]));

        $response
            ->assertStatus(Response::HTTP_OK)
            ->assertJson([
                'status' => 'success',
                'message' => 'Rekord został pomyślnie usunięty.',
            ]);

        $this->assertDatabaseMissing('reviews', [
            'id' => $review->id,
        ]);
    }
}
