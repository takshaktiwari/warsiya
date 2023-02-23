<x-admin.layout>
    <x-admin.breadcrumb title='Board Edit' :links="[
        ['text' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['text' => 'Subjects', 'url' => route('admin.boards.index')],
        ['text' => 'Edit'],
    ]" :actions="[
        [
            'text' => 'All Boards',
            'icon' => 'fas fa-list',
            'url' => route('admin.boards.index'),
            'class' => 'btn-success btn-loader',
        ],
        [
            'text' => 'Create Board',
            'icon' => 'fas fa-plus',
            'url' => route('admin.subjects.create'),
            'class' => 'btn-dark btn-loader',
        ],
    ]" />

    <div class="row">
        <div class="col-md-5">
            <form method="POST" action="{{ route('admin.boards.update', [$board]) }}" class="card">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h5 class="my-auto">Update Board</h5>
                </div>

                 <div class="card-body">
                    <div class="form-group">
                        <label for="">Short Name<span class="text-danger">*</span></label>
                        <input type="text" name="short_name" class="form-control" placeholder="Short Name"
                            value="{{ old('short_name', $board->short_name) }}" required>
                    </div>

                     <div class="form-group">
                        <label for="">Name<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Name"
                            value="{{ old('name', $board->name) }}" required>
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
