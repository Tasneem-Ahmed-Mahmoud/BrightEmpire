@extends('dashboard.layout.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row justify-content-center">
   <div class="col-10">
       <div class="card mb-4">
         <div class="card-header d-flex justify-content-between align-items-center">
           <h5 class="mb-0">Create  Service</h5>
           
         </div>
         <div class="card-body">
           <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
             
             <div class="mb-3">
               <label class="form-label" for="basic-default-fullname"> Short Name</label>
               <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('name')??'' }}" name="name">
               @error('name')
                   <small class="text-danger">{{ $message }}</small>
               @enderror
             </div>

             <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Long Name</label>
              <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('title')??'' }}" name="title">
              @error('title')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
             <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="description" >{{ old('description')??'' }}</textarea>
              @error('description')
              <small class="text-danger">{{ $message }}</small>
          @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" name="image">
                @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname"> Image Alt</label>
                <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('alt')??'' }}" name="alt">
                @error('alt')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mt-2 mb-3">
                <label for="largeSelect" class="form-label">Main Service</label>
                <select id="largeSelect" class="form-select form-select-lg" name="category_id">
                 @foreach ($categories as $category )
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endforeach
                 @error('category_id')
                 <small class="text-danger">{{ $message }}</small>
                @enderror
                </select>
              </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname"> Url</label>
              <input type="text" class="form-control" id="basic-default-fullurl" value="{{ old('url')??'' }}" name="url">
              @error('url')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname"> SEO Title</label>
              <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('seo_title')??'' }}" name="seo_title">
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