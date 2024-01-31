@extends('dashboard.layout.master')
@section('style')
<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- include summernote css/js -->
<link href="{{ asset('dashboard/assets/css/summernote.min.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row justify-content-center">
   <div class="col-10">
       <div class="card mb-4">
         <div class="card-header d-flex justify-content-between align-items-center">
           <h5 class="mb-0">Create Category</h5>
           
         </div>
         <div class="card-body">
           <form action="{{ route('categories.store') }}" method="POST"  class="row">
              @csrf
             
             <div class="mb-3 col-6">
               <label class="form-label" for="basic-default-fullname"> Short Name</label>
               <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('name')??'' }}" name="name">
               @error('name')
                   <small class="text-danger">{{ $message }}</small>
               @enderror
             </div>

             <div class="mb-3 col-6">
              <label class="form-label" for="basic-default-fullname">  Long Name</label>
              <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('title')??'' }}" name="title">
              @error('title')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <textarea id="description" class="form-control" id="exampleFormControlTextarea1" rows="10"
                name="content">{{ old('description')??'' }}</textarea>
              @error('description')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Content</label>
              <textarea id="content" class="form-control" id="exampleFormControlTextarea1" rows="10"
                name="content">{{ old('content')??'' }}</textarea>
              @error('content')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="mb-3 col-6">
              <label class="form-label" for="basic-default-fullname"> Url</label>
              <input type="text" class="form-control" id="basic-default-fullurl" value="{{ old('url')??'' }}" name="url">
              @error('url')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3 col-6">
              <label class="form-label" for="basic-default-fullname"> SEO Title</label>
              <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('title')??'' }}" name="seo_title">
              @error('seo_title')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"> SEO Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="seo_description" >{{ old('seo_description')??'' }}</textarea>
              @error('seo_description')
              <small class="text-danger">{{ $message }}</small>
          @enderror
            </div>
            
            <div class="float-end">
              <button type="submit" class="btn btn-primary px-5">Save</button>
            </div>
           </form>
         </div>
       </div>
     </div>
  
  </div>
</div>

@endsection


@section('script')
<script src="{{ asset('dashboard/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('dashboard/assets/js/summernote.min.js') }}"></script>
<script>
  $(document).ready(function() {
    console.log("ffff")
      $('#content').summernote({
        placeholder: 'Category Content...',
        tabsize: 2,
        height: 400,
       
      });

      $('#description').summernote({
        placeholder: 'Category Description...',
        tabsize: 2,
        height: 400,
       
      });
    });
</script>
@endsection