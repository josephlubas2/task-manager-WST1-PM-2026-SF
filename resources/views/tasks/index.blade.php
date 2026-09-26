<h1>Task Manager - WST21-PM-2026-SF</h1>
<a href="/tasks/create"><button>Add New Task</button></a>
<br><br>
<table border="1" cellpadding="10">
<tr><th>Title</th><th>Description</th><th>Status</th><th>Action</th></tr>
@foreach($tasks as $t)
<tr>
<td>{{$t->title}}</td>
<td>{{$t->description}}</td>
<td>{{$t->status}}</td>
<td>
<a href="/tasks/{{$t->id}}/edit">Edit</a>
<form action="/tasks/{{$t->id}}" method="POST" style="display:inline">
@csrf @method('DELETE')
<button>Delete</button>
</form>
</td>
</tr>
@endforeach
</table>