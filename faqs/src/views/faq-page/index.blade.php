<x-faqViewPage::header>
    <x-faqViewPage::partials.nav />

    <div class="content grid-containe">
        <x-faqViewPage::header>
            <x-faqViewPage::partials.aside />
        </x-faqViewPage::header>
        <div class="main card">

        @foreach($faqs as $faq)
        <div>
        <button class="accordion">{{ $faq->faq_question }}</button>
            <div class="panel">
                <p>{{ $faq->faq_answer }}</p>
            </div>
        </div>
         @endforeach   

        </div>
    </div>

    <x-faqViewPage::partials.contact />
    </x-faqViewPage::main>