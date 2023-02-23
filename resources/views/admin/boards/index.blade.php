<x-admin.layout>
    <x-admin.breadcrumb title='Boards List' :links="[['text' => 'Dashboard', 'url' => route('admin.dashboard')], ['text' => 'Boards']]" :actions="[
        [
            'text' => 'Create boards',
            'icon' => 'fas fa-plus',
            'url' => route('admin.boards.create'),
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
       {{--  <x-admin.paginator-info :items="$boards" class="card-header" />  --}}
        <div class="card-body table-responsive">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Short Name</th>
                    <th>Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($boards as $board)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-nowrap">{{ $board->short_name }}</td>
                            <td class="text-nowrap">{{ $board->name }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('admin.boards.edit', [$board]) }}"
                                    class="btn btn-success btn-sm btn-loader load-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('admin.boards.destroy', [$board]) }}" method="POST"
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
       {{--  <div class="card-footer">
            {{ $boards->links() }}
        </div>  --}}
    </div>
</x-admin.layout>
