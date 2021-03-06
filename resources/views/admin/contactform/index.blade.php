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
                                        <th style="width: 40%">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td>
                                                {{$contact['id']}}
                                            </td>
                                            <td>
                                                {{$contact['name']}}
                                            </td>
                                            <td>
                                                {{$contact['email']}}
                                            </td>
                                            <td>
                                                {{$contact['subject']}}
                                            </td>
                                            <td>
                                                {{$contact['created_at']}}
                                            </td>
                                            <td class="project-actions text-right">
                                                @if(auth()->user()->can('show'))
                                                    <a class="btn btn-info btn-sm"
                                                       href="{{route('contactform.show',$contact['id'])}}">
                                                        <i class="fas fa-eye">
                                                        </i>
                                                        Show
                                                    </a>
                                                @endif
                                                @if(auth()->user()->can('delete'))
                                                    <form action="{{route('contactform.destroy',$contact->id)}}"
                                                          method="POST"
                                                          style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Delete
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </section>
                </div>
            </div>
        </section>
    </div>
    <!-- /.container-fluid -->
    </section>

    </div>

@endsection
