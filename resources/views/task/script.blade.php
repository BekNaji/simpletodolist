<script type="text/javascript">
var url = '{{url('/')}}';

$('.edit').on('click',function()
{
	var id = $(this).data('id');
	var title = $(this).data('title');
	$('#editModal').modal('show');
	$('#inputId').val(id);
	$('#inputTitle').val(title);
});

$('.delete').on('click',function()
{
	var id = $(this).data('id');
	var title = $(this).data('title');
	$('#deleteModal').modal('show');
	$('#deleteId').val(id);
	$('#deleteTitle').text(title);
});
</script>