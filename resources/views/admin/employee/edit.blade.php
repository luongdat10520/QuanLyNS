@extends('layout.main-admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Cập Nhật Thông Tin Nhân Viên</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('employees.update',['id' => $info->id]) }}" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">ID Nhân Viên:</label>
                <input type="text" class="form-control" value="{{$info->user_id}}" disabled>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Họ Tên:</label>
                <input type="text" class="form-control" name="name" value="{{$info->name}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" value="{{$info->user->email}}">
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Ngày Sinh:</label>
                <input type="date" class="form-control" name="date_of_birth" value="{{$info->date_of_birth}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa Chỉ:</label>
                <input type="text" class="form-control" name="address" value="{{$info->address}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Số Điện Thoại:</label>
                <input type="tel" class="form-control" name="phone_number" value="{{$info->phone_number}}">
            </div>
            <div class="mb-3">
                <label for="department_id" class="form-label">Phòng Ban:</label>
                <select class="form-control" name="department_id">
                    @foreach($departments as $department)
                    <option value="{{ $department->id }}" {{ $info->department->id == $department->id ? 'selected' : '' }}>
                        {{ $department->department_name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="position_id" class="form-label">Chức Vụ:</label>
                <select class="form-control" name="position_id">
                    @foreach($positions as $position)
                    <option value="{{ $position->id }}" {{ $info->position->id == $position->id ? 'selected' : '' }}>
                        {{ $position->position_name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <a href="#">
                    <button type="submit" class="btn btn-primary">Cập Nhật</button>
                </a>
            </div>
            @csrf
        </form>
    </div>
</div>
@endsection