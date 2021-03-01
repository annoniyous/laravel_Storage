<div class="container">
    <h1>Bienvenue dans le Back Office</h1>
    <a class="btn btn-primary" href="/files/create">Ajouter un fichier</a>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Src</th>
                <td scope="col">Delete</td>
              </tr>
            </thead>
            <tbody>
                @foreach ($files as $file)
                    <tr>
                        <th scope="row">{{$file->id}}</th>
                        <td>
                            <img height="50px" src="{{asset('storage/img/'.$file->src)}}" alt="">
                        </td>
                        <td>
                            <form action="/files/{{$file->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class='btn btn-danger' type='submit'>DELETTE</button></form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>