<div class="container">
    <h1>Images</h1>
    @foreach ($files as $file)
        @if (Str::after($file->src, '.') == 'jpg' || Str::after($file->src, '.') == 'png')
            <p>{{$file->src}}</p>
      
           
        @endif

    @endforeach

    <div>
        <h1>Fichiers</h1>
        @foreach ($files as $file)
            
        @if (Str::after($file->src, '.') != 'jpg' && Str::after($file->src, '.') != 'png')
        <p>{{$file->src}}</p>
     
      
        @endif
        @endforeach

    </div>
 
</div>