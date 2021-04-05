@extends('layout.form')
<body>
@section('content')
<div class="row" style="background-color: #1a202c">
    <div class="col-sm-3">

    </div>
    <div class="bs-example col-sm-6 " style="background-color: lightblue">
        <h1 class="border-top pb-3 mb-4" style="text-align: center">Edit Product: {{$product['name']}}</h1>
        <form class="needs-validation" action="{{route('products.update',$product['id'])}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-sm-6 ">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="name">Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name"
                                   value="{{$product['name']}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="category_id">Category</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="category_id">
                                @foreach($categories as $category)
                                    <option
                                        @if($category['id']== $product['category_id'])
                                        selected
                                        @endif
                                        value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="brand_id">Brand</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="brand_id">
                                @foreach($brands as $brand)
                                    <option
                                        @if($brand['id']== $product['Brand_id'])
                                        selected
                                        @endif
                                        value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="quantity">Quantity</label>
                        <div class="col-sm-9">
                            <input type="text" name="quantity" class="form-control" id="quantity"
                                   value="{{$product['quantity']}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="price">Price</label>
                        <div class="col-sm-9">
                            <input type="number" name="price" min="0" class="form-control" id="price"
                                   value="{{$product['price']}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="weight">Weight</label>
                        <div class="col-sm-9">
                            <input type="number" min="0" name="weight" class="form-control" id="weight"
                                   value="{{$product['weight']}}">
                        </div>
                    </div>

                </div>
                <div class="form-group col-sm-6">
                    <div class="card">
                        <img style="height: 350px; object-fit: cover" id="output" class="card-img-top"
                             src="{{asset('storage/'.$product['image'])}}" alt="Card image cap">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" onchange="loadFile(event)" id="image"
                               name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="desc">Description: </label>
                <div class="col-sm-9">
                    <textarea type="textarea" class="form-control" name="desc" id="desc"
                              required>{{$product['desc']}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="content">Content: </label>
                <div class="col-sm-9">
                    <textarea type="textarea" class="form-control" name="content" id="content"
                              required>{{$product['content']}}</textarea>
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
</body>


