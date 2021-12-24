<?php

namespace Tests\Unit;

use App\Services\Memo\FetchService;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class FetchServiceTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function fetch_メモを全件取得した時の個数が6つである(): void
    {
        // シーダーファイルの実行
        $this->artisan('db:seed', ['--class' => 'MemoSeeder']);

        // サービスクラスのインスタンス生成
        $service = new FetchService();
        // サービスクラスのメソッド実行
        $response = $service->fetch();

        $this->assertSame(6, count($response->toArray()));
    }

    /**
     * @test
     */
    public function fetch_メモを全件取得した時レスポンスが要件通りである(): void
    {
        // シーダーファイルの実行
        $this->artisan('db:seed', ['--class' => 'MemoSeeder']);

        // サービスクラスのインスタンス生成
        $service = new FetchService();
        // サービスクラスのメソッド実行
        $response = $service->fetch();

        $this->assertSame([
            'id',
            'title',
            'body',
            'created_at',
            'updated_at'
        ], array_keys($response[0]->toArray()));
    }
}
