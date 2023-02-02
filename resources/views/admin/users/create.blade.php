@extends('admin.layouts.app')

@section('title', 'Tạo users')

@section('content')
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Tạo user</h6>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class=" input-group-static col-5 mb-4">
                            <label>Hình Ảnh</label>
                            <input type="file" accept="image/*" name="image" id="image-input" class="form-control">

{{--                            @error('images')--}}
{{--                            <span class="text-danger"> {{ $message }}</span>--}}
{{--                            @enderror--}}
                        </div>
                        <div class="col-5">
                            <img src="" id="show-images" alt="" width="300" height="300" style="object-fit: cover">
                        </div>
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Tên</label>
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="Nhập tên user">
                        @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group input-group-static mb-4">
                        <label>Email</label>
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Nhập Email">
                        @error('email')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Mật Khẩu</label>
                        <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                        @error('password')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Số Điện Thoại</label>
                        <input type="number" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Nhập số điện thoại">
                        @error('phone')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label>Địa chỉ</label>
                        <textarea name="address" class="form-control">
                            {{ old('address') }}
                        </textarea>
                    </div>
                    <div class="input-group input-group-static mb-4">
                        <label name="group" class="ms-0">Giới tính</label>
                            <select name="gender" class="form-control">
                                <option value="male">Nam</option>
                                <option value="fe-male">Nữ</option>
                            </select>
                            @error('gender')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        @error('gender')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Roles</label>
                        <div class="row">
                            @foreach ($roles as $groupName => $role)
                                <div class="col-5">
                                    <h4>{{ $groupName }}</h4>
                                    <div>
                                        @foreach ($role as $item)
                                            <div class="form-check">
                                                <input class="form-check-input" name="permission_ids[]" type="checkbox"
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
                    <button type="submit" class="btn btn-submit btn-primary">Tạo</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
    <script>
        $(() => {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#show-images').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#images-input").change(function() {
                readURL(this);
            });
        });
    </script>
@endsection

