@extends('dashboard.layout.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row justify-content-center">
   <div class="col-10">
       <div class="card mb-4">
         <div class="card-header d-flex justify-content-between align-items-center">
           <h5 class="mb-0">Update Blog Category</h5>
           
         </div>
         <div class="card-body">
           <form action="{{ route('blog-categories.update',$category->id) }}" method="POST" >
              @csrf
             @method('put')
             <div class="mb-3">
               <label class="form-label" for="basic-default-fullname">  Name</label>
               <input type="text" class="form-control" id="basic-default-fullname" value="{{ old('name')?old('name'):$category->name }}" name="name">
               @error('name')
                   <small class="text-danger">{{ $message }}</small>
               @enderror
             </div>

             
             
            
            
            <div class="float-end">
              <button type="submit" class="btn btn-primary px-5">Update</button>
            </div>
           </form>
         </div>
       </div>
     </div>
  
  </div>
</div>

@endsection