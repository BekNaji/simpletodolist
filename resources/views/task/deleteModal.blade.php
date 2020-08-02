<!-- The Modal -->
<div class="modal fade" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-info-circle"></i> Uyarı</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{route('delete')}}" method="POST">
          @csrf
          <input id="deleteId" type="hidden" name="id" value="">
          <b id="deleteTitle"></b> adlı veriyi silmeyi onayliyormusun? <br><br>

          <button class="btn btn-outline-success">Evet</button>
          <button class="btn btn-outline-danger" data-dismiss="modal">Hayır</button>
        </form>
      </div>

      

    </div>
  </div>
</div>