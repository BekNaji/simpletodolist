@extends('layouts.task')
@section('content')
<div class="col-md-8 offset-md-2">
	@if(session('message'))
			<div class="alert border border-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong><i class="fa fa-info-circle"></i></strong> {{session('message')}}
			</div>
			@endif
	<div class="card shadow-sm  mb-5 bg-white rounded">
		<div class="card-header ">
			<b> <i class="	fa fa-th-list"></i>  Todo List</b>
			<button class="btn btn-outline-success float-right" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus-square"></i> Yeni Ekle</button>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Ad</th>
						<th>Oluşturulan Tarih</th>
						<th>İşlemler</th>
					</tr>
				</thead>
				<tbody>
					@if($tasks)
					@foreach($tasks as $task)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$task->title}}</td>
						<td>{{$task->created_at}}</td>
						<td>
							<button 

							class="btn btn-outline-warning edit" 
							data-title='{{$task->title}}'
							data-id='{{$task->id}}'><i class="fa fa-edit"></i></button>

							<button 
							
							class="btn btn-outline-danger delete" 
							data-title='{{$task->title}}'
							data-id='{{$task->id}}'><i class="fa fa-trash"></i></button>
						</td>
					</tr>
					@endforeach
					@endif
				</tbody>
			</table>
			
		</div>
	</div>
</div>
@include('task.createModal')
@include('task.editModal')
@include('task.deleteModal')
@include('task.script')
@endsection