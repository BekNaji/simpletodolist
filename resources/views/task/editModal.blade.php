<!-- The Modal -->
<div class="modal fade" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-edit"></i> Düzenleme Formu</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{route('update')}}" method="POST">
          @csrf
          <input id="inputId" type="hidden" name="id" value="">
          <div class="form-group">
            <label>Adı</label>
            <input id="inputTitle" class="form-control" type="text" name="title" value="" required>
          </div>
          <button class="btn btn-outline-success">Güncelle</button>
        </form>
      </div>

      

    </div>
  </div>
</div>