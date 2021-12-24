<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MemoControllerTest extends TestCase
{
    /**
     * 「@test」をつけるとテストメソッドとして認識されるので日本語でテスト内容を記載できる
     * @test
     */
    public function index_一覧画面の表示に成功する(): void
    {
        // GETメソッドでパスにアクセス
        $response = $this->get('/');

        // ステータスコードとどの画面が表示されているかの検証
        $response->assertStatus(200)
            ->assertViewIs('index');
    }
}
