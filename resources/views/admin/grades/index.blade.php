<x-admin.layout>
    <x-admin.breadcrumb title='Grades List' :links="[['text' => 'Dashboard', 'url' => route('admin.dashboard')], ['text' => 'grades']]" :actions="[
        [
            'text' => 'Create Grade',
            'icon' => 'fas fa-plus',
            'url' => route('admin.grades.create'),
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

    <div class="card">
        <x-admin.paginator-info :items="$grades" class="card-header" />
        <div class="card-body table-responsive">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Grade</th>
                    <th>Subjects</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($grades as $grade)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-nowrap">{{ $grade->name }}</td>
                            <td class="small">{{ $grade->subjects->pluck('name')->implode(', ') }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('admin.grades.edit', [$grade]) }}"
                                    class="btn btn-success btn-sm btn-loader load-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('admin.grades.destroy', [$grade]) }}" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger delete-alert btn-loader load-circle"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $grades->links() }}
        </div>
    </div>
</x-admin.layout>
