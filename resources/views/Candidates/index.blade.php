@extends('Template')
@section('content')

<section>
    <form class="box" action="">
        @csrf
        <fieldset>

            <legend class="subtitle is-3 is-underlined has-text-centered has-text-info has-text-weight-bold">CHAIR PERSON</legend>
            
            <p class="has-text-left has-text-weight-semibold is-family-monospace is-uppercase py-5 has-text-danger">
                Please select one of the following people to be your president
            </p>

            <div class="columns block is-multiline">

               @for($i=0;$i<2;$i++)

                    <div class="column block is-one-quarter">
                        <div class="box">
                        
                            <figure class="image is-128x128">
                                 <img class="is-rounded" src="{{asset("storage/skull.jpg")}}">
                            </figure>

                            <p class="is-size-4 is-uppercase has-text-weight-medium my-3">STEVE SOLOMON</p>
                            <p class="is-size-6 is-uppercase has-text-weight-medium my-1">Chair person</p>


                            <p class="has-text-justified py-2 mt-3 has-text-weight-light">Vote! Let’s your voice be heard! Rock the Vote
                                Be smart do your part, VOTE
                                Your voice your VOTE</p>
                            <div class="control">
                                <label class="radio">
                                  <input type="radio" name="rsvp">
                                  Select Candidate
                                </label>
                              </div>
                        </div>
                    </div>
               @endfor
            </div>
        </fieldset>

        <fieldset>

            <legend class="subtitle is-3 is-underlined has-text-centered has-text-info has-text-weight-bold">VICE CHAIR</legend>
            
            <p class="has-text-left has-text-weight-semibold is-family-monospace is-uppercase py-5 has-text-danger">
                Please select one of the following people to be your president
            </p>

            <div class="columns block is-multiline">

                @for($i=0;$i<2;$i++)

                    <div class="column block is-one-quarter">
                        <div class="box">
                        
                            <figure class="image is-128x128">
                                 <img class="is-rounded" src="{{asset("storage/skull.jpg")}}">
                            </figure>

                            <p class="is-size-4 is-uppercase has-text-weight-medium my-3">STEVE SOLOMON</p>
                            <p class="is-size-6 is-uppercase has-text-weight-medium my-1">Chair person</p>


                            <p class="has-text-justified py-2 mt-3 has-text-weight-light">Vote! Let’s your voice be heard! Rock the Vote
                                Be smart do your part, VOTE
                                Your voice your VOTE</p>
                            <div class="control">
                                <label class="radio">
                                  <input type="radio" name="rsvp">
                                  Select Candidate
                                </label>
                              </div>
                        </div>
                    </div>
               @endfor
             </div>
        </fieldset>

        <fieldset>
            <legend class="subtitle is-3 is-underlined has-text-centered has-text-info has-text-weight-bold">SECRETARY GENERAL</legend>
            
            <p class="has-text-left has-text-weight-semibold is-family-monospace is-uppercase py-5 has-text-danger">
                Please select one of the following people to be your secretart general
            </p>

            <div class="columns block is-multiline">

                @for($i=0;$i<2;$i++)

                    <div class="column block is-one-quarter">
                        <div class="box">
                        
                            <figure class="image is-128x128">
                                 <img class="is-rounded" src="{{asset("storage/skull.jpg")}}">
                            </figure>

                            <p class="is-size-4 is-uppercase has-text-weight-medium my-3">STEVE SOLOMON</p>
                            <p class="is-size-6 is-uppercase has-text-weight-medium my-1">Chair person</p>


                            <p class="has-text-justified py-2 mt-3 has-text-weight-light">Vote! Let’s your voice be heard! Rock the Vote
                                Be smart do your part, VOTE
                                Your voice your VOTE</p>
                            <div class="control">
                                <label class="radio">
                                  <input type="radio" name="rsvp">
                                  Select Candidate
                                </label>
                              </div>
                        </div>
                    </div>
               @endfor

             </div>

        </fieldset>

        <fieldset>
            <legend class="subtitle is-3 is-underlined has-text-centered has-text-info has-text-weight-bold">ACADEMIC SECRETARY</legend>
            
            <p class="has-text-left has-text-weight-semibold is-family-monospace is-uppercase py-5 has-text-danger">
                Please select one of the following people to be your ACADEMIC SECRETARY
            </p>

             <div class="columns block is-multiline">

                @for($i=0;$i<2;$i++)

                    <div class="column block is-one-quarter">
                        <div class="box">
                        
                            <figure class="image is-128x128">
                                 <img class="is-rounded" src="{{asset("storage/skull.jpg")}}">
                            </figure>

                            <p class="is-size-4 is-uppercase has-text-weight-medium my-3">STEVE SOLOMON</p>
                            <p class="is-size-6 is-uppercase has-text-weight-medium my-1">Chair person</p>


                            <p class="has-text-justified py-2 mt-3 has-text-weight-light">Vote! Let’s your voice be heard! Rock the Vote
                                Be smart do your part, VOTE
                                Your voice your VOTE</p>
                            <div class="control">
                                <label class="radio">
                                  <input type="radio" name="rsvp">
                                  Select Candidate
                                </label>
                              </div>
                        </div>
                    </div>
               @endfor

            </div>
            
        </fieldset>

        <fieldset>
            <legend class="subtitle is-3 is-underlined has-text-centered has-text-info has-text-weight-bold">SPORTS AND WELFARE</legend>
            
            <p class="has-text-left has-text-weight-semibold is-family-monospace is-uppercase py-5 has-text-danger">
                Please select one of the following people to be your sports and welfare representative
            </p>

            <div class="columns block is-multiline">

                @for($i=0;$i<2;$i++)

                    <div class="column block is-one-quarter">
                        <div class="box">
                        
                            <figure class="image is-128x128">
                                 <img class="is-rounded" src="{{asset("storage/skull.jpg")}}">
                            </figure>

                            <p class="is-size-4 is-uppercase has-text-weight-medium my-3">STEVE SOLOMON</p>
                            <p class="is-size-6 is-uppercase has-text-weight-medium my-1">Chair person</p>


                            <p class="has-text-justified py-2 mt-3 has-text-weight-light">Vote! Let’s your voice be heard! Rock the Vote
                                Be smart do your part, VOTE
                                Your voice your VOTE</p>
                            <div class="control">
                                <label class="radio">
                                  <input type="radio" name="rsvp">
                                  Select Candidate
                                </label>
                              </div>
                        </div>
                    </div>
               @endfor
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
</section>
    
@endsection