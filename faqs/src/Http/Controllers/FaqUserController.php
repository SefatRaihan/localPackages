<?php

namespace  Faq_project\Faqs\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  Faq_project\Faqs\Models\Faq;

class FaqUserController extends Controller
{
    public function faqIndex(){
        $faqs = Faq::take(5)->get();
        
        return view('faqViewPage::faq-page.index', compact('faqs'));
    }
}