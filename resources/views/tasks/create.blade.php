@extends('layouts.dashboard')

@section('content')
<header class="mb-3">
     <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
     </a>
</header>

<div class="page-heading">
     <div class="page-title">
          <div class="row">
               <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tasks</h3>
                    <p class="text-subtitle text-muted">Manage your tasks efficiently</p>
               </div>

               <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                         <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                              <li class="breadcrumb-item" aria-current="page">Tasks</li>
                              <li class="breadcrumb-item active" aria-current="page">Index</li>
                         </ol>
                    </nav>
               </div>
          </div>
     </div>
     <section class="section">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title">
                         Data
                    </h5>
               </div>
               <div class="card-body">
                    <div class="d-flex">
                         <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3 ms-auto">Add New Task</a>
                    </div>

                    <form action="{{ route('tasks.store') }}" method="POST">
                         <div class="mb-3">
                              <label for="title" class="form-label">Title</label>
                              <input type="text" class="form-control" id="title" name="title" required>
                              @error('title')
                               <div class="invalid-feedback">{{ $message }}</div>     
                              @enderror
                         </div>
                         <div class="mb-3">
                              <label for="due_date" class="form-label">Due Date</label>
                              <input type="datetime-local" class="form-control @error('due_date') is-invalid @enderror" value="{{ @old('due_date') }}" id="due_date" name="due_date" required>
                              @error('due_date')
                               <div class="invalid-feedback">{{ $message }}</div>     
                              @enderror
                         </div>
                         <div class="mb-3">
                              <label for="status" class="form-label">Status</label>
                              <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                   <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                   <option value="done" {{ old('status') == 'done' ? 'selected' : '' }}>Done</option>
                              </select>
                              @error('status')
                               <div class="invalid-feedback">{{ $message }}</div>     
                              @enderror
                         </div>
                         <div class="mb-3">
                              <label for="description" class="form-label">Description</label>
                              <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                              @error('description')
                               <div class="invalid-feedback">{{ $message }}</div>     
                              @enderror

                         </div>
                    </form>
                         

               </div>
          </div>

     </section>
</div>


@endsection