<x-admin.layout>
    <x-admin.breadcrumb title='Query List' :links="[['text' => 'Dashboard', 'url' => route('admin.dashboard')], ['text' => 'Query']]" :actions="[
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
       {{--  <x-admin.paginator-info :items="$queries" class="card-header" />   --}}
        <div class="card-body table-responsive">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($queries as $query)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-nowrap">{{ $query->name }}</td>
                            <td class="text-nowrap">{{ $query->email }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('admin.queries.show', [$query]) }}"
                                    class="btn btn-success btn-sm btn-loader load-circle">
                                    <i class="fas fa-info"></i>
                                </a>

                                <form action="{{ route('admin.queries.destroy', [$query]) }}" method="POST"
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
            {{ $queries->links() }}
        </div>  --}}
    </div>
</x-admin.layout>
