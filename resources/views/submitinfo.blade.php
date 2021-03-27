@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit transaction's information</h1>
        </div>
        <div class="row">
            <form action="/transactioninfo/submitinfo" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        لطفا خطاهای زیر را برطرف کنید
                    </div>
                @endif
                <div class="form-group">
                    <label for="nationalId">شماره ملی</label>
                    <input type="string" class="form-control @error('nationalId') is-invalid @enderror" id="nationalId" name="nationalId" placeholder="nationalId" value="{{ old('nationalId') }}">
                    @error('nationalId')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="firstName">نام</label>
                    <input type="string" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" placeholder="firstName" value="{{ old('firstName') }}">
                    @error('firstName')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lastName">نام خانوادگی</label>
                    <input type="string" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" placeholder="lastName" value="{{ old('lastName') }}">
                    @error('lastName')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phoneNumber">شماره تلفن همراه</label>
                    <input type="string" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" name="phoneNumber" placeholder="phoneNumber" value="{{ old('phoneNumber') }}">
                    @error('phoneNumber')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">آدرس محل اقامت</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="address" value="{{ old('address') }}">
                    @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">آدرس محل اقامت</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="address" value="{{ old('address') }}">
                    @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="birthDate">تاریخ تولد</label>
                    <input type="date" class="form-control @error('birthDate') is-invalid @enderror" id="birthDate" name="birthDate" placeholder="birthDate" value="{{ old('birthDate') }}">
                    @error('birthDate')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">ذخیره</button>
            </form>
        </div>
    </div>
@endsection
