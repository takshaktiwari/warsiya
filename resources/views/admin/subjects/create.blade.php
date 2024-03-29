<x-admin.layout>
    <x-admin.breadcrumb title='Subjects Create' :links="[
        ['text' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['text' => 'Subjects', 'url' => route('admin.subjects.index')],
        ['text' => 'Create'],
    ]" :actions="[
        [
            'text' => 'All Subjects',
            'icon' => 'fas fa-list',
            'url' => route('admin.subjects.index'),
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
        <div class="col-md-5">
            <form method="POST" action="{{ route('admin.subjects.store') }}" class="card">
                @csrf
                <div class="card-header">
                    <h5 class="my-auto">Create Subject</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Parent Subject</label>
                        <select name="subject_id" id="subject_id" class="form-control">
                            <option value="">-- Select --</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">
                                    {{ $subject->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Name*</label>
                        <input type="text" name="name" class="form-control" placeholder="Subject Name"
                            value="{{ old('name') }}" required>
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
