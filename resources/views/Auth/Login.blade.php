@extends('Auth.Template')
@section('body')

   <div class="container">
    <div class="columns is-centered">

        <div class="column is-6">

            <form   action="{{ route('login') }}" method="POST" class="box  my-6">
                @csrf
                 <div class="field ">
                     <label class="label my-4 mx-6">
                         Email
                         <div class="control ">
                             <input class="input" type="email" name="email" value="{{old('email')}}" required placeholder="xyz@gmail.com">
                         </div> 
                     </label>
                 </div>
         
                 <div class="field  my-4">
                     <label class="label my-4 mx-6">
                         Password
                         <div class="control">
                             <input class="input" type="password" name="password" required placeholder="*********">
                         </div> 
                         <p class="help">Password must have 6-8 characters</p>
                     </label>
                 </div>
                 <div class="field is-grouped is-grouped-right">
                     <p class="control">
                       <button type="submit" class="button  is-outlined is-link ">
                         Login
                       </button>
                     </p>
                     <p class="control">
                         <button type="reset" class="button is-outlined is-danger ">
                             Clear
                           </button>
                     </p>
                   </div>
             </form>
        </div>

        @if($errors->any())

                    <div class="column mx-5 my-6">

                        <div class="box">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="has-text-danger is-light">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

        @endif

    </div>

   </div>
@endsection
