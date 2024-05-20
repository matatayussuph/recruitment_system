@extends('layouts.master')
@section('page_title', 'My Jobs')
@section('content')
<div class="row">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>

    <div class="card-header">
        <h6 class="card-title font-weight-bold">Jobs Created</h6>
    </div>
  
    <div class="card-body">    
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Posted On</th>
                    <th>DeadLine</th>
                    <th>Industry</th>

                </tr>
            </thead>
            <tbody>
              
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @
            </tbody>
        </table>
    </div>
</div>
@endsection
