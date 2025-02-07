<x-app-layout>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Create Category</h4>
                        <a href="{{ route('admin.category.index') }}" class="btn btn-outline-primary">Go Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nep_title" class="form-label text-dark fw-bold">Nep_title<span class="text-danger">*</span></label>
                                <input type="text" name="nep_title" id="nep_title" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label for="eng_title" class="form-label text-dark fw-bold">Eng_title<span class="text-danger">*</span></label>
                                <input type="text" name="eng_title" id="eng_title" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label for="meta_keywords" class="form-label text-dark fw-bold">Meta Keywords</label>
                                <textarea name="meta_keywords" id="meta_keywords" class="form-control rounded-pill">
                                </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="meta_description" class="form-label text-dark fw-bold">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control rounded-pill">
                                </textarea>
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
