<x-admin.layout>
    <x-admin.breadcrumb title='Query Details' :links="[
        ['text' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['text' => 'Query', 'url' => route('admin.queries.index')],
        ['text' => 'Query Info'],
    ]" :actions="[
        [
            'text' => 'Create Board',
            'icon' => 'fas fa-plus',
            'url' => route('admin.subjects.create'),
            'class' => 'btn-dark btn-loader',
        ],
    ]" />

    <div class="row">
        <div class="col-md-8">
                <div class="card-header">
                    <h5 class="my-auto">Query Details</h5>
                </div>

                 <div class="card-body">
                    <table class="table table-striped">
                        
                        <tr>
                            <td>Name:</td>
                            <td>{{ $query->name }}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{ $query->email }}</td>
                        </tr>
                        <tr>
                            <td>Subject:</td>
                            <td>{{ $query->subject }}</td>
                        </tr>
                        <tr>
                            <td>Message:</td>
                            <td>{{ $query->message }}</td>
                        </tr>
                    </table>
                </div>

        </div>
    </div>
</x-admin.layout>
