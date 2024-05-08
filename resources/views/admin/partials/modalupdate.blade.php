 {{-- Modal Edit --}}
 <div class="modal fade" id="UpdateProfilModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                 <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
             </div>
             <form action="/update-profil" method="POST">
                 @csrf
                 @method('post')
                 <div class="modal-body">

                     <div class="mb-3">
                         <label for="recipient-name" class="col-form-label">Name</label>
                         <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" id="recipient-name">
                     </div>

                     <div class="mb-3">
                         <label for="recipient-name" class="col-form-label">Email</label>
                         <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control" id="recipient-name">
                     </div>

                     <div class="mb-3">
                         <label for="recipient-name" class="col-form-label">Password</label>
                         <input type="password" name="password" class="form-control" id="recipient-name">
                     </div>

                     <div class="mb-3">
                         <label for="recipient-name" class="col-form-label">Re-Password</label>
                         <input type="password" name="repassword" class="form-control" id="recipient-name">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
 {{-- End Modal Edit --}}
