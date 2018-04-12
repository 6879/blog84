 @extends('project/admin/inc/header')
 @section('content')

                               @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
             
   Welcome admin panel        
    @stop   