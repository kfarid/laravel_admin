@extends('layouts.admin_layout')

@section('title', 'Contact Us Message')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Contact Us Message </h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <section class="col-lg-12">

                        <!-- Default box -->
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th style="width: 5%">
                                            ID
                                        </th>
                                        <th style="width: 20%">
                                            Name
                                        </th>
                                        <th style="width: 20%">
                                            Email
                                        </th>
                                        <th style="width: 20%">
                                            Subject
                                        </th>
                                        <th style="width: 20%">
                                            Date
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            {{$contacts['id']}}
                                        </td>
                                        <td>
                                            {{$contacts['name']}}
                                        </td>
                                        <td>
                                            {{$contacts['email']}}
                                        </td>
                                        <td>
                                            {{$contacts['subject']}}
                                        </td>
                                        <td>
                                            {{$contacts['created_at']}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </section>
                    <table border="0" cellpadding="0" cellspacing="0" class="body">
                        <tbody>
                        <tr>
                            <td>&nbsp;</td>
                            <td class="container">
                                <div class="content">

                                    <table class="main">

                                        <!-- START MAIN CONTENT AREA -->
                                        <tbody>
                                        <tr>
                                            <td class="wrapper">
                                                <table border="0" cellpadding="0" cellspacing="0">
                                                    <tbody>

                                                        {{$contacts->message}}
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <!-- END MAIN CONTENT AREA -->
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <!-- /.container-fluid -->
    </section>




    </div>

@endsection
