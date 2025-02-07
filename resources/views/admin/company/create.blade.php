<x-app-layout>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Create Company</h4>
                        <a href="{{ route('admin.company.index') }}" class="btn btn-outline-primary">Go Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.company.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label text-dark fw-bold">Company Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label text-dark fw-bold">Phone Number<span class="text-danger">*</span></label>
                                <input type="tel" name="phone" id="phone" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label text-dark fw-bold">Email Address<span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label text-dark fw-bold">Address<span class="text-danger">*</span></label>
                                <input type="text" name="address" id="address" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label for="facebook" class="form-label text-dark fw-bold">Facebook</label>
                                <input type="url" name="facebook" id="facebook" class="form-control rounded-pill">
                            </div>

                            <div class="mb-3">
                                <label for="youtube" class="form-label text-dark fw-bold">YouTube</label>
                                <input type="url" name="youtube" id="youtube" class="form-control rounded-pill">
                            </div>

                            <div class="mb-3">
                                <label for="logo" class="form-label text-dark fw-bold">Company Logo<span class="text-danger">*</span></label>
                                <input type="file" name="logo" id="logo" class="form-control rounded-pill" required>
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
