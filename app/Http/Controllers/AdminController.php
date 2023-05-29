<?php
// 名前空間
namespace App\Http\Controllers;

// クラスをインポートする
//クライアントからのリクエストを受信するためのクラス

use App\Models\Facility;

use Illuminate\Http\Request;

//クライアントへレスポンスするためのクラス
// use App\Models\News;

// Auth
use Illuminate\Support\Facades\Auth;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;


// スーパークラスControllerを継承して独自のクラスを作成する
class AdminController extends Controller
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // ログインチェック
        // $this->middleware('auth');
    }

    public function adminTop()
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // 新着ニュースを読み込む
        // $items = News::orderBy('id', 'desc')
        //     ->limit(4)
        //     ->get();

        // ニュース件数
        // $news_count = News::whereNull('deleted_at')->count();


        $counts = [
            // 'news_count' => $news_count,
            // 'fish_count' => $fish_count,
            // 'spot_count' => $spot_count,
            // 'shop_count' => $shop_count,
            // 'plan_count' => $plan_count,
            // 'facility_count' => $facility_count,
            // 'excape_count' => $excape_count,
            // 'knowledge_count' => $knowledge_count,
        ];



        // テンプレートファイルに渡すデータ（連想配列）
        $data = [
            // 'news_list' => $items,
            'counts' => $counts,
            'login_user' => $login_user,
        ];
        return view('cms.back_main', $data);
    }


    /**
     * ログアウト
     *
     * @return void
     */
    public function logout()
    {
        Auth::logout();

        // リダイレクトの生成
        return redirect()->route('admintop');
    }
}
