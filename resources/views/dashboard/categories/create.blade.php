@extends('dashboard.layout.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row justify-content-center">
   <div class="col-10">
       <div class="card mb-4">
         <div class="card-header d-flex justify-content-between align-items-center">
           <h5 class="mb-0">Create Category</h5>
           
         </div>
         <div class="card-body">
           <form action="{{ route('categories.store') }}" method="POST" >
              @csrf
             
             <div class="mb-3">
               <label class="form-label" for="basic-default-fullname"> Short Name</label>
               <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('name')??'' }}" name="name">
               @error('name')
                   <small class="text-danger">{{ $message }}</small>
               @enderror
             </div>

             <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">  Long Name</label>
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
              <label class="form-label" for="basic-default-fullname"> Url</label>
              <input type="text" class="form-control" id="basic-default-fullurl" value="{{ old('url')??'' }}" name="url">
              @error('url')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
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