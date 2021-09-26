<x-faqViewPage::admin>
    <style>
        .container{
            margin-top: 30px;
        }
        h3{
            color: red;
        }
        tr th{
            color:red;
        }
        .btn{
            background-color: red;
            color: white;
            border: none;
        }
        .btn:hover{
            color: red;
            background-color: white;
        }
    </style>
<div >
    <div class="text-center">
        <h3>FAQs View</h3>
    </div>
    <div class="card-body mx-5">   
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <p>{{ $message }}</p>
    </div>
    @endif
    @if ($message = Session::get('destroy'))
    <div class="alert alert-danger" role="alert">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr class="thead">
                <th scope="col">Serial No.</th>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
                <th scope="col" class="text-center" style="width: 250px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($faqs->count())
            @foreach($faqs as $key => $faq)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$faq->faq_question}}</td>
                <td>{{$faq->faq_answer}}</td>
                <td class="action-link text-center" ">
                    <a href="{{url('edit'.$faq->id)}}" class="btn">edit</a>
                    <a href="{{url('delete'.$faq->id)}}" class="btn">delete</a>
                    <a href="{{url('show'.$faq->id)}}" class="btn">show</a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    </div>
</div>

</x-faqViewPage::admin>