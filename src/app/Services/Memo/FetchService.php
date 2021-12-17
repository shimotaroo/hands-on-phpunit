<?php
declare(strict_types=1);

namespace App\Services\Memo;

use App\Models\Memo;
use Illuminate\Database\Eloquent\Collection;

class FetchService
{
    /**
     * メモを全件取得
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function fetch(): Collection
    {
        return Memo::latest()->get();
    }
}
