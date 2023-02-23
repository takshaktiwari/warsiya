<x-admin.layout>
    <x-admin.breadcrumb title='Material Edit' :links="[
        ['text' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['text' => 'Subjects', 'url' => route('admin.materials.index')],
        ['text' => 'Edit'],
    ]" :actions="[
        [
            'text' => 'All Grades',
            'icon' => 'fas fa-list',
            'url' => route('admin.materials.index'),
            'class' => 'btn-success btn-loader',
        ],
        [
            'text' => 'Create Material',
            'icon' => 'fas fa-plus',
            'url' => route('admin.materials.create'),
            'class' => 'btn-dark btn-loader',
        ],
    ]" />

    <div class="row">
        <div class="col-md-5">
            <form method="POST" action="{{ route('admin.materials.update', [$material]) }}" class="card" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h5 class="my-auto">Create Material</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Material Title*</label>
                        <input type="text" name="title" class="form-control" placeholder="Material Title"
                            value="{{ old('title', $material->title) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="">Select Subjects*</label>
                        <select name="subjects"  class="form-control" required>
                            <option value="">-- Select --</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}" {{ $material->subject_id == $subject->id ? 'selected' : ''; }}>{{ $subject->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Upload PDF</label>
                        <input type='file' name="file_path"   class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Description*</label>
                        <textarea name="description" cols="40" rows="4" class="form-control" placeholder="Description of Study Material " required> {{ $material->description }}</textarea>
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
