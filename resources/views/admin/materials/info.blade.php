<x-admin.layout>
    <x-admin.breadcrumb title='Material Info' :links="[
        ['text' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['text' => 'Subjects', 'url' => route('admin.materials.index')],
        ['text' => 'Info'],
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

            <div class="card-header">
                <h5 class="my-auto">Material Information</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <table class="table table-striped	">
                        <tr>
                            <td>Title</td>
                            <td> {{ $material->title }}</td>
                        </tr>
                        <tr>
                            <td>Board</td>
                            <td>{{ $material->grade?->board?->name }}</td>
                        </tr>
                        <tr>
                            <td>Grade</td>
                            <td> {{ $material->grade?->name }}</td>
                        </tr>
                        <tr>
                            <td>Subject</td>
                            <td> {{ $material->subject?->name }}</td>
                        </tr>
                        <tr>
                            <td>Materials</td>
                            <td>
                                @foreach ($material->materialItems->pluck('file_path') as $pdf)
                                    <li>
                                        <a href="{{ url('storage/app/public/' . $pdf) }}" target="_blank">{{ substr($pdf, 10) }}</a> ,
                                    </li>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td> {{ $material->description }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

</x-admin.layout>
