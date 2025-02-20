<x-app-layout>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Create Category</h4>
                        <a href="{{ route('admin.advertise.index') }}" class="btn btn-outline-primary">Go Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.advertise.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label text-dark fw-bold">Company Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label for="contact" class="form-label text-dark fw-bold">Company Contact<span class="text-danger">*</span></label>
                                <input type="text" name="contact" id="contact" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label for="url" class="form-label text-dark fw-bold">url<span class="text-danger">*</span></label>
                                <input type="text" name="url" id="url" class="form-control rounded-pill">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label text-dark fw-bold">Upload Image<span class="text-danger">*</span></label>
                                <input type="file" name="image" id="image" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
