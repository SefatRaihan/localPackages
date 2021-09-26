<?php

namespace  Faq_project\Faqs\Http\Controllers;

use  Faq_project\Faqs\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

class FaqController extends Controller
{


    public function index(){
        $faqs = Faq::all();
        return view('faqViewPage::admin.index', compact('faqs'));
    }

    public function create(){
        return view('faqViewPage::admin.faq-create');
    }

    public function store(Request $request){
        $request->validate([
            'faq_question' => 'required',
            'faq_answer' => 'required'
        ]);
        Faq::create($request->all());

        return Redirect()->back()->with('success', 'FAQs has been uploaded successfuly');
    }

    public function edit($faq_id){
        $faqs = Faq::findOrFail($faq_id);
        return view('faqViewPage::admin.edit', compact('faqs'));
    }

    public function update(Request $request , $faq_id){
        $request->validate([
            'faq_question' => 'required',
            'faq_answer' => 'required'
        ]);

        Faq::findOrFail($faq_id)->update([
            'faq_question' =>$request->faq_question,
            'faq_answer' => $request->faq_answer
        ]);

        return Redirect()->route('admin-index')->with('success', 'Faq has been successfully updated');
    }

    public function delete($faq_id){
        $faq =Faq::findOrFail($faq_id);
        $faq->delete();
        return Redirect()->back()->with('destroy', 'Faq has been successfully deleted');
    }
    
    public function show($faq_id){
        $faq=Faq::find($faq_id);
        return view('faqViewPage::admin.show', compact('faq'));
    }

  
}
