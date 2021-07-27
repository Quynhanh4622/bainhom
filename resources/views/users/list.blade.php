@extends('layout.master-layout')
@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="breadcome-heading">
                                    <form id="form-filter">
                                        <div class="col-md-3 form-group">
                                            <input type="text" placeholder="Search..." class="search-int form-control">

                                        </div>
                                    </form>

                                </div>
                                {{--                     data-search="true",data-pagination="true",data-show-pagination-switch="true",data-show-refresh="true", data-show-toggle="true",data-show-export="true",data-show-columns="true" --}}
                                <table id="table" data-toggle="table" data-key-events="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Salary</th>
                                        <th>Department</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($admins as $admin)
                                        <tr>
                                            <td>{{$admin->id}}</td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->position}}</td>
                                            <td>{{$admin->salary}}</td>
                                            <td>{{$admin->department}}</td>
                                            <td>{{$admin->created_at}}</td>
                                            <td>
                                                <a href="/users/edit/{{$admin->id}}"><button class="btn btn-primary"><i class="fas fa-user-edit"></i> Edit</button></a>
                                                <a href="/users/destroy/{{$admin->id}}"><button class="btn btn-danger" onclick="return confirm('Bạn có chắc là muốn xóa không?')"><i class="fas fa-trash"></i> Delete</button></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
{{--                        @include('paginate.template',['list' => $list])--}}
                        {!! $admins->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const form = document.getElementById('form-filter');
        const search = document.getElementById('search');
        const status = document.getElementById('status');

        search.onkeypress = function (admin){
            if(admin.key == 'Enter'){
                form.submit();
            }
        }
    </script>
@endsection

