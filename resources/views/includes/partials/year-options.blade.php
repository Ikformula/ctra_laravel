@for($y = \Carbon\Carbon::now()->year; $y >= 1940; $y--)
        <option value="{{ $y }}">{{ $y }}</option>
    @endfor
