<x-app-layout>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Edit Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="nep_title" class="form-label text-dark fw-bold">Nep_title<span class="text-danger">*</span></label>
                                <input type="text" name="nep_title" id="nep_title" class="form-control rounded-pill" value="{{$category->nep_title}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="eng_title" class="form-label text-dark fw-bold">Eng_title<span class="text-danger">*</span></label>
                                <input type="text" name="eng_title" id="eng_title" class="form-control rounded-pill" value="{{$category->eng_title}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="meta_keywords" class="form-label text-dark fw-bold">Meta Keywords</label>
                                <textarea name="meta_keywords" id="meta_keywords" class="form-control rounded-pill" value="{{$category->meta_keywords}}">
                                </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="meta_description" class="form-label text-dark fw-bold">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control rounded-pill" value="{{$category->meta_descriptoin}}">
                                </textarea>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary rounded-pill">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
