<div class="container m-auto">
    <h1 class="mb-3">Project lista</h1>
    <div class="row">
        <a href="" class="btn btn-success w-auto mb-3">Project létrehozása</a>
        <table>
            <thead>
                <tr>
                    <th>Név</th>
                    <th>Leírás</th>
                    <th>Státusz</th>
{{--                    <th>Kapcsolattartók száma</th>--}}
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->status }}</td>
{{--                        <td>{{ $contacts->count() }}</td>--}}
                        <td>
                            <button class="btn btn-warning" value="{{ $project->id }}">
                                Szerkesztés
                            </button>
                            <button class="btn btn-danger" value="{{ $project->id }}">
                                Törlés
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
