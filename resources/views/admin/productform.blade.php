@extends('admin.bmain')
@section('main-section')
    <div class="csss">

        <title>Product Form</title>
        {{-- <link rel="stylesheet"
        href="styles.css"> --}}
        </head>

        <body>
            <div class="container">
                <h1>Product Form</h1>
                <form action="{{ url('/pstore') }}" method="post">
                    @csrf
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>

                    <label for="category">Category:</label>
                    <select id="category" name="category" required>
                        <option value="" disabled selected>Select Category</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>

                    <label for="subcategory">Subcategory:</label>
                    <select id="subcategory" name="subcategory" required>
                        <option value="" disabled selected>Select Subcategory</option>
                    </select>

                    <label for="brand">Brand:</label>
                    <select id="brand" name="brand" required>

                        <option value="" disabled selected>Select Brand</option>
                        @foreach ($brands as $itemss)
                            <option value="{{ $itemss->id }}">{{ $itemss->name }}</option>
                        @endforeach


                        <!-- Add more options as needed -->
                    </select>
                    <label for="brand">Color:</label>
                    <select id="color" name="color" required>

                        <option value="" disabled selected>Select Color</option>
                        @foreach ($color as $itemss)
                            <option value="{{ $itemss->id }}">{{ $itemss->color_name }}</option>
                        @endforeach


                        <!-- Add more options as needed -->
                    </select>
                    </select>
                    <label for="brand">size:</label>
                    <select id="color" name="size" required>

                        <option value="" disabled selected>Select Size</option>
                        @foreach ($size as $itemss)
                            <option value="{{ $itemss->id }}">{{ $itemss->size_name }}</option>
                        @endforeach


                        <!-- Add more options as needed -->
                    </select>

                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" step="10" required>

                    <label for="discountedPrice">Discounted Price:</label>
                    <input type="number" id="discountedPrice" name="discountedPrice" step="10">

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" required></textarea>


                    <!-- Your other form fields here -->

                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                    <div id="imagePreview"></div> <!-- Image preview container -->

                    <label for="gallery">Gallery:</label>
                    <input type="file" id="gallery" name="gallery[]" accept="image/*" multiple required>
                    <div id="galleryPreview"></div>
                    <button type="submit">Submit</button>
                </form>

            </div>
        @endsection
