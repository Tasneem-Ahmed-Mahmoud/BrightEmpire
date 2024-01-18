@extends('dashboard.layout.master')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y"> 
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Reviews</h4>
      
    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="row justify-content-end ">
        <div class="col-lg-3 col-sm-6 col-12">
       
          <div class="demo-inline-spacing">
            
          </div>
        </div>
      </div>
   
      <h5 class="card-header">Reviews</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th> Name</th>
              <th>Image</th>
              <th >Message</th>
              <th >Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0" id="review">
           @foreach ($reviews as $review )

           <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $review->name }}</td>
           
            <td>
                <img src="{{ asset($review::PATH. $review->image->name) }}" style="width: 5rem ;height:5rem">
            </td>
            <td><!-- Button trigger modal -->
              <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalLong{{ $review->id }}">
                Description
              </button></td>
            <td class="d-flex justify-content-between align-items-center">
              <form action="{{ route('reviews.edit',$review->id) }}" mathod="post">
                  @csrf
                  @method('put')

                  <button type="submit" class="btn btn-info">Edit</button>
              </form>
              <a  data-confirm-delete="true" href="{{ route('reviews.destroy',$review->id) }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
               


                 {{-- model --}}
  <!-- Modal Scroll long content -->
  <div class="col-lg-4 col-md-3">
   
    <!-- Modal -->
    <div class="modal fade" id="modalLong{{ $review->id }}" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">Message</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
           
            <p>{{ $review->message }}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
              Close
            </button>
           
          </div>
        </div>
      </div>
    </div>  
  </div>
           @endforeach
          
          
            
          </tbody>
        </table>

       <div class="float-end me-5">
        {{ $reviews->links() }}
       </div>

      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

   
   
  </div>

     

@endsection

