<!-- The Modal -->
<div class="modal fade" id="createModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-plus-square"></i> Yenı veri ekleme Formu</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{route('store')}}" method="POST">
          @csrf
          <div class="form-group">
            <label>Adı</label>
            <input class="form-control" type="text" name="title" placeholder="Adı" required>
          </div>
          <button class="btn btn-outline-success">Kaydet</button>
        </form>
      </div>

      

    </div>
  </div>
</div>