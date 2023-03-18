<x-admin.layout>
    <x-admin.breadcrumb title='Grades Create' :links="[
        ['text' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['text' => 'Grades', 'url' => route('admin.grades.index')],
        ['text' => 'Create'],
    ]" :actions="[
        [
            'text' => 'All Grades',
            'icon' => 'fas fa-list',
            'url' => route('admin.grades.index'),
            'class' => 'btn-success btn-loader',
        ],
        [
            'text' => 'Dashboard',
            'icon' => 'fas fa-technometer',
            'url' => auth()
                ->user()
                ->dashboardRoute(),
            'class' => 'btn-dark btn-loader',
        ],
    ]" />

    <div class="row">
        <div class="col-md-8">
            <form method="POST" action="{{ route('admin.grades.store') }}" class="card">
                @csrf
                <div class="card-header">
                    <h5 class="my-auto">Create Grade</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Grade Name*</label>
                        <input type="text" name="name" class="form-control" placeholder="Grade Name"
                            value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="">Select Board*</label>
                        <select name="board_id" class="form-control" required>
                            <option value="">-- Select --</option>
                            @foreach ($boards as $board)
                                <option value="{{ $board->id }}">{{ $board->short_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-0">
                        <label for="">Select Subjects*</label>
                        <select name="subjects[]" id="subjects" class="form-control select2" multiple required>
                            <option value="">-- Select --</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">
                                    {{ $subject->name }}
                                    @if ($subject->parent)
                                        -> {{ $subject->parent?->name }}
                                    @endif
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">
                        <i class="fas fa-save"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin.layout>
