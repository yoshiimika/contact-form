<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    //フォーム入力ページの表示
    public function index()
    {
        return view('index');
    }

    //入力内容確認ページの表示
    //CRUD処理におけるRead（取得）
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }

    //データの保存処理とお問い合わせ完了ページの表示
    //CRUD処理におけるCreate（追加）
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
