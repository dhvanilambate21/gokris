@extends('layouts.app')
@section('content')
<section class="">
    <div class="container">
        <div class="row create__new__test">
            <div class="col-6">
                <div class="quiz__adm">
                    <form method="POST" action="{{ route('store') }}">
                        @csrf
                    <div class="quiz__part">
                        <p>Quiz title<span class="exclamation"></span><span class="Max__mark">Maximum 100
                                characters.</span></p>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="quiz__tag">
                        <div class="question__counter">
                            <span class="question__number">
                                <p>1</p>
                            </span>
                            <p>In which year of First World War Germany declared war on Russia and France?</p>
                        </div>
                        <div class="row answer__key">
                            <div class="col-6">
                                <div class="add__answer">
                                    <input type="text" class="answer form-control " placeholder="Add answer">
                                    <p>Tags
                                        <span class="btn tags__subject">History</span>
                                        <span class="btn tags__subject">Arts</span>
                                    </p>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="add__answer">
                                    <input type="text" class="answer form-control" placeholder="Add answer">
                                    <p>Tags
                                        <span class="btn tags__subject">History</span>
                                        <span class="btn tags__subject">Arts</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="add__answer">
                                    <input type="text" class="answer form-control " placeholder="Add answer">
                                    <p>Tags
                                        <span class="btn tags__subject">History</span>
                                        <span class="btn tags__subject">Arts</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="add__answer">
                                    <input type="text" class="answer form-control " placeholder="Add answer">
                                    <p>Tags
                                        <span class="btn tags__subject">History</span>
                                        <span class="btn tags__subject">Arts</span>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="question__copy">
                            <div class="left__copy">
                                <span>
                                    <img src="{{ asset('admin/images/Make a copy.png') }}" alt="">
                                </span>
                            </div>
                            <div class="right__copy">
                                <span>
                                    <img src="{{ asset('admin/images/Make a copy.png') }}" alt="">
                                </span>
                                <span>
                                    <img src="{{ asset('admin/images/Log out.png') }}" alt="">
                                </span>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-3">
                <div class="quiz__part__2">
                    <p class="quiz__part__text">Question tags</p>
                    <ul>
                        <li>
                            <p>Science<span class="quiz__count">25</span></p>
                        </li>
                        <li>
                            <p>Engineering<span class="quiz__count">0.00</span></p>
                        </li>
                        <li>
                            <p>Geometry<span class="quiz__count">0.00</span></p>
                        </li>
                        <li>
                            <p>Arts<span class="quiz__count">0.00</span></p>
                        </li>
                        <li>
                            <p>Enter tags here<span class="quiz__count">0.00</span></p>
                        </li>
                        <li>
                            <p>Add tag<span class="add__count"></span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5>Do you want to close test ?</h5>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn test__opinian" data-bs-dismiss="modal" aria-label="Close">Save as
                    Draft</a>
                <a type="button" class="btn test__opinian" data-bs-dismiss="modal" aria-label="Close">Yes, Delete
                    test</a>
            </div>
        </div>
    </div>
</div>

@endsection