@extends('layouts.app')
@section('content')
<section class="test__department">
    <div class="container">
        <div class="row create__text__adm">
            <div class="col-9">

                <div class="test__main">
                    <!-- <h2>Soft Deleted Test</h2>
                    <a href="create" class="btn btn__create"><img src="{{ asset('backend/images/add-icon.png') }}"
                            alt="" />Create</a> -->
                </div>
                @if(count($tests) > 0)

                @foreach ($tests as $test)
                <div class="quiz__amd">

                    <div class="test__sheet">
                        <img src="{{ asset('backend/images/test-icon.png') }}" alt="" />
                        <p>{{ $test->title }}</p>
                    </div>
                    <div class="test__icon dropdown">

                            <a class="btn btn-danger" href="{{ route('admin.forcedelete', $test->id) }}" type="submit">
                                <img src="{{ asset('backend/images/Log out@3x.svg') }}" alt="" />
                                Delete Test
                            </a>

                            <a class="btn btn-success" href="{{ route('admin.restore', $test->id) }}" type="submit">
                                <img src="{{ asset('backend/images/Log out@3x.svg') }}" alt="" />
                                Restore
                            </a>


                    </div>
                </div>
                @endforeach
                @else
                <div class="quiz__amd">
                
                <h3>No test found</h3>

                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Modal -->

@endsection