<x-admin.layout>
    <x-admin.breadcrumb title='Materials List' :links="[['text' => 'Dashboard', 'url' => route('admin.dashboard')], ['text' => 'materials']]" :actions="[
        [
            'text' => 'Create Material',
            'icon' => 'fas fa-plus',
            'url' => route('admin.materials.create'),
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
        <x-admin.paginator-info :items="$materials" class="card-header" />
        <div class="card-body table-responsive">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Subject</th>
                    <th>Grade</th>
                    <th>Board</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($materials as $material)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                {{ $material->title }}
                                <span class="badge bg-primary">{{ $material->material_items_count }}</span>
                            </td>
                            <td class="text-nowrap">{{ $material->subject?->name }}</td>
                            <td class="text-nowrap">{{ $material->grade?->name }}</td>
                            <td class="text-nowrap">{{ $material->grade?->board?->short_name }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('admin.materials.show', [$material]) }}"
                                    class="btn btn-info btn-sm btn-loader load-circle">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="{{ route('admin.materials.edit', [$material]) }}"
                                    class="btn btn-success btn-sm btn-loader load-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('admin.materials.destroy', [$material]) }}" method="POST"
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
        {{-- <div class="card-footer">
            {{ $materials->links() }}
        </div> --}}
    </div>
</x-admin.layout>
