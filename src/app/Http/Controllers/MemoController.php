<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\Memo\FetchService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public $fetchService;

    public function __construct(FetchService $fetchService)
    {
        $this->fetchService = $fetchService;
    }
    /**
     * メモ一覧ページ表示
     * @return Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $memos = $this->fetchService->fetch();
        return view('index', [
            'memos' => $memos
        ]);
    }
}
