@extends('dashboard.layouts.app')

@section('content')


    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">

                </div>
            </div>


            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>لیست تیکت ها</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <div id="style-3_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="style-3_length"><label>نتایج :  <select name="style-3_length" aria-controls="style-3" class="form-control"><option value="5">5</option><option value="10">10</option><option value="20">20</option><option value="50">50</option></select></label></div></div><div class="col-sm-12 col-md-6"><div id="style-3_filter" class="dataTables_filter"><label><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg><input type="search" class="form-control" placeholder="جستجو کنید..." aria-controls="style-3"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="style-3" class="table style-3 table-hover dataTable no-footer" role="grid" aria-describedby="style-3_info">

                                                <a href="{{route('tickets.create')}}" class="btn btn-success" > ارسال تیکت جدید</a>

                                                <thead>
                                                <tr role="row"><th class="checkbox-column text-center sorting_asc" tabindex="0" aria-controls="style-3" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" شناسه : activate to sort column descending" style="width: 95px;"> شناسه </th>

                                                    <th class="sorting" tabindex="0" aria-controls="style-3" rowspan="1" colspan="1" aria-label="عنوان: activate to sort column ascending" style="width: 129px;">انتخاب</th>
                                                    <th class="sorting" tabindex="0" aria-controls="style-3" rowspan="1" colspan="1" aria-label="عنوان: activate to sort column ascending" style="width: 129px;">عنوان</th>
                                                    <th class="sorting" tabindex="0" aria-controls="style-3" rowspan="1" colspan="1" aria-label="توضیحات: activate to sort column ascending" style="width: 158px;">توضیحات</th>
                                                    <th class="sorting" tabindex="0" aria-controls="style-3" rowspan="1" colspan="1" aria-label="عکس: activate to sort column ascending" style="width: 158px;">عکس</th>
                                                    <th class="text-center sorting" tabindex="0" aria-controls="style-3" rowspan="1" colspan="1" aria-label="وضیعت: activate to sort column ascending" style="width: 109px;">وضیعت</th>
                                                    <th class="text-center sorting" tabindex="0" aria-controls="style-3" rowspan="1" colspan="1" aria-label="عمل: activate to sort column ascending" style="width: 100px;">عمل</th></tr>
                                                </thead>
                                                <tbody>

                                                @foreach($tickets as $key => $ticket)


                                                <tr role="row">
                                                    <td class="checkbox-column text-center sorting_1"> {{$key++}}</td>

                                                    <td>{{$ticket->select}}</td>
                                                    <td>{{$ticket->title}}</td>

                                                    <td>{{$ticket->description}}</td>
                                                    <td><img src="{{asset("assets/dashboard/img/".$item->image)}}" width="50px" height="50px"></td>

                                                    <td class="text-center"><span class="shadow-none badge badge-warning"> {{$ticket->status}} </span></td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="{{route('ticket.edit',$ticket->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="ویرایش">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>

                                                            <li>

                                                                <button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $ticket->id }}" data-action="{{ route('ticket.destroy',$ticket->id) }}"> Delete</button>

                                                            </li>

                                                        </ul>
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

                </div>

            </div>

@endsection


