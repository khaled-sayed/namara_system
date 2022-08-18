@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form mb-8 add-installment" method="POST" action="{{route('installment.update',$installment->id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" id="parsley-form"
                        data-animation="FadeIn">
                        <h5 class="font-weight-bolder mb-0">Installment</h5>
                        <div class="multisteps-form__content">
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <label>Months</label>
                                    <input class="multisteps-form__input form-control field" type="number" value="{{$installment->months}}"
                                        name="months" id="months" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                                        <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckDefault" @php if($installment->status == 1) {echo  "checked";} else{ echo 'false';} @endphp>
                                      </div>
                                </div>
                            </div>
                            <div class="button-row d-flex mt-4">
                                <button class="btn bg-gradient-dark ms-auto mb-0" id="Save" type="submit"
                                    title="Save">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
