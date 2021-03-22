<?php

namespace Tests\Http\Requests\Api;

use App\Http\Requests\Api\IndexApplicationRequest;
use Tests\Feature\Api\Validation\ValidationTestCase;

class IndexApplicationRequestTest extends ValidationTestCase
{

    /** @test */
    public function validation_pass_for_valid_data()
    {
        $data = [
            'searchable' => ['id','name','email','phone','street','flat','zip','city','purchase','whence','whence_other','img_receipt','img_ean','img_box','legal_1','legal_2','legal_3','legal_4','created_at'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->runValidationTest($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_searchable_is_not_exists()
    {
        $data = [
            'searchable' => ['slug'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_searchable_is_not_array()
    {
        $data = [
            'searchable' => 'id,name,email,phone,street,flat,zip,city,purchase,whence,whence_other,img_receipt,img_ean,img_box,legal_1,legal_2,legal_3,legal_4,created_at', // Should be an array
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_offset_is_not_an_integer()
    {
        $data = [
            'searchable' => ['id', 'name'],
            'offset' => 'abc', // Should be an integer
            'limit' => 10,
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_limit_is_not_an_integer()
    {
        $data = [
            'searchable' => ['id', 'name'],
            'offset' => 0,
            'limit' => 'abc', // Should be an integer
            'sort' => 'id',
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_sort_is_invalid()
    {
        $data = [
            'searchable' => ['id', 'name'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'invalid_column', // Should be 'id', 'name'
            'order' => 'asc',
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }

    /** @test */
    public function validation_fails_if_order_is_invalid()
    {
        $data = [
            'searchable' => ['id', 'name'],
            'offset' => 0,
            'limit' => 10,
            'sort' => 'id',
            'order' => 'invalid_order', // Should be 'asc' or 'desc'
            'search' => 'example search'
        ];

        $this->expectValidationException($data, IndexApplicationRequest::class);
    }
}
