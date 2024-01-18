@foreach ($services as $service )

<tr>
 <td>{{ $loop->iteration }}</td>
 <td>{{ $service->name }}</td>
 <td>{{ $service->title }}</td>
 <td>
     <img src="{{ asset($service::PATH. $service->image->name) }}" style="width: 5rem ;height:5rem">
 </td>
 <td><!-- Button trigger modal -->
   <button
     type="button"
     class="btn btn-primary"
     data-bs-toggle="modal"
     data-bs-target="#modalLong{{ $service->id }}">
     Description
   </button></td>
 <td class="d-flex justify-content-between align-items-center">
   <form action="{{ route('services.edit',$service->id) }}" mathod="post">
       @csrf
       @method('put')

       <button type="submit" class="btn btn-info">Edit</button>
   </form>
   <a  data-confirm-delete="true" href="{{ route('services.destroy',$service->id) }}" class="btn btn-danger">Delete</a>
 </td>
</tr>
    


      {{-- model --}}
<!-- Modal Scroll long content -->
<div class="col-lg-4 col-md-3">

<!-- Modal -->
<div class="modal fade" id="modalLong{{ $service->id }}" tabindex="-1" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
 <h5 class="modal-title" id="modalLongTitle">Description</h5>
 <button
   type="button"
   class="btn-close"
   data-bs-dismiss="modal"
   aria-label="Close"></button>
</div>
<div class="modal-body">
 

 <p>{{ $service->description }}</p>
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
