<?php
declare(strict_types=1);

namespace App\Services\Memo;

use App\Models\Memo;

class StoreService
{
    /**
     * メモをDBに保存
     * @param string $ttile
     * @param string $body
     * @return void
     */
    public function store(string $title, string $body): void
    {
        $memo = new Memo();
        $memo->title = $title;
        $memo->body = $body;
        $memo->save();
    }
}
