<h1>Add Task</h1>
<form action="/tasks" method="POST">
@csrf
Title: <input type="text" name="title" required><br><br>
Description: <input type="text" name="description"><br><br>
Status: <select name="status"><option>Pending</option><option>In Progress</option><option>Completed</option></select><br><br>
<button type="submit">Save</button>
</form>
<a href="/tasks">Back</a>