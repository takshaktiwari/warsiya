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
            <form method="POST" action="{{ route('admin.boards.store') }}" class="card">
                @csrf
                <div class="card-header">
                    <h5 class="my-auto">Create Grade</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Short Name<span class="text-danger">*</span></label>
                        <input type="text" name="short_name" class="form-control" placeholder="Short Name"
                            value="{{ old('short_name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="">Name<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder=" Name"
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
