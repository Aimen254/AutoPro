@extends('admin.app_admin')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">{{ CONTACT_FORM }}</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>{{ SERIAL }}</th>
                        <th>{{ NAME }}</th>
                        <th>{{EMAIL }}</th>
                        <th>{{ PHONE }}</th>
                        <th>{{ MESSAGE }}</th>
                        <th>{{ ACTION }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($reviews as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $row->visitor_name }} <br>
                                </td>
                                <td>
                                {{ $row->visitor_email }}
                                   
                                </td>
                                <td>
                                {{ $row->visitor_phone }}
                                </td>
                                <td>
                                {{ $row->visitor_message }}
                                </td>
                                <td>
                                   <a href="{{ route('admin_show_finance_review',$row->id) }}" class="btn btn-info btn-sm" ><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin_delete_contact_form',$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('{{ ARE_YOU_SURE }}');"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection
