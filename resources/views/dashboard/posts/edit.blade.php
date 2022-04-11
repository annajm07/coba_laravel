@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>  
  </div> 
<form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
    @method('put')
    @csrf

  <div class="col-lg-8">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{ old('title',$post->title) }}">
    @error('title')      
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
  </div>

  <div class="col-lg-8">
    <label for="slug" class="form-label  @error('slug') is-invalid @enderror">Slug</label>
    <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="{{ old('slug',$post->slug) }}">
    @error('slug')      
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
  </div>

  <div class="col-lg-8">
    <label for="category_id" class="form-label">Category</label>
    <select name="category_id" id="category_id" class="form-select">
      @foreach ($categories as $category)
      @if (old('category',$post->category_id) == $category->id)
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option> 
      @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endif
      @endforeach
    </select>
  </div>

  {{-- <input type="hidden" name="oldImage" value="{{old('image',$post->image)}}"> --}}

  <div class="col-lg-8">
    <div class>
      <label for="image" class="form-label @error('image') is-invalid @enderror">Post Image</label>
      @if($post->image)
      <img src="{{ asset('storage/'.$post->image)}}" class="image-preview mb-2 col-md-3 d-block">
      @else
      <img  class="image-preview mb-2 col-md-3">
      @endif
      <input class="form-control" type="file" id="image" name="image" onchange="imagePreview();">
      @error('image')      
      <div class="invalid-feedback">
          {{ $message }}
      </div>
  @enderror
    </div>
  </div>

  <div class="col-lg-8">
    <label for="body" class="form-label">body</label>
    @error('body')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    <input id="body" type="hidden" name="body" value="{{ old('body',$post->body) }}">
    <trix-editor input="body"></trix-editor>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Edit Post</button>
</form>
 


<script>

const title = document.querySelector('#title');
const slug = document.querySelector('#slug');

title.addEventListener('change',function(){
  fetch('/dashboard/posts/checkSlug?title=' + title.value)
  .then(response => response.json())
  .then(data => slug.value = data.slug)
});


document.addEventListener('trix-file-accept',function(e){
e.preventDefault();
});

function imagePreview(){
  const imagePreview = document.querySelector('.image-preview');
  const image = document.querySelector('#image');

  imagePreview.style.display = 'block';
  const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREvent) {
       imagePreview.src = oFREvent.target.result;
      };
}
</script>

@endsection

