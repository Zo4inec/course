<?php

namespace App\Http\Controllers;

use App\Model\Feedback;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    public function index()
    {
        $messages = Feedback::latest()->get();

        return view('admin.feedbacks', compact('messages'));
    }

    public function create()
    {
        return view('contacts');
    }

    public function store()
    {
        $attr = request()->validate([
            'email'    => 'required|email',
            'body'    => 'required',
        ]);

        Feedback::create($attr);

        return redirect('/admin/feedbacks');
    }
}
