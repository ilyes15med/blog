@include('frot-end.header')
@section('mycontent')
  <div>
     <h1>liste de post </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
         
              @foreach ($posts as $post)
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                      <div class="text-xl"> 
                              <div class="font-bold">
                                {{$post->title}}
                             
                              </div>

                            <img src="{{asset($post->image)}}" alt="{{$post->title}}">

                      </div>



                    </div>



              @endforeach

        
        </div>


    


  </div>



@endsection

@include('frot-end.footer')

