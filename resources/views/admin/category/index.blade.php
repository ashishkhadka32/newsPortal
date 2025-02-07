<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Category DataTables</h4>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add Category</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        SN
                                    </th>
                                    <th>Nepali Title</th>
                                    <th>English Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $index => $category)
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>{{ $category->nep_title }}</td>
                                        <td>{{ $category->eng_title }}</td>
                                        <td>{{ $category->status }}</td>

                                        <td class="d-flex"><a href="{{ route('admin.category.edit', $category->id) }}"
                                                class="btn btn-success rounded-pill">Edit</a>
                                            <form action="{{ route('admin.category.destroy', $category->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="sublit" class="btn btn-danger ml-2 rounded-pill">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
