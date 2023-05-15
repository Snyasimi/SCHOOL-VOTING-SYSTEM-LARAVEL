@extends('Template')
@section('content')
<section class="section">

    <div class="container">

        <div class="colums is-multiline">

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

            <div class="column">

                <form  method="POST" action="{{ route('Candidate.store') }}" class="box">
                    @csrf

                    <div class="field is-horizontal">

                        <div class="field-label">

                            <div class="label has-text-centered">
                                <label for="position" class="field-label">Position</label>
                            </div>

                        </div>

                        <div class="field-body">

                            <div class="field">

                                <div class="control">

                                    <div class="select is-link is-hovered mx-4">
                                        <select name="Position">
                                            <option value="">Select a position</option>
                                            @for($i=0;$i<3;$i++)
                                                <option>HAHA</option>
                                            @endfor
                                        </select>
                                    </div>
    
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="field is-horizontal">

                        <div class="field-label">

                            <div class="label has-text-centered">
                                <label for="slogan" class="label">Slogan</label>
                            </div>
                        </div>

                            <div class="field-body">

                                <div class="control mx-4">

                                    <textarea class="textarea is-info is-normal" placeholder="Vote for a better tommorow " name="Slogan" rows="3"></textarea>

                                </div>

                            </div>

                        
                    </div>

                    <div class="field is-horizontal">

                        <div class="field-label">

                            <div class="label has-text-centered">
                                <label for="ApplicationLetter">Diplay Image</label>
                            </div>
                        
                        </div>

                        <div class="field-body">
                            <div class="control">
                                 <input class="input" type="file" name="Image" required >
                                
                            </div>
                        </div>


                    </div>

                    <div class="field is-horizontal">

                        <div class="field-label">

                            <div class="label has-text-centered">
                                <label for="ApplicationLetter">Application Letter</label>
                            </div>
                        
                        </div>

                        <div class="field-body">
                            <div class="control">
                                 <input class="input" type="file" name="Application_letter" required >
                                
                            </div>
                        </div>


                    </div>

                    <div class="field is-grouped is-grouped-right">
                    
                        <p class="control">
                          <button type="submit" class="button is-outlined is-link ">
                            Apply
                          </button>
                        </p>
            
                      </div>

                </form>

            </div>


        </div>

    </div>

</section>
@endsection