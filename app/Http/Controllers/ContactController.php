<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * contact function
     * お問い合わせページの表示
     *
     * @param Request $request
     * @return void
     */
    public function contact(Request $request)
    {
        return view('fronts.contact');
    }

    /**
     * contactCheck function
     * お問い合わせページの表示
     *
     * @param Request $request
     * @return void
     */
    public function contactCheck(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required|string|max:50',
            'content' => 'required|string|max:1000',
        ];

        $this->validate($request, $validate_rule);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'content' => $request->content,
        ];

        return view('fronts.contact_check', $data);
    }

    /**
     * contactCheck function
     * お問い合わせ完了ページの表示
     *
     * @param Request $request
     * @return void
     */
    public function contactSend(Request $request)
    {
        $data = [
            'email' => $request->email,
            'title' => $request->title,
            'content' => $request->content,
        ];

        return view('fronts.contact_send', $data);
    }
}
