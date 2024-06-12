<!-- resources/views/exercise-log/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Exercise Log</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercise Log</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('exercise-log.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="workout">Workout</label>
                <select name="workout" id="workout" class="form-control">
                    @foreach($names as $name)
                        <option value="{{ $name }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="weight">Weight (kg)</label>
                <input type="number" name="weight" id="weight" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="reps">Reps</label>
                <input type="number" name="reps" id="reps" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
