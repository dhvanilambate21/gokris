@extends('layouts.app')
@section('content')
<section class="user_profile__view">
    <div class="container">
        <div class="row profile_adm">
            <div class="col-12">
                <div class="profile__info">
                    <ul class="profile__list">
                        <li class="profile__manu active">
                            <a href="#" class="sidebar__manu">Basics</a>
                        </li>
                        <li class="profile__manu">
                            <a href="#" class="sidebar__manu">User Account</a>
                        </li>
                    </ul>
                    <div class="profile__editing">


                            <div class="profile__information">
                                <h5>Profile information</h5>

                                <div class="picture-container">
                                    <div class="picture">
                                        <img src="{{ asset('backend/images/Auth::user()->image') }}" class="picture-src"
                                         />

                                    </div>
                                </div>
                                <div class="user__input">
                                    <label for="exampleInputEmail1" class="form-label">Name :  {{ Auth::user()->name }}</label>

                                </div>
                                <div class="user__input">
                                    <label for="exampleInputPassword1" class="form-label">Email :  {{ Auth::user()->email}}</label>
                                </div>
                                <div>
                                    <a href="{{ route('edit-profile',Auth::user()->id) }}" class="btn user__btn m-0">Edit Profile</a>
                                </div>

                            </div>

                        <div class="profile__login">
                            <h5>Login</h5>
                            <form method="POST" action="{{ route('update-password')}}">
                                @csrf
                                <div class="row">
                                    <div class="user__input">
                                        <label for="formGroupExampleInput" class="form-label">Old password</label>

                                        <input name="old_password" type="password"
                                            class="form-control @error('old_password') is-invalid @enderror"
                                            id="formGroupExampleInput">
                                    </div>
                                    <div class="col-md-6 user__input">
                                        <label for="inputEmail4" class="form-label">New password</label>
                                        <input name="new_password" type="password"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            id="newPasswordInput">
                                    </div>
                                    <div class="col-md-6 user__input">
                                        <label for="inputPassword4" class="form-label">Confirm new password</label>
                                        <input name="new_password_confirmation" type="password" class="form-control"
                                            id="confirmNewPasswordInput" placeholder="Confirm New Password">
                                    </div>
                                    <div>
                                        <button class="btn user__remove">Update password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection