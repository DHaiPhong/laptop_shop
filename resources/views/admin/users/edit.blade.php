@extends('admin.layouts.app')

@section('title', 'Sửa Roles' . $role->name)

@section('content')
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Sửa Role</h6>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('roles.update', $role->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-group input-group-static mb-4">
                        <label>Tên</label>
                        <input type="text" value="{{ old('name') ?? $role->name }}" name="name" class="form-control" placeholder="Nhập tên Role">

                        @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group input-group-static mb-4">
                        <label>Tên Hiển Thị</label>
                        <input type="text" value="{{ old('display_name') ?? $role->display_name }}" name="display_name" class="form-control" placeholder="Nhập tên hiển thị Role">
                        @error('display_name')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group input-group-static mb-4">
                        <label name="group" class="ms-0">Nhóm</label>
                        <select name="group" class="form-control" value="{{$role->group}}">
                            <option value="system" >System</option>
                            <option value="user">User</option>
                        </select>
                        @error('group')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="">Permission</label>
                        <div class="row">
                            @foreach ($permissions as $groupName => $permission)
                                <div class="col-5">
                                    <h4>{{ $groupName }}</h4>
                                    <div>
                                        @foreach ($permission as $item)
                                            <div class="form-check">
                                                <input class="form-check-input" name="permission_ids[]" type="checkbox"
                                                       {{$role->permissions->contains('name', $item->name) ? 'checked' : ''}}
                                                       value="{{ $item->id }}">
                                                <label class="custom-control-label"
                                                       for="customCheck1">{{ $item->display_name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit btn-primary">Sửa</button>
                </form>
            </div>
        </div>
    </div>
@endsection
