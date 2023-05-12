@extends('Auth.Template')
@section('body')
    <section>
        <div class="container">

            <div class="columns">

                <div class="column">

                    <form  action="{{route('Users.store')}}" method="POST" class="box mx-5 my-6">
                        @csrf
                        <div class="field">
                
                            <label class="label mx-6 mt-6">
                                Names
                                <div class="control ">
                                    <input class="input" type="text" value="{{old('Name')}}" required placeholder="John Doe" name="Name" id="Name">
                                </div> 
                            </label>
                        </div>
                        
                        <div class="field">
                            <label class="label mx-6">
                                Email
                                <div class="control ">
                                    <input class="input" type="email" name="Email" required value="{{old('Email')}}" placeholder="xyz@gmail.com">
                                </div> 
                            </label>
                        </div>
                
                        <div class="field">
                            <label class="label mx-6">
                                Registration number
                                <div class="control ">
                                    <input class="input" type="text" required  name="RegNo" value="{{old('RegNo')}}"placeholder="DIT/2023/1234">
                                </div>
                                 
                            </label>
                        </div>
                
                        <div class="field">
                            <label class="label mx-6">
                                Password
                                <div class="control">
                                    <input class="input" type="password" name="password" required placeholder="*********">
                                </div> 
                                <p class="help">Password must have 6-8 characters</p>
                            </label>
                        </div>
                
                        <div class="field">
                            <label class="label mx-6">
                                Confirm Password
                                <div class="control">
                                    <input class="input" type="password" name="password2" required placeholder="*********">
                                </div> 
                                <p class="help">Password must have 6-8 characters</p>
                            </label>
                        </div>
                
                        <div class="field is-grouped is-grouped-right">
                
                            <p class="control">
                              <button type="submit" class="button is-outlined is-link ">
                                Sign-up
                              </button>
                            </p>
                
                            <p class="control">
                              <button type="reset" class="button is-outlined is-danger">
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

    </section>

@endsection