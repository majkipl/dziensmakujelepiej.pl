<?php

namespace Tests\Http\Requests\Api;

use App\Http\Requests\Api\IndexProductRequest;
use Tests\Feature\Api\Validation\ValidationTestCase;

class IndexProductRequestTest extends ValidationTestCase
{

    /** @test */
    public function validation_pass_for_valid_data()
    {
        $data = [
            'searchable' => ['id','code','collection_id','collection.name'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->runValidationTest($data, IndexProductRequest::class);
    }

    /** @test */
    public function validation_fails_if_searchable_is_not_exists()
    {
        $data = [
            'searchable' => ['column'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexProductRequest::class);
    }

    /** @test */
    public function validation_fails_if_searchable_is_not_array()
    {
        $data = [
            'searchable' => 'id,code,collection_id,collection.name', // Should be an array
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexProductRequest::class);
    }

    /** @test */
    public function validation_fails_if_offset_is_not_an_integer()
    {
        $data = [
            'searchable' => ['id', 'code'],
            'offset' => 'abc', // Should be an integer
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexProductRequest::class);
    }

    /** @test */
    public function validation_fails_if_limit_is_not_an_integer()
    {
        $data = [
            'searchable' => ['id', 'code'],
            'offset' => 0,
            'limit' => 'abc', // Should be an integer
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexProductRequest::class);
    }

    /** @test */
    public function validation_fails_if_sort_is_invalid()
    {
        $data = [
            'searchable' => ['id', 'code'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'invalid_column', // Should be 'id', 'name'
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexProductRequest::class);
    }

    /** @test */
    public function validation_fails_if_order_is_invalid()
    {
        $data = [
            'searchable' => ['id', 'code'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'invalid_order', // Should be 'asc' or 'desc'
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexProductRequest::class);
    }
}
