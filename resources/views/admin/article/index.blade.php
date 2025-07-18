<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Article DataTables</h4>
                    <a href="{{ route('admin.article.create') }}" class="btn btn-primary">Add Articles</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        SN
                                    </th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Views</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $index => $article)
                                    <tr>
                                        <td>
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $article->title }}</td>
                                        <td> <img alt="image" src="{{ asset($article->image) }}" width="50" height="50"></td>
                                        <td>{{ $article->views }}</td>
                                        <td>
                                            @if ($article->status == 'approved')
                                                <span class="badge bg-success text-white">Approved</span>
                                            @elseif ($article->status == 'pending')
                                                <span class="badge bg-primary text-white">Pending</span>
                                            @else
                                                <span class="badge bg-danger text-white">Rejected</span>
                                            @endif
                                        </td>

                                        <td class="d-flex"><a href="{{ route('admin.article.edit', $article->id) }}"
                                                class="btn btn-success rounded-pill">Edit</a>
                                            <form action="{{ route('admin.article.destroy', $article->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="sublit"
                                                    class="btn btn-danger ml-2 rounded-pill">Delete</button>
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
