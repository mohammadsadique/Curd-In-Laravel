@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  d-flex justify-content-between">
                    <span>{{ __('Customer List') }}</span>

                    <a href="{{ route('customers.create') }}" class="btn btn-primary btn-sm">Add Customer</a>
                </div>

                <div class="card-body">
                    
                   
                <div class="table-responsive">
                    <table id="example"  class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! $tbl !!}
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

 
<script>
    $(function () {
        $('#example').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    })
</script>
@endsection
