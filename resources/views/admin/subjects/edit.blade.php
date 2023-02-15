<x-admin.layout>
    <x-admin.breadcrumb title='Subjects Edit' :links="[
        ['text' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['text' => 'Subjects', 'url' => route('admin.subjects.index')],
        ['text' => 'Edit'],
    ]" :actions="[
        [
            'text' => 'All Subjects',
            'icon' => 'fas fa-list',
            'url' => route('admin.subjects.index'),
            'class' => 'btn-success btn-loader',
        ],
        [
            'text' => 'Create Subject',
            'icon' => 'fas fa-plus',
            'url' => route('admin.subjects.create'),
            'class' => 'btn-dark btn-loader',
        ],
    ]" />

    <div class="row">
        <div class="col-md-5">
            <form method="POST" action="{{ route('admin.subjects.update', [$subject]) }}" class="card">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h5 class="my-auto">Update Subject</h5>
                </div>
                <div class="card-body">
                    <input type="text" name="name" class="form-control" placeholder="Subject Name"
                        value="{{ old('name', $subject->name) }}" required>
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
