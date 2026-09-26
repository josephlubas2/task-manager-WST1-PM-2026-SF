<h1>Edit / Update Status</h1>
<form action="/tasks/{{$task->id}}" method="POST">
@csrf @method('PUT')
Title: <input type="text" name="title" value="{{$task->title}}"><br><br>
Description: <input type="text" name="description" value="{{$task->description}}"><br><br>
Status: <select name="status">
<option {{$task->status=='Pending'?'selected':''}}>Pending</option>
<option {{$task->status=='In Progress'?'selected':''}}>In Progress</option>
<option {{$task->status=='Completed'?'selected':''}}>Completed</option>
</select><br><br>
<button type="submit">Update</button>
</form>
<a href="/tasks">Back</a>