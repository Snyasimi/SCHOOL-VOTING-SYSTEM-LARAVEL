@extends('AdminView.Template')

@section('content')

<section class="section">

    <div class="tile">

        <div class="tile is-parent">
    
            <div class="tile is-child">
    
                <div class="columns block  is-multiline">
    
                    @forelse($Applicants as $applicant )
            
                    <div class="column  ">
            
                        <div class="">
            
                            <div class="card block">
            
                                <div class="card-header">
            
                                    <p class="card-header-title has-text-white has-background-info">CANDIDATE </p>
                                    
                                </div>
            
                                <div class="card-image">
            
                                    <figure class="image is-4by3">
                                        <img src="{{asset("storage/saitama.png")}}" alt="Placeholder image">
                                      </figure>
            
                                </div>
            
                                <div class="card-content">
            
                                    <p class="has-text-weight-bold is-size-5">{{ $applicant->Voter->Name}}</p>
                                    <p class="has-text-weight-semibold is-size-6 mb-1">{{ $applicant->Position }}</p>
                                    <p class="has-text-centered ">"{{ $applicant->Slogan}}"</p>
                                </div>
            
                                <footer class="card-footer">
                                    <a href="{{ route('accept_candidate',$applicant->User_id)}}" class="card-footer-item button is-outlined is-success is-size-6 mr-2">ACCEPT</a>
                                    <a href="{{asset(Storage::url($applicant->path_to_application_letter))}}" target="_blank" class="card-footer-item  button is-outlined is-info is-size-6 mr-2">VIEW APPLICATION LETTER </a>
                                    <a href="{{ route('decline_candidate',$applicant->User_id)}}" class="card-footer-item  button is-outlined is-danger is-size-6">DECLINE</a>
                                    
                                </footer>
            
            
                            </div>
            
                        </div>
            
                    </div>
            
                    @empty
                    <p>NO APPLICATIONS</p>
                    @endforelse
            
                </div>
    
            </div>
    
        </div>
    
    </div>

</section>

@endsection