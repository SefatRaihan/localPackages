<?php

namespace Faq_project\Faqs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'faq_question',
        'faq_answer'
    ];
}
