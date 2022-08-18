@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Installments</h5>
                        </div>
                        <a href="{{route('installment.create')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New installment</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Months
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Updated At
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($installments as $item)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$item->id}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$item->months}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm {{$item->status == 1 ? 'bg-gradient-success': 'bg-gradient-danger'}}">{{$item->status == 1 ? 'Active': 'Diactive'}}</span>
                                      </td>
                                   
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$item->updated_at}}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('installment.edit',$item->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit installment">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                    </td>
                                </tr>   
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection