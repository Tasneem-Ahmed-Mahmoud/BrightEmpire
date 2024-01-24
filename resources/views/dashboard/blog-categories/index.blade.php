@extends('dashboard.layout.master')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span>Blog Categories</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Blog Categories</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th >#</th>
              <th > Name</th>
              <th >Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
           @foreach ($categories as $category )

           <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td class="d-flex justify-content-between align-items-center">
              <form action="{{ route('blog-categories.edit',$category->id) }}" mathod="post">
                  @csrf
                  @method('put')

                  <button type="submit" class="btn btn-info">Edit</button>
              </form>
              <a  data-confirm-delete="true" href="{{ route('blog-categories.destroy',$category->id) }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
           @endforeach
          </tbody>
        </table>
        {{ $categories->links() }}
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

   
   
  </div>
  
  

  

@endsection