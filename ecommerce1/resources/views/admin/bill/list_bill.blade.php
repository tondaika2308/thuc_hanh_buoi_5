@extends('admin.layout.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Đơn hàng
                        <small>Danh sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Họ tên khách hàng</th>
                        <th>Email</th>
                        <th>Mã giảm giá</th>
                        <th>Ngày mua</th>
                        <th>Tổng tiền</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($bills as $bill)
                        <tr class="odd gradeX" align="center">
                            <td>{{$bill->id}}</td>

                            <td></td>
                            <td></td>
                            <td>
                            </td>
                            <td>

                            </td>
                            <td>
                                {{number_format($bill->total_price)}}
                            </td>

                            <td class="center"><i class="fa fa-trash-o fa-fw "></i><a
                                        href="admin/don-hang/xoa/{{$bill->id}}" class='btn-del'> Xoá</a></td>
                            <td class="center"><i class="fa fa-search fa-fw"></i> <a
                                        href="admin/don-hang/chi-tiet/{{$bill->id}}">Chi Tiết</a></td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection