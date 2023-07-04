@extends('Candidates.Template')
@section('content')

<section class="section">
    <div class="container">

        <form class="box" action="{{ route('vote') }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset>
    
                <legend class="subtitle is-3 is-underlined has-text-centered has-text-info has-text-weight-bold">CHAIR PERSON</legend>
                
                <p class="has-text-left has-text-weight-semibold is-family-monospace is-uppercase py-5 has-text-danger">
                    Please select one of the following people to be your chairperson
                </p>
                   
                <div class="columns  container block is-multiline">
    
                   @forelse ($Chairpersons as $chairperson)
         
                        <div class="column block is-one-quarter">
                            <div class="box">
                            
                                <figure class="image is-128x128">
                                     <img class="is-rounded" src="{{asset(Storage::url($chairperson->path_to_image))}}">
                                </figure>
    
                                <p class="is-size-4 is-uppercase has-text-weight-medium my-3">{{$chairperson->Voter->Name}}</p>
                                <p class="is-size-6 is-uppercase has-text-weight-medium my-1">{{$chairperson->Position}}</p>
                                <p class="has-text-justified py-2 mt-3 has-text-weight-light">{{$chairperson->Slogan}}</p>

                                <div class="control">
                                    <label class="radio">
                                      <input type="radio" name="Chairperson" value="{{$chairperson->User_id}}">
                                      Select Candidate
                                    </label>
                                  </div>
                            </div>
                        </div>

                    @empty
                    
                        <p class="title">
                            NO CANDIDATES
                        </p>
                    
                    @endforelse
                </div>
            </fieldset>
    
            <fieldset>
    
                <legend class="subtitle is-3 is-underlined has-text-centered has-text-info has-text-weight-bold">VICE CHAIR</legend>
                
                <p class="has-text-left has-text-weight-semibold is-family-monospace is-uppercase py-5 has-text-danger">
                    Please select one of the following people to be your vice chair
                </p>
    
                <div class="columns block container is-multiline">
    
                    @forelse ($ViceChairs as $vicechair)
    
                        <div class="column block is-one-quarter">
                            <div class="box">
                            
                                <figure class="image is-128x128">
                                     <img class="is-rounded" src="{{asset(Storage::url($vicechair->path_to_image))}}">
                                </figure>
    
                                <p class="is-size-4 is-uppercase has-text-weight-medium my-3">{{$vicechair->Voter->Name}}</p>
                                <p class="is-size-6 is-uppercase has-text-weight-medium my-1">{{$vicechair->Position}}</p>
                                <p class="has-text-justified py-2 mt-3 has-text-weight-light">{{$vicechair->Slogan}}</p>
                                
                                <div class="control">
                                    <label class="radio">
                                      <input type="radio" name="ViceChair" value="{{$vicechair->User_id}}">
                                      Select Candidate
                                    </label>
                                  </div>
                            </div>
                        </div>

                    @empty
                    
                        <p class="title">
                            NO CANDIDATES
                        </p>
                    
                    @endforelse
                 </div>
            </fieldset>
    
            <fieldset>
                <legend class="subtitle is-3 is-underlined has-text-centered has-text-info has-text-weight-bold">SECRETARY GENERAL</legend>
                
                <p class="has-text-left has-text-weight-semibold is-family-monospace is-uppercase py-5 has-text-danger">
                    Please select one of the following people to be your secretart general
                </p>
    
                <div class="columns block container is-multiline">
    
                    @forelse ($Secretarygens as $secretarygen)
    
                        <div class="column block is-one-quarter">
                            <div class="box">
                            
                                <figure class="image is-128x128">
                                     <img class="is-rounded" src="{{asset(Storage::url($secretarygen->path_to_image))}}">
                                </figure>
    
                                <p class="is-size-4 is-uppercase has-text-weight-medium my-3">{{$secretarygen->Voter->Name}}</p>
                                <p class="is-size-6 is-uppercase has-text-weight-medium my-1">{{$secretarygen->Position}}</p>
                                <p class="has-text-justified py-2 mt-3 has-text-weight-light">{{$secretarygen->Slogan}}</p>
                                
                                <div class="control">
                                    <label class="radio">
                                      <input type="radio" name="SecretaryGeneral" value="{{$secretarygen->User_id}}">
                                      Select Candidate
                                    </label>
                                  </div>
                            </div>
                        </div>

                    @empty
                    
                        <p class="title">
                            NO CANDIDATES
                        </p>
                    
                    @endforelse
    
                 </div>
    
            </fieldset>
    
            <fieldset>
                <legend class="subtitle is-3 is-underlined has-text-centered has-text-info has-text-weight-bold">TREASURER</legend>
                
                <p class="has-text-left has-text-weight-semibold is-family-monospace is-uppercase py-5 has-text-danger">
                    Please select one of the following people to be your TREASURER
                </p>
    
                 <div class="columns container block is-multiline">
    
                    @forelse ($Academicsecretaries as $Academicsec)
    
                        <div class="column block is-one-quarter">
                            <div class="box">
                            
                                <figure class="image is-128x128">
                                     <img class="is-rounded" src="{{asset(Storage::url($Academicsec->path_to_image))}}">
                                </figure>
    
                                <p class="is-size-4 is-uppercase has-text-weight-medium my-3">{{$Academicsec->Voter->Name}}</p>
                                <p class="is-size-6 is-uppercase has-text-weight-medium my-1">{{$Academicsec->Position}}</p>
                                <p class="has-text-justified py-2 mt-3 has-text-weight-light">{{$Academicsec->Slogan}}</p>
                                
                                <div class="control">
                                    <label class="radio">
                                      <input type="radio" name="AcademicSec" value="{{$Academicsec->User_id}}">
                                      Select Candidate
                                    </label>
                                  </div>
                            </div>
                        </div>

                    @empty
                    
                        <p class="title">
                            NO CANDIDATES
                        </p>
                    
                    @endforelse
    
                </div>
                
            </fieldset>
    
            <fieldset>
                <legend class="subtitle is-3 is-underlined has-text-centered has-text-info has-text-weight-bold">SPORTS AND WELFARE</legend>
                
                <p class="has-text-left has-text-weight-semibold is-family-monospace is-uppercase py-5 has-text-danger">
                    Please select one of the following people to be your sports and welfare representative
                </p>
    
                <div class="columns container block is-multiline">
    
                    @forelse ($Sportsandwelfares as $sportsandwelf)
    
                        <div class="column block is-one-quarter">
                            <div class="box">
                            
                                <figure class="image is-128x128">
                                     <img class="is-rounded" src="{{asset(Storage::url($sportsandwelf->path_to_image))}}">
                                </figure>
    
                                <p class="is-size-4 is-uppercase has-text-weight-medium my-3">{{$sportsandwelf->Voter->Name}}</p>
                                <p class="is-size-6 is-uppercase has-text-weight-medium my-1">{{$sportsandwelf->Position}}</p>
                                <p class="has-text-justified py-2 mt-3 has-text-weight-light">{{$sportsandwelf->Slogan}}</p>
                                
                                <div class="control">
                                    <label class="radio">
                                      <input type="radio" name="SportsandWelfare" value="{{$sportsandwelf->User_id}}">
                                      Select Candidate
                                    </label>
                                  </div>
                            </div>
                        </div>

                    @empty
                    
                        <p class="title">
                            NO CANDIDATES
                        </p>
                    
                    @endforelse
                 </div>
                
            </fieldset>
    
            <div class="field is-grouped is-grouped-right">
                <p class="control">
                  <button type="submit" class="button is-primary">
                    Submit
                  </button>
                </p>
                <p class="control">
                  <button type="reset" class="button is-light">
                    Cancel
                  </a>
                </p>
              </div>
           
            
    
        </form>

    </div>
</section>
    
@endsection