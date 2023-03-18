<x-admin.layout>
    <x-admin.breadcrumb title='Grade Edit' :links="[
        ['text' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['text' => 'Subjects', 'url' => route('admin.grades.index')],
        ['text' => 'Edit'],
    ]" :actions="[
        [
            'text' => 'All Grades',
            'icon' => 'fas fa-list',
            'url' => route('admin.grades.index'),
            'class' => 'btn-success btn-loader',
        ],
        [
            'text' => 'Create Grade',
            'icon' => 'fas fa-plus',
            'url' => route('admin.subjects.create'),
            'class' => 'btn-dark btn-loader',
        ],
    ]" />

    <div class="row">
        <div class="col-md-5">
            <form method="POST" action="{{ route('admin.grades.update', [$grade]) }}" class="card">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h5 class="my-auto">Update Grade</h5>
                </div>

                 <div class="card-body">
                    <div class="form-group">
                        <label for="">Grade Name*</label>
                        <input type="text" name="name" class="form-control" placeholder="Grade Name"
                            value="{{ old('name',$grade->name) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="">Select Board*</label>
                        <select name="board_id" class="form-control"  required>
                            <option value="">-- Select --</option>
                            @foreach ($boards as $board)
                                <option value="{{ $board->id }}"{{ $board->id == $grade->board_id ? 'selected' : ''; }}>{{ $board->short_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-0">
                        <label for="">Select Subjects*</label>
                        <select name="subjects[]" id="subjects" class="form-control select2" multiple required>
                            <option value="">-- Select --</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}" {{ $subject->id == $grade->subjects->pluck('id')->contains($subject->id) ? 'selected' : ''; }} >
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
