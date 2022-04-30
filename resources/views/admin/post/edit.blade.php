@extends('layouts.admin_layout')

@section('title', 'Edit Post')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Post: {{$post['title']}}</h1>
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
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <form action="{{route('post.update',$post['id'])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body col-sm-12">
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputEmail1">Post Name</label>
                                        <input type="text" value="{{$post['title']}}" name="title" class="form-control"
                                               id="exampleInputEmail1"
                                               placeholder="Enter category name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-sm-3">
                                        <label>Select Category</label>
                                        <select name="cat_id" class="form-control">
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{$category['id']}}"
                                                    @if($category['id'] == $post['cat_id'])selected
                                                    @endif>
                                                    {{$category['title']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea name="text" class="editor">{{$post['text']}} </textarea>
                                </div>

                                <div class="form-group col-sm-12">
                                    <label for="feature_image">Изображение статьи</label>
                                    <img src="{{ $post['img'] }}" alt="" class="img-uploaded"
                                         style="display: block; width: 300px">
                                    <input type="text" value="{{ $post['img'] }}" name="img" class="form-control"
                                           id="feature_image" name="feature_image" value="" readonly>
                                    <button href="" class="popup_selector btn btn-primary m-2" data-inputid="feature_image">Выбрать изображение</button>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.container-fluid -->
    </section>

    </div>

@endsection
