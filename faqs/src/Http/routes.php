<?php

use Illuminate\Support\Facades\Route;

use Faq_project\Faqs\Http\Controllers\FaqController;
use Faq_project\Faqs\Http\Controllers\FaqUserController;

Route::get('/ff', function () {

    echo "I am from Faq package";
});




    Route::get('admin-index', [FaqController::class, 'index'])->name('admin-index');
    Route::get('faq-create', [FaqController::class, 'create']);
    Route::post('store', [FaqController::class, 'store']);
    Route::get('edit{faq_id}', [FaqController::class, 'edit']);
    Route::post('update-data{faq_id}', [FaqController::class, 'update'])->name('admin-update');
    Route::get('delete{faq_id}', [FaqController::class, 'delete']);
    Route::get('show{faq_id}', [FaqController::class, 'show']);

    Route::get('/', [FaqUserController::class, 'faqIndex']);

