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

                        <form method="POST" action="{{ route('update-details',Auth::user()->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="profile__information">
                                <h5>Profile information</h5>
                                <div class="picture-container">
                                    <div class="picture">
                                        <img src="{{Storage::url(Auth::user()->image) }}" class="picture-src"
                                            id="wizardPicturePreview" title="" />
                                        <input type="file" name="image" id="wizard-picture" aria-invalid="false"
                                            class="valid" accept="image/*"  />
                                    </div>
                                    <h6>Choose Picture</h6>
                                </div>
                                <div class="user__input">
                                    <label for="exampleInputEmail1" class="form-label">Display name</label>
                                    <input type="text" class="form-control" placeholder="Username" value="{{ Auth::user()->name }}"
                                        aria-label="Username" aria-describedby="basic-addon1" name="name">
                                </div>
                                <div class="user__input">
                                    <label for="exampleInputPassword1" class="form-label">email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="{{ Auth::user()->email }}"
                                        name="email">
                                </div>
                                <div>
                                    <button type="submit" class="btn user__btn m-0">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection