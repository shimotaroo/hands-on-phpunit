<?php

namespace Tests\Unit;

use App\Services\Memo\StoreService;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class StoreServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function store_メモを1件memosテーブルに登録する(): void
    {
        $title = 'サンプルタイトル';
        $body = 'サンプル内容';

        $service = new StoreService();
        $service->store($title, $body);

        $this->assertDatabaseHas('memos', [
            'title' => $title,
            'body' => $body
        ]);
    }
}
