@extends('layouts.app')
@section('content')
    <section class="test__department">
        <div class="container">
            <div class="row create__text__adm">
                <div class="col-9">
                    <div class="test__main">
                        <h2>Test</h2>
                        <a href="create" class="btn btn__create"><img src="{{ asset('admin/images/add-icon.png') }}"
                                alt="" />Create</a>
                    </div>
                    <div class="quiz__amd">
                        <div class="test__sheet">
                            <img src="{{ asset('admin/images/test-icon.png') }}" alt="" />
                            <p>Quiz 1 - Questions</p>
                        </div>
                        <div class="test__icon">
                            <p><span class="pablised"><img src="{{ asset('admin/images/available-green.png') }}" alt=""></span>Published</p>
                            <a href="#" class="test__edit"><img src="{{ asset('admin/images/action-icon.png') }}"></a>
                        </div>
                    </div>
                    <div class="quiz__amd">
                        <div class="test__sheet">
                            <img src="{{ asset('admin/images/test-icon.png') }}" alt="" />
                            <p>Quiz 2 - Backup Questions</p>
                        </div>
                        <div class="test__icon dropdown">
                            <p><span class="pablised">
                                    <img src="{{ asset('admin/images/available.png') }}" alt="">
                                </span>Archived
                            </p>
                            <a href="#" class="test__edit dropdown-toggle" href="#" id="navbarDropdown__ks"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('admin/images/action-icon.png') }}" />
                                <ul class="dropdown-menu" id="dropdown-menu__ks" aria-labelledby="navbarDropdown"
                                    aria-label="Close">
                                    <li class="test__modify">
                                        <a class="dropdown-item" href="edit-test.html">
                                            <img src="{{ asset('admin/images/account@3x.svg') }}" alt="" />
                                            Edit Test
                                        </a>
                                    </li>
                                    <li class="test__modify">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop" type="button">
                                            <img src="{{ asset('admin/images/Log out@3x.svg') }}" alt="" />
                                            Delete Test
                                        </a>
                                    </li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5>Are sure you want delete Test?</h5>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn test__opinian" data-bs-dismiss="modal" aria-label="Close">No</a>
                    <a type="button" class="btn test__opinian" data-bs-dismiss="modal" aria-label="Close">Yes,
                        Delete</a>
                </div>
            </div>
        </div>
    </div>
    @endsection



   