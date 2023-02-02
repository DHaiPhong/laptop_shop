@extends('admin.layouts.app')

@section('title', 'Roles')

@section('content')
    <div class="col-12">
        @if(session('message'))
            <div class="text-success text-4xl">{{session('message')}}</div>
        @endif
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Danh Sách Role</h6>
                </div>
            </div>
            <div class="card-body">
                    <a href="{{ route('roles.create') }}" class="btn btn-primary">Tạo</a>
                <div class="table-responsive p-0">
                    <table class="table table-hover align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Tên
                            </th>
                            <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">
                                Tên Hiển Thị
                            </th>
                            <th class="text-secondary opacity-7 ps-2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-md align-middle" style="padding-left: 0.6rem">{{$role->id}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-md font-weight-bold mb-0">{{$role->name}}</p>
                            </td>
                            <td>
                                <p class="text-md font-weight-bold mb-0">{{$role->display_name}}</p>
                            </td>
                            <td class="align-middle">
                                <a href="{{route('roles.edit', $role->id)}}" class="btn btn-outline-success font-weight-bold text-xs">
                                    Sửa
                                </a>
                                <form action="{{route('roles.destroy', $role->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$roles->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection


