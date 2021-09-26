
<x-faqViewPage::admin>
    <style>
        .container{
            margin-top: 30px;
        }
        .btn{
            background-color: red;
            color: white;
            border: none;
        }
        .btn:hover{
            background-color: red;
            color: white;
        }
    </style>
<div class="container">
    <div class="card">
        <div class="card-header  text-center" style="color: red;">
            Create FAQs
        </div>
        <div class="card-body">

            <form action="{{url('store')}}" method="post" class="ml-5">
                @csrf
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="form-group mb-3">
                    <label for="faq_question">FAQ Question</label>
                    <input type="text" name="faq_question" class="form-control">
                    @error('faq_question')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="faq_answer">FAQ Answer</label>
                    <textarea type="text" name="faq_answer" class="form-control"></textarea>
                    @error('faq_answer')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <input " type="submit" name="ctg-btn" class="btn btn-block" value="Save">

                
            </form>
        </div>
    </div>
</div>    
</x-faqViewPage::admin>
