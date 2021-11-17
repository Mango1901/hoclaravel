@extends('admin_layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Edit Product
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="{{URL::to('/update-product/'.$edit_product->id)}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">ProductName</label>
                                <input type="text" name="product_name" data-validation="length" data-validation-length="min3" class="form-control" id="exampleInputEmail1" value="{{$edit_product->name}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">CategoryName</label>
                            </div>
                            <select name="category_name" class="form-control input-sm m-bot15">
                                <option value="{{$edit_product->category_id}}">{{$edit_product->category_name}}</option>
                                @foreach($categories as $category)
                                    @if($category->id != $edit_product->category_id )
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="form-group">
                                <label for="exampleInputEmail1">ProductPrice</label>
                                <input type="number" name="product_price" data-validation="number"  class="form-control" id="exampleInputEmail1" value="{{$edit_product->price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">ProductImage</label>
                                <img src="{{URL::to('style/uploads/product/'.$edit_product->image)}}">
                                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea name="product_description" rows="8" class="form-control" data-validation="length" data-validation-length="min3" id="ckEditor6">{{$edit_product->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Content</label>
                                <textarea name="product_content" rows="8" data-validation="length" data-validation-length="min3" class="form-control" id="ckEditor7">{{$edit_product->content}}</textarea>
                            </div>
                            <input type="submit" name="update_product" value="Update" class="btn btn-info">
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
