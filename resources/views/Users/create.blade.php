@extends('AdminView.Template')
@section('content')
    <section class="section">
        
        <div class="container">

            @if(session('message'))

                <div class="notification is-info">

                    <button class="delete"></button>
                    Application sucessful please await approval

                </div>
            @endif

            <form action={{route('add_user')}} method="POST">
                @csrf
    
                <div class="field is-horizontal">
    
                    <div class="field-label">
                        <label for="Name" class="label">Names</label>
                    </div>
                    <div class="field-body">
    
                        <div class="control">
    
                            <input type="text"  class="input" name="Name" required placeholder="John Doe">
    
                        </div>
    
                    </div>
    
                </div>
    
                <div class="field is-horizontal">
    
                    <div class="field-label">
                        <label for="Name" class="label">Email</label>
                    </div>
                    <div class="field-body">
    
                        <div class="control">
    
                            <input type="email"  class="input" name="Email" required placeholder="Johndoe@gmail.com">
    
                        </div>
    
                    </div>
    
                </div>
    
                <div class="field is-horizontal">
    
                    <div class="field-label">
                        <label for="Name" class="label">Staff I.D / Role Number</label>
                    </div>
                    <div class="field-body">
    
                        <div class="control">
    
                            <input type="text"  class="input" name="RegNo" required placeholder="ICT-001-002">
    
                        </div>
    
                    </div>
    
                </div>
    
                <div class="field is-horizontal">
    
                    <div class="field-label">
                        <label for="Name" class="label has-text-danger">IS ADMINISTRATOR</label>
                    </div>
                    <div class="field-body">
    
                        <div class="control">
    
                            <label for="True" class="radio">
                                <input type="radio"   name="is_admin" value=true required >
                                Yes
                            </label>
                            <label for="True" class="radio">
                                <input type="radio"   name="is_admin" value=false required checked > 
                                No
                            </label>
    
                        </div>
                        
    
                    </div>
    
                </div>
    
                <div class="field is-horizontal">
    
                    <div class="field-label">
    
                        <label for="password" class="label">Password</label>
    
                    </div>
    
                    <div class="field-body">
    
                        <div class="control">
    
                            <input type="password" class="input has-text-danger" required name="password" placeholder="Password must be 6-8 characters">
    
                        </div>
                        
    
                    </div>
    
                </div>
    
                <div class="field is-horizontal">
    
                    <div class="field-label">
    
                        <label for="password" class="label">Confirm Password</label>
    
                    </div>
    
                    <div class="field-body">
    
                        <div class="control">
    
                            <input type="password" class="input has-text-danger" required name="password2" placeholder="Password must be 6-8 characters">
    
                        </div>
                        
    
                    </div>
    
                </div>
    
    
                <div class="field is-grouped is-grouped-centered ">
                        
                    <p class="control">
                      <button type="submit" class="button is-outlined is-danger ">
                        ADD USER
                      </button>
                    </p>
        
                    <p class="control">
                      <button type="reset" class="button is-outlined is-danger">
                        Clear
                      </button>
                    </p>
                  </div>
    
    
            </form>

            @if($errors->any())

            <div class="column mx-5 my-6">

                <div class="notification is-danger is-light">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="has-text-danger is-light">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>

        @endif

        </div>

    </section>

@endsection