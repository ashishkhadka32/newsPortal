<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Company DataTables</h4>
                    @if (!$companies)
                    <a href="{{ route('admin.company.create') }}" class="btn btn-primary">Add Company</a>
                    @endif

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        SN
                                    </th>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    {{-- <th>Facebook</th>
                                    <th>Youtube</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($companies)
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <img alt="image" src="{{asset($companies->logo)}}" width="35">
                                    </td>
                                    <td>{{$companies->name}}</td>
                                    <td>{{$companies->email}}</td>
                                    <td>{{$companies->phone}}</td>
                                    <td>{{$companies->address}}</td>
                                    {{-- <td>{{$company->facebook}}</td>
                                    <td>{{$company->youtube}}</td> --}}
                                    <td class="d-flex"><a href="{{route('admin.company.edit',$companies->id)}}" class="btn btn-success rounded-pill">Edit</a>
                                    <form action="{{route('admin.company.destroy',$companies->id)}}" method="post">
                                        @csrf
                                        @method("delete")
                                        <button type="sublit" class="btn btn-danger ml-2 rounded-pill">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
