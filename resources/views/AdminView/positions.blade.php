@extends('AdminView.Template')
@section('content')

<section class="section">

    <div class="tile">

        <div class="tile is-parent">

            <div class="tile is-child">

                <div class="div table-container box">
            
                    <table class="table is-fullwidth  is-striped is-hoverable is-bordered">
        
                        <tr>
                            <th class="has-text-centered is-size-4 has-background-info has-text-white">POSITIONS</th>
                            <th class="has-text-centered is-size-4 has-background-info has-text-white">NUMBER OF CANDIDATES</th>
                        </tr>
        
                        
                        <tbody>
        
                            @forelse($positions as $position)
        
                                <tr>
                                    <td class="has-text-centered">{{$position->Position}}</td>
                                    <td class="has-text-centered">55</td>
                                </tr>
        
        
                            @empty
        
                                <tr>
                                    <td colspan="2">NO POSITIONS.ADD POSITIONS TO CONTINUE</td>
                                </tr>
                                
                            @endforelse
        
                        </tbody>
        
                    </table>
        
                </div>

            </div>

        </div>

        <div class="tile is-parent is-4">

            <div class="is-child">

                <div class="column">

                    <div class="level">
            
                        <div class="level-right">
            
                            <div class="level-item">
            
                                <form method="POST" action="{{ route('Position.store') }}" class="form"> 
                                    @csrf
                                    <div class="field is-horizontal">
            
                                        <div class="field-label">
            
                                            <label for="POSITION" class="label"> ADD A POSITION</label>
                                        </div>
                                        
                                        <div class="field-body">
                                           
            
                                            <p class="control">
                                        
                                                <input type="text" name="Position" class="input" required>
                                            
                                                <button class="button is-outlined is-danger mt-3" type="submit">
                                                    Add Position
                                                </button>
                        
                                            </p>
            
                                        </div>
            
                                    </div>
                    
                                   </form>
                                  
            
                            </div>
            
                        </div>
            
                    </div>

            </div>

        </div>

    </div>

</section>

@endsection