<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Memo\StoreRequest;
use App\Services\Memo\FetchService;
use App\Services\Memo\StoreService;
use Exception;
use Illuminate\Contracts\View\View;

class MemoController extends Controller
{
    public $fetchService;
    public $storeService;

    public function __construct(FetchService $fetchService, StoreService $storeService)
    {
        $this->fetchService = $fetchService;
        $this->storeService = $storeService;
    }
    /**
     * メモ一覧ページ表示
     * @return Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        try {
            $memos = $this->fetchService->fetch();
        } catch (Exception $e) {
            echo "エラー：" . $e->getMessage();
        }

        return view('index', [
            'memos' => $memos
        ]);
    }

    /**
     * メモ登録
     * @param App\Http\Requests\Memo\StoreRequest $request
     * @return Illuminate\Contracts\View\View
     */
    public function store(StoreRequest $request): View
    {
        $title = $request->title;
        $body = $request->body;

        try {
            $this->storeService->store($title, $body);
            $memos = $this->fetchService->fetch();
        } catch (Exception $e) {
            echo "エラー：" . $e->getMessage();
        }

        return view('index', [
            'memos' => $memos
        ]);
    }
}
