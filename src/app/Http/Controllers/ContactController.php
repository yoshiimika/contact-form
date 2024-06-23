<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    //フォーム入力ページの表示
    public function index()
    {
        $categories = Category::all();
        return view('index',compact('categories'));
    }

    //入力内容確認ページの表示(Read)
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name','gender','email', 'tell1','tell2','tell3', 'address','building','category_id','detail']);
        $category = Category::find($contact['category_id']);
        return view('confirm', compact('contact','category'));
    }

    //データの保存処理とお問い合わせ完了ページの表示(Create)
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name','gender','email', 'tell1','tell2','tell3', 'address','building','category_id','detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
