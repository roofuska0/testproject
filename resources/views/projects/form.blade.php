<div class="container">
    <form method="post" class="form-control">
        @csrf
        <label for="name">Név</label>
        <input type="text" name="name" required>
        <label for="description"></label>
        <input type="text" name="description" required>
        <label for="status"></label>
        <select name="status" id="status">
            @foreach(config('statuses.project_status') as $status)
                <option value="{{ $status->getKey() }}">{{ $status }}</option>
            @endforeach
        </select>
        <input type="submit" value="Mentés">
    </form>
</div>
