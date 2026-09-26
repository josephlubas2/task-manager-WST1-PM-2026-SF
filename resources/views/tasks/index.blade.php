<!DOCTYPE html>
<html>
<head>
    <title>Task Manager - WST21</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                    body { background: #f5f7fb; }
                            .card { border-radius: 15px; border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.08); }
                                    .badge-pending { background: #ffc107; color: black; }
                                            .badge-done { background: #198754; }
                                                </style>
                                                </head>
                                                <body>
                                                <nav class="navbar navbar-dark bg-dark mb-4">
                                                  <div class="container">
                                                      <span class="navbar-brand fw-bold">📝 Task Manager - Joseph Lubas | WST21</span>
                                                        </div>
                                                        </nav>

                                                        <div class="container">
                                                          <div class="card p-4">
                                                              <div class="d-flex justify-content-between align-items-center mb-3">
                                                                    <h4 class="m-0">My Tasks</h4>
                                                                          <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ New Task</a>
                                                                              </div>

                                                                                  @if(session('success'))
                                                                                        <div class="alert alert-success">{{ session('success') }}</div>
                                                                                            @endif

                                                                                                <table class="table table-hover align-middle">
                                                                                                      <thead class="table-light">
                                                                                                              <tr>
                                                                                                                        <th>Title</th>
                                                                                                                                  <th>Description</th>
                                                                                                                                            <th>Status</th>
                                                                                                                                                      <th>Action</th>
                                                                                                                                                              </tr>
                                                                                                                                                                    </thead>
                                                                                                                                                                          <tbody>
                                                                                                                                                                                  @foreach($tasks as $task)
                                                                                                                                                                                          <tr>
                                                                                                                                                                                                    <td class="fw-bold">{{ $task->title }}</td>
                                                                                                                                                                                                              <td>{{ $task->description }}</td>
                                                                                                                                                                                                                        <td>
                                                                                                                                                                                                                                    @if($task->is_completed)
                                                                                                                                                                                                                                                  <span class="badge badge-done">Completed</span>
                                                                                                                                                                                                                                                              @else
                                                                                                                                                                                                                                                                            <span class="badge badge-pending">Pending</span>
                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                  </td>
                                                                                                                                                                                                                                                                                                            <td>
                                                                                                                                                                                                                                                                                                                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                                                                                                                                                                                                                                                                                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline">
                                                                                                                                                                                                                                                                                                                                                  @csrf @method('DELETE')
                                                                                                                                                                                                                                                                                                                                                                <button class="btn btn-sm btn-danger">Delete</button>
                                                                                                                                                                                                                                                                                                                                                                            </form>
                                                                                                                                                                                                                                                                                                                                                                                      </td>
                                                                                                                                                                                                                                                                                                                                                                                              </tr>
                                                                                                                                                                                                                                                                                                                                                                                                      @endforeach
                                                                                                                                                                                                                                                                                                                                                                                                            </tbody>
                                                                                                                                                                                                                                                                                                                                                                                                                </table>
                                                                                                                                                                                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                                                                                                                                                                                  </body>
                                                                                                                                                                                                                                                                                                                                                                                                                  </html>