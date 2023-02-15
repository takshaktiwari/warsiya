<x-admin.layout>
    <x-admin.breadcrumb title='Subjects List' :links="[['text' => 'Dashboard', 'url' => route('admin.dashboard')], ['text' => 'Subjects']]" :actions="[
        [
            'text' => 'Create Subject',
            'icon' => 'fas fa-plus',
            'url' => route('admin.subjects.create'),
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
        <x-admin.paginator-info :items="$subjects" class="card-header" />
        <div class="card-body table-responsive">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Subject</th>
                    <th>Grade</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->grades->pluck('name')->implode(', ') }}</td>
                            <td>
                                <a href="{{ route('admin.subjects.edit', [$subject]) }}"
                                    class="btn btn-success btn-sm btn-loader load-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('admin.subjects.destroy', [$subject]) }}" method="POST"
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
            {{ $subjects->links() }}
        </div>
    </div>
</x-admin.layout>
