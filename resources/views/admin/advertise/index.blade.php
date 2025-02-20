<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Advertise DataTables</h4>
                    <a href="{{ route('admin.advertise.create') }}" class="btn btn-primary">Add Advertise</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        SN
                                    </th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($advertises as $index => $advertise)
                                    <tr>
                                        <td>
                                            {{ ++$index }}
                                        </td>
                                        <td> <img alt="image" src="{{ asset($advertise->image) }}" width="50" height="50"></td>
                                        <td>{{ $advertise->name }}</td>
                                        <td>{{ $advertise->contact }}</td>
                                        <td>
                                            @if ($advertise->status == 'approved')
                                                <span class="badge bg-success text-white">Approved</span>
                                            @elseif ($advertise->status == 'pending')
                                                <span class="badge bg-primary text-white">Pending</span>
                                            @else
                                                <span class="badge bg-danger text-white">Rejected</span>
                                            @endif
                                        </td>

                                        <td class="d-flex"><a href="{{ route('admin.advertise.edit', $advertise->id) }}"
                                                class="btn btn-success rounded-pill">Edit</a>
                                            <form action="{{ route('admin.advertise.destroy', $advertise->id) }}"
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
