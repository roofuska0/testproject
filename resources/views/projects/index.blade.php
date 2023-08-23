<div class="container m-auto">
    <h1 class="mb-3">Project lista</h1>
    <div class="row">
        <a href="{{ route('create') }}" class="btn btn-success w-auto mb-3">Project létrehozása</a>
        <table>
            <thead>
                <tr>
                    <th>Név</th>
                    <th>Leírás</th>
                    <th>Státusz</th>
                    <th>Kapcsolattartók száma</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->status }}</td>
                        <td>
{{--                            {{ $project->withCount('contacts') }}--}}
                        </td>
                        <td>
                            <a href="{{ route('edit', $project) }}" class="btn btn-warning">
                                Szerkesztés
                            </a>

                            <form action="{{ route('delete', $project) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" value="{{ $project->id }}">
                                    Törlés
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
