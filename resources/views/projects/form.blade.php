<div class="container">
    <form action="{{ $url }}" method="POST" class="form-control">
        @method($method)
        @csrf
        <div>
            <label for="name">Név</label>
            <input type="text" name="name" value="{{ $name ?? '' }}" required>
        </div>
        <div>
            <label for="description"></label>
            <input type="text" name="description" value="{{ $description ?? '' }}" required>
        </div>
        <div>
            <label for="status"></label>
            <select name="status" id="status">
                @foreach(config('statuses.project_status') as $key => $status)
                    <option value="{{ $key }}">{{ $status }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Mentés">
        </div>
    </form>
</div>
