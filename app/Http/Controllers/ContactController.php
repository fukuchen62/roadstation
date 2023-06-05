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
        $data = [
            'email' => $request->email,
            'title' => $request->title,
            'content' => $request->content,
        ];

        return view('fronts.contact_check', $data);
    }

    /**
     * contactCheck function
     * お問い合わせページの表示
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
