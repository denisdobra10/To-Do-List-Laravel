@extends('master')

@section('content')

<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="center">
                <form class="was-validated" method="POST" action="newlist">
                    @csrf

                    <div class="mb3">
                        <label for="validationInput">Title of task</label>
                        <input type="text" class="form-control is-invalid" id="validationInput" placeholder="Title is required" name="title" required>
                    </div>

                    <div class="mb-3">
                      <label for="validationTextarea">Task text content</label>
                      <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required task area" name="content" required></textarea>
                    </div>

                    <div class="mb3">
                        <input type="submit" class="btn btn-success">
                    </div>

                  </form>
            </div>
        </div>
    </div>
</div>
    


@endsection