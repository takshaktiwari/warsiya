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
        <div class="col-md-8">

            <form method="POST" action="{{ route('admin.materials.update', [$material]) }}" class="card" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h5 class="my-auto">Create Material</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Title*</label>
                        <input type="text" name="title" class="form-control" placeholder="Material Title"
                            value="{{ old('title', $material->title) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Board*</label>
                        <select name="" id="board" class="form-control">
                            <option value="">-- Select --</option>
                            @foreach ($boards as $board)
                                <option value="{{ $board->id }}" {{ ($board->id == $material->grade?->board->id) ? 'selected' : '' }}>
                                    {{ $board->short_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Grade*</label>
                        <select name="grade_id" id="grade" class="form-control">
                            <option value="">-- Select --</option>
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}" {{ ($grade->id == $material->grade?->id) ? 'selected' : '' }}>
                                    {{ $grade->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Select Subjects*</label>
                        <select name="subject_id" id="subject" class="form-control" required>
                            <option value="">-- Select --</option>
                            @foreach ($grade->subjects as $subject)
                                <option value="{{ $subject->id }}" {{ ($subject->id == $material->subject_id) ? 'selected' : '' }}>
                                    {{ $subject->name }}
                                    @if($subject->parent)
                                     -> {{ $subject->parent->name }}
                                    @endif
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Upload PDF</label>
                        <input type='file' name="file_path[]" multiple class="form-control">
                    </div>
                    <div class="">

                    <div class="form-group">
                        <label for="">Description*</label>
                        <textarea name="description" cols="40" rows="4" class="form-control"
                            placeholder="Description of Study Material" required>{{ $material->description }} </textarea>
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
    <x-slot name="script">
        <script type="text/javascript">
            $(document).ready(function() {
                $("#board").change(function() {
                    $.ajax({
                        url: '{{ route('admin.ajax.grades') }}',
                        type: 'POST',
                        data: {
                            board_id: $(this).val(),
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(result) {
                            $("#grade").html('<option value="">-- Select --</option>');
                            $("#subject").html('<option value="">-- Select --</option>');
                            $.each(result, function (index, item) {
                                $("#grade").append(`<option value="${item.id}">${item.name}</option>`);
                            });
                        }
                    });
                });

                $("#grade").change(function() {
                    $.ajax({
                        url: '{{ route('admin.ajax.subjects') }}',
                        type: 'POST',
                        data: {
                            grade_id: $(this).val(),
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(result) {
                            $("#subject").html('<option value="">-- Select --</option>');
                            $.each(result, function (index, item) {
                                $("#subject").append(`<option value="${item.id}">${item.name}</option>`);
                            });
                        }
                    });
                });
            });
        </script>
    </x-slot>
</x-admin.layout>
