@extends('Auth.Template')
@section('body')

   <div class="container">
    <div class="columns">

        <div class="column">

            <form  method="POST" class="box mx-5 my-6">
                @csrf
                 <div class="field px-6 py-5 mt-6 mx-6 mb-2">
                     <label class="label mx-6">
                         Email
                         <div class="control ">
                             <input class="input" type="email" required placeholder="xyz@gmail.com">
                         </div> 
                     </label>
                 </div>
         
                 <div class="field px-6 py-5 mb-3 mx-6">
                     <label class="label mx-6">
                         Password
                         <div class="control">
                             <input class="input" type="password" required placeholder="*********">
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
