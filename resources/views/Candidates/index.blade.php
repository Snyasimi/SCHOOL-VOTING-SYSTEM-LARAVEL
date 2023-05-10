@extends('Template')
@section('content')

<section>
    <form action="">
        @csrf
        <fieldset>

            <legend class="subtitle is-3 is-underlined has-text-centered has-text-info">CHAIR PERSON</legend>
            
            <p class="has-text-centered is-family-monospace is-uppercase py-5 has-text-danger">
                Please select one of the following people to be your president
            </p>

            <div class="columns block is-multiline">

               @for($i=0;$i<2;$i++)

                    <div class="column block is-one-quarter">
                        <div class="box">
                        
                            <figure class="image is-128x128">
                                 <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                            </figure>
                            <p class="is-size-4 is-uppercase has-text-weight-medium my-3">STEVE SOLOMON</p>
                            <p class="has-text-centered py-2 mt-3 has-text-weight-light">skljbdjklhdfasjklhfjklhejklfhkljahf efkashfaksdjklafb afkjlhafjkl fhas akjlfhasjkdlfhdsk</p>
                            <div class="label">
                                <span class="tag">VOTE</span>
                             <input type="radio" class="radio" required name="Chairperson" value="">
                            </div>
                        </div>
                    </div>
               @endfor
            </div>
        </fieldset>

        <fieldset>
            <legend class="subtitle is-3 is-underlined has-text-centered has-text-info">VICE CHAIR PERSON</legend>

            <p class="has-text-centered is-family-monospace is-uppercase py-5 has-text-danger">
                Please select one of the following people to be your vice chair
            </p>

            <div class="columns block is-multiline">
                @for($i=0;$i<=2;$i++)
                     <div class="column block is-one-quarter">
                         <div class="box">
                             <p class="is-size-4 is-uppercase has-text-weight-medium">STEVE SOLOMON</p>
                             <p class="has-text-centered py-2 mt-5 has-text-weight-light">skljbdjklhdfasjklhfjklhejklfhkljahf efkashfaksdjklafb afkjlhafjkl fhas akjlfhasjkdlfhdsk</p>
                             <div class="is-small">
                              <input type="radio" class="radio" required name="ViceChair">
                             </div>
                         </div>
                     </div>
                @endfor
             </div>
        </fieldset>

        <fieldset>
            <legend class="subtitle is-3 is-underlined has-text-centered has-text-info">SECRETARY GENERAL</legend>

            <p class="has-text-centered is-family-monospace is-uppercase py-5 has-text-danger">
                Please select one of the following people to be your secrtary general
            </p>

            <div class="columns block is-multiline">
                @for($i=0;$i<=2;$i++)
                     <div class="column block is-one-quarter">
                         <div class="box">
                             <p class="is-size-4 is-uppercase has-text-weight-medium">STEVE SOLOMON</p>
                             <p class="has-text-centered py-2 mt-5 has-text-weight-light">skljbdjklhdfasjklhfjklhejklfhkljahf efkashfaksdjklafb afkjlhafjkl fhas akjlfhasjkdlfhdsk</p>
                             <div class="is-small">
                              <input type="radio" class="radio" required name="SecretaryGeneral">
                             </div>
                         </div>
                     </div>
                @endfor
             </div>
        </fieldset>

        <fieldset>
            <legend class="subtitle is-3 is-underlined has-text-centered has-text-info">ACADEMIC SECRETARY</legend>

            <p class="has-text-centered is-family-monospace is-uppercase py-5 has-text-danger">
                Please select one of the following people to be your academic secretaty
            </p>

            <div class="columns block is-multiline">
                @for($i=0;$i<=2;$i++)
                     <div class="column block is-one-quarter">
                         <div class="box">
                             <p class="is-size-4 is-uppercase has-text-weight-medium">STEVE SOLOMON</p>
                             <p class="has-text-centered py-2 mt-5 has-text-weight-light">skljbdjklhdfasjklhfjklhejklfhkljahf efkashfaksdjklafb afkjlhafjkl fhas akjlfhasjkdlfhdsk</p>
                             <div class="is-small">
                              <input type="radio" class="radio" required name="AcademicSecretary">
                             </div>
                         </div>
                     </div>
                @endfor
             </div>
        </fieldset>

        <fieldset>
            <legend class="subtitle is-3 is-underlined has-text-centered has-text-info">SPORTS AND WELFARE</legend>

            <p class="has-text-centered is-family-monospace is-uppercase py-5 has-text-danger">
                Please select one of the following people to be your sports and welfare representative
            </p>

            <div class="table-container">
                <table class="table is-bordered is-narrow">
                    <th>
                        NAME 
                    </th>
                    <th>
                        BIO 
                    </th>
                    <th>
                        VOTE
                    </th>

                    <tbody>
                        @for($i=0;$i<2;$i++)
                            <tr>
                                <td>
                                    STEVE SOLOMON
                                </td>
                                <td class="is-size-4">
                                    kljdhjkdsfhjkadfls
                                    asdfjkjhksdfjhksdfjhasd
                                    dfsjkljhkdsfjkasdfjkasdfjk
                                    dfjhsdfjhkasdfjhasdfjhkasdfjk
                                </td>
                                <td class="is-size-7">
                                    <input type="radio" name="sports" required value="">
                                </td>

                            </tr>

                        @endfor
                    </tbody>
                </table>

            </div>
            
        </fieldset>

       <div class="container is-pulled-right my-5">
        <button type="submit" class="button is-link is-outlined is-medium">
            VOTE
          </button>

          <button type="reset" class="button is-danger is-outlined is-medium">
            CLEAR SELECTION
          </button>
       </div>
       
        

    </form>
</section>
    
@endsection