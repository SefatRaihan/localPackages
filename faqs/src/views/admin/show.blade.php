<x-faqViewPage::admin>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center" style="color: red;">
                Faqs View
            </div>
            <div class="card-body">
                <dl class="dl-horizontal">
                    <dt>Faq id:</dt>
                    <dd>{{$faq->id}}</dd>
                    <dt>Faq Question</dt>
                    <dd>{{$faq->faq_question}}</dd>
                    <dt>Faq Answer</dt>
                    <dd>{{$faq->faq_answer}}</dd>
                </dl>
            </div>
        </div>
    </div>
</x-faqViewPage::admin>