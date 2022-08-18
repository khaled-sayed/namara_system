@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form mb-8 edit-amount" method="POST" action="{{route('amount.update',$amount->id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" id="parsley-form"
                        data-animation="FadeIn">
                        <h5 class="font-weight-bolder mb-0">Amount</h5>
                        <div class="multisteps-form__content">
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <label>Min Amount</label>
                                    <input class="multisteps-form__input form-control field" type="number" value="{{$amount->min}}"
                                        name="min" id="min" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Max Amount</label>
                                    <input class="multisteps-form__input form-control field" type="number" value="{{$amount->max}}"
                                        name="max" id="max" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <label>Processing fee</label>
                                    <input class="multisteps-form__input form-control field" type="number" value="{{$amount->processing_fee}}"
                                        name="processing_fee" id="processing_fee" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Annual rate</label>
                                    <input class="multisteps-form__input form-control field" type="number" value="{{$amount->annual_rate}}"
                                        name="annual_rate" id="annual_rate" onfocus="focused(this)" onfocusout="defocused(this)">
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
