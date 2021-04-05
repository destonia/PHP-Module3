@extends('layout.form')
@section('content')
<div class="row" style="background-color: #1a202c">
    <div class="col-sm-3">

    </div>
    <div class="bs-example col-sm-6 " style="background-color: lightblue">

        <h1 class="border-top pb-3 mb-4"style="text-align: center">Add new Product</h1>
        <form class="needs-validation" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-sm-6 ">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="name">Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Product's Name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="category_id">Category</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="category_id" id="category_id" required>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div >
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="brand_id">Brand</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="brand_id" id="brand_id" required>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" >{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div >
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="quantity">Quantity</label>
                        <div class="col-sm-9">
                            <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="price">Price</label>
                        <div class="col-sm-9">
                            <input type="text" name="price" class="form-control" id="price" placeholder="Product's Price" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="weight">Weight</label>
                        <div class="col-sm-9">
                            <input type="number" min="0d" name="weight" class="form-control" id="weight" placeholder="Product's Weight" >
                        </div>
                    </div>

                </div>
                <div class="form-group col-sm-6">
                    <div class="card">
                        <img style="height: 350px; object-fit: cover" id="output" class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" onchange="loadFile(event)" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="desc">Description: </label>
                <div class="col-sm-9">
                    <textarea type="textarea" class="form-control" name="desc" id="desc" placeholder="Short information of the product" required></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="content">Content: </label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="content" id="content" placeholder="Full information of the product" required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12" style="text-align: center">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

