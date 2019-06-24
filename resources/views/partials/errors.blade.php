@if (count($errors)) 
    
    <ul>

        @foreach($errors->all() as $error) 
            
            // Remove the spaces between the brackets
            <li>{ { $error } }</li>

        @endforeach 

    </ul>

@endif 