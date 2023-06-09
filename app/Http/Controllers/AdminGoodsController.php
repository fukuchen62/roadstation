<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Facility;

//クライアントへレスポンスするためのクラス
// Auth
use Illuminate\Support\Facades\Auth;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

use App\Models\SpecialGoods;
use App\Models\ProductType;
use App\Models\GoodsCategory;


class AdminGoodsController extends Controller
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // ログインチェック
        $this->middleware('auth');
    }

    /**
     * goodsindex function
     * 道の駅特産品の一覧ページ
     *
     * @return void
     */
    public function goodsindex(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // 検索条件を取得
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        // 道の駅特産品を読み込む
        if ($s != '') {
            $items = SpecialGoods::where('goods_name', 'like', '%' . $s . '%')
                ->orWhere('usage', 'like', '%' . $s . '%')
                ->orWhere('discription', 'like', '%' . $s . '%')
                ->get();
        } else {
            $items = SpecialGoods::where('deleted_at', null)
                ->orderBy('id', 'desc')
                ->get();
        }

        // 件数
        $count = count($items);

        // Bladeファイルに渡すデータ（連想配列）
        $data = [
            'goods' => $items,
            'count' => $count,
            'login_user' => $login_user,
        ];

        // Bladeファイルを呼び出す
        return view('cms.cms_goods_list', $data);
    }

    public function typeindex(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // 検索条件を取得
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        // 種別特産品を読み込む
        if ($s != '') {
            $items = ProductType::where('common_name', 'like', '%' . $s . '%')
                ->orWhere('usage', 'like', '%' . $s . '%')
                ->orWhere('discription', 'like', '%' . $s . '%')
                ->get();
        } else {
            $items = ProductType::where('deleted_at', null)
                ->orderBy('id', 'desc')
                ->get();
        }

        // 件数
        $count = count($items);

        // Bladeファイルに渡すデータ（連想配列）
        $data = [
            'type' => $items,
            'count' => $count,
            'login_user' => $login_user,
        ];

        // Bladeファイルを呼び出す
        return view('cms.cms_type_list', $data);
    }

    /**
     * goodsInput function
     * 新規投稿画面を表示
     *
     * @param Request $request
     * @return void
     */
    public function goodsInput(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // 特産品カテゴリー
        $category_items = GoodsCategory::All();
        $data = [
            'login_user' => $login_user,
            'category_items' => $category_items
        ];
        return view('cms.cms_goods_new', $data);
    }

    /**
     * goodsCreate function
     * 道の駅特産品投稿処理
     *
     * @param Request $request
     * @return void
     */
    public function goodsCreate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, SpecialGoods::$rules);

        // 登録用道の駅特産品のインスタンスを生成
        $goods = new SpecialGoods();

        // 入力データを取得
        $form = $request->all();

        // _tokenを入力データから無くす
        unset($form['_token']);

        // インスタンスのuser_idプロパティにログイン中のユーザーIDを代入
        $goods->user_id = $login_user->id;

        // インスタンスを保存
        $goods->fill($form)->save();

        // 道の駅特産品を読み込む
        $items = SpecialGoods::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // 道の駅特産品の件数
        $goods_count = count($items);

        // 渡すデータ
        $data = [
            'goods_list' => $items,
            'count' => $goods_count,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを読み込む
        return view('cms.cms_goods_list', $data);
    }

    /**
     * goodsEdit function
     *
     * @param Request $request
     * @return void
     */
    public function goodsEdit(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // idによる編集するデータを取得
        $item = SpecialGoods::find($request->id);

        // 特産品カテゴリー
        $category_items = GoodsCategory::All();

        // 渡すデータ
        $data = [
            'goods' => $item,
            'category_items' => $category_items,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_goods_edit', $data);
    }

    /**
     * typeEdit function
     *
     * @param Request $request
     * @return void
     */
    public function typeEdit(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // idによる編集するデータを取得
        $item = ProductType::find($request->id);

        // 特産品カテゴリー
        $category_items = ProductType::All();

        // 渡すデータ
        $data = [
            'goods' => $item,
            'category_items' => $category_items,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_type_edit', $data);
    }


    /**
     * goodsUpdate function
     * 道の駅特産品編集処理
     *
     * @param Request $request
     * @return void
     */
    public function goodsUpdate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, SpecialGoods::$rules);

        // 編集する元のデータを読み込む
        $goods = SpecialGoods::find($request->id);

        // 編集結果を取得
        $form = $request->all();

        // _tokenを削除
        unset($form['_token']);

        // 更新日時を刷新
        $goods->updated_at = date("Y-m-d H:i:s");

        // インスタンスに編集結果を入れ替え、保存
        $goods->fill($form)->save();

        // ニュースを読み直す
        $items = SpecialGoods::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // 特産品の件数
        $goods_count = count($items);

        // 渡すデータ
        $data = [
            'goods' => $items,
            'count' => $goods_count,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_goods_list', $data);
    }

    public function typeUpdate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, ProductType::$rules);

        // 編集する元のデータを読み込む
        $goods = ProductType::find($request->id);

        // 編集結果を取得
        $form = $request->all();

        // _tokenを削除
        unset($form['_token']);

        // 更新日時を刷新
        $goods->updated_at = date("Y-m-d H:i:s");

        // インスタンスに編集結果を入れ替え、保存
        $goods->fill($form)->save();

        // ニュースを読み直す
        $items = ProductType::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // 特産品の件数
        $goods_count = count($items);

        // 渡すデータ
        $data = [
            'type' => $items,
            'count' => $goods_count,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_type_list', $data);
    }

    /**
     * Undocumented function
     * 道の駅特産品を削除
     *
     * @param Request $request
     * @return void
     */
    public function goodsDelete(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // News::find($request->id)->delete();

        // 論理削除処理
        // deleted_atフィル―ドに現在の日時を代入
        $param = [
            'deleted_at' => date("Y-m-d H:i:s"),
        ];

        // DBクリエターで更新処理
        DB::table('special_goods')->where('id', $request->id)
            ->update($param);

        // 道の駅特産品を読み直す
        $items = SpecialGoods::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // 特産品の件数
        $goods_count = count($items);

        // 渡すデータ
        $data = [
            'goods' => $items,
            'count' => $goods_count,
            'login_user' => $login_user,
        ];

        return view('cms.cms_goods_list', $data);
    }

    /**
     * Undocumented function
     * 道の駅特産品を削除
     *
     * @param Request $request
     * @return void
     */
    public function typeDelete(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // News::find($request->id)->delete();

        // 論理削除処理
        // deleted_atフィル―ドに現在の日時を代入
        $param = [
            'deleted_at' => date("Y-m-d H:i:s"),
        ];

        // DBクリエターで更新処理
        DB::table('product_types')->where('id', $request->id)
            ->update($param);

        // 道の駅特産品を読み直す
        $items = ProductType::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // 特産品の件数
        $goods_count = count($items);

        // 渡すデータ
        $data = [
            'type' => $items,
            'count' => $goods_count,
            'login_user' => $login_user,
        ];

        return view('cms.cms_type_list', $data);
    }
}
