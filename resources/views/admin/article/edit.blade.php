<x-app-layout>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Edit Article</h4>
                        <a href="{{ route('admin.article.index') }}" class="btn btn-outline-primary">Go Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.article.update', $article->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="categories">Select Categories</label>
                                <select name="categories[]" id="categories" class="form-control select2" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $article->categories->contains($category->id) ? 'selected' : '' }}>
                                            {{ $category->eng_title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label text-dark fw-bold">Title<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control rounded-pill"
                                    value="{{ old('title', $article->title) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label text-dark fw-bold">Write News<span
                                        class="text-danger">*</span></label>
                                <textarea name="description" id="description" class="form-control summernote">
                                    {{ old('description', $article->description) }}
                                </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="meta_keywords" class="form-label text-dark fw-bold">Meta Keywords</label>
                                <textarea name="meta_keywords" id="meta_keywords" class="form-control rounded-pill">
                                    {{ old('meta_keywords', $article->meta_keywords) }}
                                </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="meta_description" class="form-label text-dark fw-bold">Meta
                                    Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control rounded-pill">
                                    {{ old('meta_description', $article->meta_description) }}
                                </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label text-dark fw-bold">Upload Image</label>
                                <input type="file" name="image" id="image" class="form-control rounded-pill">
                                @if ($article->image)
                                    <img src="{{ asset($article->image) }}" alt="Article Image" class="mt-2"
                                        width="150">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label text-dark fw-bold">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="pending" {{ $article->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="approved" {{ $article->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="rejected" {{ $article->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </div>

                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary rounded-pill">Update Article</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
