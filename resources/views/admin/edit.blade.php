@extends('layouts.app')
@section('content')
    <section class="">
        <div class="container">
            <div class="row question__adm">
                <div class="col-7">
                    <!-- <div class="question__adm__oq">
                        <h5>Quiz 1 - Questions</h5>
                    </div> -->
                    <div class="question__adm__1q">
                        <form method="POST" action="{{ route('update',$tests->id) }}">
                            @csrf
                            @method('PUT')
                        <div class="quiz__part">
                        <p>Quiz title<span class="exclamation"></span><span class="Max__mark">Maximum 100
                                characters.</span></p>
                        <input type="text" class="form-control" name="title" value="{{ $tests->title }}">
                        <button type="submit" name="update" class="btn btn-primary btn-sm mt-3">Update</button>
                    </div>
                        </form>

                        <form>
                            <div class="quiz__options">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="ans__q form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="radio-label" for="one_a">
                                                <span class="alphabet">A</span> Answer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="ans__q">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="radio-label" for="one_b">
                                                <span class="alphabet">B</span>Answer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="ans__q">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="radio-label" for="one_c">
                                                <span class="alphabet">C</span> Answer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="ans__q">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="radio-label" for="one_c">
                                                <span class="alphabet">D</span> Answer
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection